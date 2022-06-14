<?php

namespace App\Console\Commands;

use App\Models\monitors;
use App\Models\Monitor_response;
use App\Models\UserLogModel;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use Illuminate\Mail\Mailable;

class monitor_up_down extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor_up_down';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $monitorslist = monitors::where('pause', '0')->with('monitorcontact.contact')->get()->toArray();
        // dd($monitorslist);
        if (empty($monitorslist)) {
                dd("try again");
        } else {
            
            foreach ($monitorslist as $mt) {
                $timeout = Carbon::parse($mt['timeout'])->format('s');

                if ($mt["monitor_type_id"] == 1) {
                    $monitorslist_type = monitors::where('pause', '0')->where('monitor_type_id', '1')->with('monitorcontact.contact')->get()->toArray();

                    foreach ($monitorslist_type as $m) {

                        $result = UserLogModel::where('monitor_id', $m['id'])->orderBy('created_at', 'desc')->limit(1)->get()->toArray();

                        if (!empty($result)) {

                            if ($result[0]['status'] == 'start') {
                                $curTime = microtime(true);
                                $curl = curl_init();
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => $m['url_ip'],
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_RETURNTRANSFER, true,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => array(
                                        "cache-control : no-cache",
                                    ),
                                ));

                                $response = curl_exec($curl);
                                $status = curl_getinfo($curl);

                                $err = curl_error($curl);
                                curl_close($curl);
                                if ($err) {
                                    echo "cURL Error #:" . $err;
                                } else {

                                    $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                    $response_model = new Monitor_response();
                                    $response_model->monitor_id = $m['id'];
                                    $response_model->response_time = $timeConsumed;
                                    $response_model->save();
                                }

                                //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                                $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                $dt = 'wsl ping -c 10';
                                $data = $dt . ' ' . $urls;
                                //echo $data.PHP_EOL;
                                $output = shell_exec($data);
                                $value = substr($output, strrpos($output, '=') + 1);
                                // dd($value);
                                $data = str_replace(array("\r", "\n"), '', $value);
                                $values = explode('/', $value);

                                if (!empty($values[1])) {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {

                                        foreach ($m['monitorcontact'] as $c) {
                                            if (!empty($c['contact']['status']) == 1) {

                                                $logs->status = 'Up';
                                                $logs->user_id = $m['user_id'];
                                                if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Up';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //    \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                                $logs->min = $values[0];
                                                $logs->avg = $values[1];
                                                $logs->max = $values[2];
                                                $logs->mdev = $values[3];
                                                $logs->interval = $m['interval'];
                                                $logs->StatusCode = $status['http_code'];
                                                $logs->save();

                                                $data = array('status' => 1);
                                                monitors::where('id', $m['id'])->update($data);

                                            }
                                        }
                                    }

                                } else {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {
                                        foreach ($m['monitorcontact'] as $c) {
                                            $logs->status = 'Down';
                                            $logs->user_id = $m['user_id'];
                                            if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Down';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                              Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                        }
                                        $logs->save();
                                        $data = array('status' => 0);
                                        monitors::where('id', $m['id'])->update($data);
                                    }

                                }

                            } else {
                                if ($result[0]['status'] == 'Up') {
                                    $interval_time = new DateTime($result[0]['interval']);
                                    $interval = Carbon::parse($interval_time)->format('i');
                                    $latest_date_time = new DateTime($result[0]['created_at']);
                                    $latest_up = Carbon::parse($latest_date_time)->format('Y-m-d H:i:s');
                                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                                    $time1 = $currentdate;
                                    $time2 = new DateTime($latest_up);
                                    $diff = $time1->diff($time2);
                                    if ($diff->i == $interval) {
                                        $curTime = microtime(true);
                                        $curl = curl_init();
                                        curl_setopt_array($curl, array(
                                            CURLOPT_URL => $m['url_ip'],
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => "",
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 30,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => "GET",
                                            CURLOPT_HEADER, true,
                                            CURLOPT_HEADER, true,
                                            CURLOPT_RETURNTRANSFER, true,
                                            CURLOPT_HTTPHEADER => array(
                                                "cache-control: no-cache",
                                                "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                            ),
                                        ));
                                        $response = curl_exec($curl);
                                        $status = curl_getinfo($curl);

                                        $err = curl_error($curl);
                                        curl_close($curl);
                                        if ($err) {
                                            continue;
                                        } else {
                                            $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;

                                            $response_model = new Monitor_response();
                                            $response_model->monitor_id = $m['id'];
                                            $response_model->response_time = $timeConsumed;
                                            $response_model->save();
                                        }
                                        $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                        $dt = 'wsl ping -c 10';
                                        $data = $dt . ' ' . $urls;
                                        $output = shell_exec($data);
                                        $value = substr($output, strrpos($output, '=') + 1);
                                        $data = str_replace(array("\r", "\n"), '', $value);
                                        $values = explode('/', $value);

                                        if (!empty($values[1])) {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {

                                                foreach ($m['monitorcontact'] as $c) {
                                                    if (!empty($c['contact']['status']) == 1) {

                                                        $logs->status = 'Up';
                                                        $logs->user_id = $m['user_id'];

                                                        if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                            $details['status'] = 'Up';
                                                            $details['monitor'] = $m['friendly_name'];
                                                            $details['user'] = $c['contact']['Friendly_Name'];
                                                            $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                            //     \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                        }
                                                        $logs->min = $values[0];
                                                        $logs->avg = $values[1];
                                                        $logs->max = $values[2];
                                                        $logs->mdev = $values[3];
                                                        $logs->interval = $m['interval'];
                                                        $logs->StatusCode = $status['http_code'];
                                                        $logs->save();

                                                        $data = array('status' => 1);
                                                        monitors::where('id', $m['id'])->update($data);
                                                    }
                                                }
                                            }

                                        } else {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {
                                                foreach ($m['monitorcontact'] as $c) {
                                                    $logs->status = 'Down';
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->StatusCode = $status['http_code'];
                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                }
                                                $logs->save();
                                                $data = array('status' => 0);
                                                monitors::where('id', $m['id'])->update($data);
                                            }

                                        }
                                    } else {
                                        continue;
                                    }
                                } else {
                                    $curTime = microtime(true);
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => $m['url_ip'],
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => "",
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 30,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => "GET",
                                        CURLOPT_HEADER, true,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_RETURNTRANSFER, true,
                                        CURLOPT_HTTPHEADER => array(
                                            "cache-control: no-cache",
                                            "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                        ),
                                    ));
                                    $response = curl_exec($curl);
                                    $status = curl_getinfo($curl);
                                    $err = curl_error($curl);

                                    curl_close($curl);
                                    if ($err) {
                                        echo "cURL Error #:" . $err;
                                    } else {
                                        $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                        $response_model = new Monitor_response();
                                        $response_model->monitor_id = $m['id'];
                                        $response_model->response_time = $timeConsumed;
                                        $response_model->save();
                                    }
                                    $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                    $dt = 'wsl ping -c 10';
                                    $data = $dt . ' ' . $urls;
                                    $output = shell_exec($data);
                                    $value = substr($output, strrpos($output, '=') + 1);
                                    $data = str_replace(array("\r", "\n"), '', $value);
                                    $values = explode('/', $value);

                                    if (!empty($values[1])) {
                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {

                                            foreach ($m['monitorcontact'] as $c) {
                                                if (!empty($c['contact']['status']) == 1) {
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->status = 'Up';

                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        $details['monitor_url'] = $m['url_ip'];
                                                        $details['timestamp'] = Carbon::now();
                                                        //$details['user_id']=$m['user_id'];
                                                        //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                    $logs->min = $values[0];
                                                    $logs->avg = $values[1];
                                                    $logs->max = $values[2];
                                                    $logs->mdev = $values[3];
                                                    $logs->interval = $m['interval'];
                                                    $logs->StatusCode = $status['http_code'];

                                                    $logs->save();
                                                    $data = array('status' => 1);
                                                    monitors::where('id', $m['id'])->update($data);
                                                }
                                            }
                                        }

                                    } else {

                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {
                                            foreach ($m['monitorcontact'] as $c) {
                                                $logs->status = 'Down';
                                                $logs->user_id = $m['user_id'];
                                                $logs->StatusCode = $status['http_code'];
                                                if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Down';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //$details['user_id']=$m['user_id'];
                                                    //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                            }
                                            $logs->save();
                                            $data = array('status' => 0);
                                            $d = monitors::where('id', $m['id'])->update($data);
                                        }

                                    }
                                }

                            }
                        } else {
                            $curTime = microtime(true);
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => $m['url_ip'],
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HEADER, true,
                                CURLOPT_HEADER, true,
                                CURLOPT_RETURNTRANSFER, true,
                                CURLOPT_HTTPHEADER => array(
                                    "cache-control : no-cache",
                                    "postman-token : aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                ),
                            ));

                            $response = curl_exec($curl);

                            $status = curl_getinfo($curl);

                            //  dd($status);
                            $err = curl_error($curl);

                            curl_close($curl);
                            if ($err) {
                                echo "cURL Error #:" . $err;
                            } else {

                                $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                $response_model = new Monitor_response();
                                $response_model->monitor_id = $m['id'];
                                $response_model->response_time = $timeConsumed;
                                $response_model->save();
                            }

                            //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                            $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                            $dt = 'wsl ping -c 10 ';
                            $data = $dt . ' ' . $urls;
                            // dd($data);
                            //echo $data.PHP_EOL;
                            $output = shell_exec($data);

                            $value = substr($output, strrpos($output, '=') + 1);

                            $data = str_replace(array("\r", "\n"), '', $value);

                            $values = explode('/', $value);
                            // dd($values);
                            if (!empty($values[1])) {

                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {

                                    foreach ($m['monitorcontact'] as $c) {

                                        if (!empty($c['contact']['status']) == 1) {
                                            //dd($m);
                                            $logs->status = 'Up';
                                            $logs->user_id = $m['user_id'];
                                            if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Up';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                                // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                            $logs->min = $values[0];
                                            $logs->avg = $values[1];
                                            $logs->max = $values[2];
                                            $logs->mdev = $values[3];
                                            $logs->interval = $m['interval'];
                                            $logs->StatusCode = $status['http_code'];
                                            //  dd($logs);
                                            $logs->save();
                                            $data = array('status' => 1);
                                            monitors::where('id', $m['id'])->update($data);
                                        }
                                    }
                                }

                            } else {
                                // dd('g');
                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {
                                    foreach ($m['monitorcontact'] as $c) {
                                        $logs->status = 'Down';
                                        $logs->user_id = $m['user_id'];
                                        $logs->StatusCode = $status['http_code'];
                                        if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                            $details['status'] = 'Down';
                                            $details['monitor'] = $m['friendly_name'];
                                            $details['user'] = $c['contact']['Friendly_Name'];
                                            $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                            $details['monitor_url'] = $m['url_ip'];
                                            $details['timestamp'] = Carbon::now();
                                            //$details['user_id']=$m['user_id'];
                                          Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                        }

                                    }
                                    $logs->save();
                                    $data = array('status' => 1);
                                    monitors::where('id', $m['id'])->update($data);
                                }

                            }
                        }
                    }
                }

                if ($mt["monitor_type_id"] == 2) {
                    $monitorslist_type = monitors::where('pause', '0')->where('monitor_type_id', '2')->with('monitorcontact.contact')->get()->toArray();

                    foreach ($monitorslist_type as $m) {

                        $result = UserLogModel::where('monitor_id', $m['id'])->orderBy('created_at', 'desc')->limit(1)->get()->toArray();

                        if (!empty($result)) {
                            if ($result[0]['status'] == 'start') {
                                $curTime = microtime(true);
                                $curl = curl_init();
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => $m['url_ip'],
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_RETURNTRANSFER, true,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => array(
                                        "cache-control : no-cache",
                                    ),
                                ));

                                $response = curl_exec($curl);
                                $status = curl_getinfo($curl);

                                $err = curl_error($curl);
                                curl_close($curl);
                                if ($err) {
                                    echo "cURL Error #:" . $err;
                                } else {

                                    $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                    $response_model = new Monitor_response();
                                    $response_model->monitor_id = $m['id'];
                                    $response_model->response_time = $timeConsumed;
                                    $response_model->save();
                                }

                                //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                                $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                $dt = 'wsl ping -c 10';
                                $data = $dt . ' ' . $urls;
                                //echo $data.PHP_EOL;
                                $output = shell_exec($data);
                                $value = substr($output, strrpos($output, '=') + 1);
                                // dd($value);
                                $data = str_replace(array("\r", "\n"), '', $value);
                                $values = explode('/', $value);

                                if (!empty($values[1])) {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];

                                    if (!empty($m['monitorcontact'])) {

                                        foreach ($m['monitorcontact'] as $c) {
                                            if (!empty($c['contact']['status']) == 1) {

                                                $logs->status = 'Up';
                                                $logs->user_id = $m['user_id'];
                                                if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Up';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //    \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                                $logs->min = $values[0];
                                                $logs->avg = $values[1];
                                                $logs->max = $values[2];
                                                $logs->mdev = $values[3];
                                                $logs->interval = $m['interval'];
                                                $logs->StatusCode = $status['http_code'];
                                                $logs->save();
                                                $data = array('status' => 1);
                                                monitors::where('id', $m['id'])->update($data);
                                            }
                                        }
                                    }

                                } else {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {
                                        foreach ($m['monitorcontact'] as $c) {
                                            $logs->status = 'Down';
                                            $logs->user_id = $m['user_id'];
                                            $logs->StatusCode = $status['http_code'];
                                            if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Down';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                              Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                        }
                                        $logs->save();
                                        $data = array('status' => 0);
                                        monitors::where('id', $m['id'])->update($data);
                                    }

                                }

                            } else {
                                if ($result[0]['status'] == 'Up') {
                                    $interval_time = new DateTime($result[0]['interval']);
                                    $interval = Carbon::parse($interval_time)->format('i');
                                    $latest_date_time = new DateTime($result[0]['created_at']);
                                    $latest_up = Carbon::parse($latest_date_time)->format('Y-m-d H:i:s');
                                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                                    $time1 = $currentdate;
                                    $time2 = new DateTime($latest_up);
                                    $diff = $time1->diff($time2);
                                    if ($diff->i == $interval) {
                                        $curTime = microtime(true);
                                        $curl = curl_init();
                                        curl_setopt_array($curl, array(
                                            CURLOPT_URL => $m['url_ip'],
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => "",
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 30,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => "GET",
                                            CURLOPT_HEADER, true,
                                            CURLOPT_HEADER, true,
                                            CURLOPT_RETURNTRANSFER, true,
                                            CURLOPT_HTTPHEADER => array(
                                                "cache-control: no-cache",
                                                "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                            ),
                                        ));
                                        $response = curl_exec($curl);
                                        $status = curl_getinfo($curl);
                                        $err = curl_error($curl);
                                        curl_close($curl);
                                        if ($err) {
                                            continue;
                                        } else {
                                            $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;

                                            $response_model = new Monitor_response();
                                            $response_model->monitor_id = $m['id'];
                                            $response_model->response_time = $timeConsumed;
                                            $response_model->save();
                                        }
                                        $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                        $dt = 'wsl ping -c 10';
                                        $data = $dt . ' ' . $urls;
                                        $output = shell_exec($data);
                                        $value = substr($output, strrpos($output, '=') + 1);
                                        $data = str_replace(array("\r", "\n"), '', $value);
                                        $values = explode('/', $value);

                                        if (!empty($values[1])) {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {

                                                foreach ($m['monitorcontact'] as $c) {
                                                    if (!empty($c['contact']['status']) == 1) {

                                                        $logs->status = 'Up';
                                                        $logs->user_id = $m['user_id'];

                                                        if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                            $details['status'] = 'Up';
                                                            $details['monitor'] = $m['friendly_name'];
                                                            $details['user'] = $c['contact']['Friendly_Name'];
                                                            $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                            //     \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                        }
                                                        $logs->min = $values[0];
                                                        $logs->avg = $values[1];
                                                        $logs->max = $values[2];
                                                        $logs->mdev = $values[3];
                                                        $logs->interval = $m['interval'];
                                                        $logs->StatusCode = $status['http_code'];
                                                        $logs->save();
                                                        $data = array('status' => 1);
                                                        monitors::where('id', $m['id'])->update($data);
                                                    }
                                                }
                                            }

                                        } else {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {
                                                foreach ($m['monitorcontact'] as $c) {
                                                    $logs->status = 'Down';
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->StatusCode = $status['http_code'];
                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                }
                                                $logs->save();
                                                $data = array('status' => 0);
                                                monitors::where('id', $m['id'])->update($data);
                                            }

                                        }
                                    } else {
                                        continue;
                                    }
                                } else {
                                    $curTime = microtime(true);
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => $m['url_ip'],
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => "",
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 30,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_RETURNTRANSFER, true,
                                        CURLOPT_CUSTOMREQUEST => "GET",
                                        CURLOPT_HTTPHEADER => array(
                                            "cache-control: no-cache",
                                            "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                        ),
                                    ));
                                    $response = curl_exec($curl);
                                    $status = curl_getinfo($curl);
                                    $err = curl_error($curl);
                                    curl_close($curl);
                                    if ($err) {
                                        echo "cURL Error #:" . $err;
                                    } else {
                                        $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                        $response_model = new Monitor_response();
                                        $response_model->monitor_id = $m['id'];
                                        $response_model->response_time = $timeConsumed;
                                        $response_model->save();
                                    }
                                    $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                    $dt = 'wsl ping -c 10';
                                    $data = $dt . ' ' . $urls;
                                    $output = shell_exec($data);
                                    $value = substr($output, strrpos($output, '=') + 1);
                                    $data = str_replace(array("\r", "\n"), '', $value);
                                    $values = explode('/', $value);

                                    if (!empty($values[1])) {
                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {

                                            foreach ($m['monitorcontact'] as $c) {
                                                if (!empty($c['contact']['status']) == 1) {
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->status = 'Up';

                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        $details['monitor_url'] = $m['url_ip'];
                                                        $details['timestamp'] = Carbon::now();
                                                        //$details['user_id']=$m['user_id'];
                                                        //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                    $logs->min = $values[0];
                                                    $logs->avg = $values[1];
                                                    $logs->max = $values[2];
                                                    $logs->mdev = $values[3];
                                                    $logs->interval = $m['interval'];
                                                    $logs->StatusCode = $status['http_code'];

                                                    $logs->save();
                                                    $data = array('status' => 1);
                                                    monitors::where('id', $m['id'])->update($data);
                                                }
                                            }
                                        }

                                    } else {

                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {
                                            foreach ($m['monitorcontact'] as $c) {
                                                $logs->status = 'Down';
                                                $logs->user_id = $m['user_id'];
                                                $logs->StatusCode = $status['http_code'];
                                                if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Down';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //$details['user_id']=$m['user_id'];
                                                    //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                            }
                                            $logs->save();
                                            $data = array('status' => 0);
                                            monitors::where('id', $m['id'])->update($data);
                                        }

                                    }
                                }

                            }
                        } else {
                            $curTime = microtime(true);
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => $m['url_ip'],
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HEADER, true,
                                CURLOPT_HEADER, true,
                                CURLOPT_RETURNTRANSFER, true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HTTPHEADER => array(
                                    "cache-control : no-cache",
                                ),
                            ));

                            $response = curl_exec($curl);
                            $status = curl_getinfo($curl);
                            $err = curl_error($curl);
                            curl_close($curl);
                            if ($err) {
                                echo "cURL Error #:" . $err;
                            } else {

                                $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                $response_model = new Monitor_response();
                                $response_model->monitor_id = $m['id'];
                                $response_model->response_time = $timeConsumed;
                                $response_model->save();
                            }

                            //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                            $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                            $dt = 'wsl ping -c 10 ';
                            $data = $dt . ' ' . $urls;

                            //echo $data.PHP_EOL;
                            $output = shell_exec($data);

                            $value = substr($output, strrpos($output, '=') + 1);

                            $data = str_replace(array("\r", "\n"), '', $value);

                            $values = explode('/', $value);

                            if (!empty($values[1])) {

                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {

                                    foreach ($m['monitorcontact'] as $c) {

                                        if (!empty($c['contact']['status']) == 1) {
                                            //dd($m);
                                            $logs->status = 'Up';
                                            $logs->user_id = $m['user_id'];
                                            if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Up';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                                // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                            $logs->min = $values[0];
                                            $logs->avg = $values[1];
                                            $logs->max = $values[2];
                                            $logs->mdev = $values[3];
                                            $logs->interval = $m['interval'];
                                            $logs->StatusCode = $status['http_code'];
                                            // dd($logs);
                                            $logs->save();
                                            $data = array('status' => 1);
                                            monitors::where('id', $m['id'])->update($data);
                                        }
                                    }
                                }

                            } else {
                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {
                                    foreach ($m['monitorcontact'] as $c) {
                                        $logs->status = 'Down';
                                        $logs->user_id = $m['user_id'];
                                        $logs->StatusCode = $status['http_code'];
                                        if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                            $details['status'] = 'Down';
                                            $details['monitor'] = $m['friendly_name'];
                                            $details['user'] = $c['contact']['Friendly_Name'];
                                            $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                            $details['monitor_url'] = $m['url_ip'];
                                            $details['timestamp'] = Carbon::now();
                                            //$details['user_id']=$m['user_id'];
                                          Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                        }

                                    }
                                    $logs->save();
                                    $data = array('status' => 0);
                                    monitors::where('id', $m['id'])->update($data);
                                }

                            }
                        }
                    }
                }

                if ($mt["monitor_type_id"] == 3) {

                    $monitorslist_type = monitors::where('pause', '0')->where('monitor_type_id', '3')->with('monitorcontact.contact')->get()->toArray();

                    foreach ($monitorslist_type as $m) {

                        $result = UserLogModel::where('monitor_id', $m['id'])->orderBy('created_at', 'desc')->limit(1)->get()->toArray();
                        //dd( $result);
                        if (!empty($result)) {
                          
                            if ($result[0]['status'] == 'start') {
                                $curTime = microtime(true);
                                $curl = curl_init();
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => $m['url_ip'],
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_RETURNTRANSFER, true,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => array(
                                        "cache-control : no-cache",
                                    ),
                                ));

                                $response = curl_exec($curl);
                                $status = curl_getinfo($curl);
                              //  dd($status);
                                $err = curl_error($curl);
                                curl_close($curl);
                                if ($err) {
                                    echo "cURL Error #:" . $err;
                                } else {

                                    $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                    $response_model = new Monitor_response();
                                    $response_model->monitor_id = $m['id'];
                                    $response_model->response_time = $timeConsumed;
                                    $response_model->save();
                                }

                                //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                                $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                $dt = 'wsl ping -c 10';
                                $data = $dt . ' ' . $urls;
                                //echo $data.PHP_EOL;
                                $output = shell_exec($data);
                                $value = substr($output, strrpos($output, '=') + 1);
                                // dd($value);
                                $data = str_replace(array("\r", "\n"), '', $value);
                                $values = explode('/', $value);

                                if (!empty($values[1])) {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {

                                        foreach ($m['monitorcontact'] as $c) {
                                            if (!empty($c['contact']['status']) == 1) {

                                                $logs->status = 'Up';
                                                $logs->user_id = $m['user_id'];
                                                if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Up';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //    \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                                $logs->min = $values[0];
                                                $logs->avg = $values[1];
                                                $logs->max = $values[2];
                                                $logs->mdev = $values[3];
                                                $logs->interval = $m['interval'];
                                                $logs->StatusCode = $status['http_code'];
                                                $logs->save();
                                                $data = array('status' => 1);
                                                monitors::where('id', $m['id'])->update($data);
                                            }
                                        }
                                    }

                                } else {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {
                                        foreach ($m['monitorcontact'] as $c) {
                                            $logs->status = 'Down';
                                            $logs->user_id = $m['user_id'];
                                            $logs->StatusCode = $status['http_code'];
                                            if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Down';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                              Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                        }
                                        $logs->save();
                                        $data = array('status' => 0);
                                        monitors::where('id', $m['id'])->update($data);
                                    }

                                }

                            } else {
                                if ($result[0]['status'] == 'Up') {
                                  
                                    $interval_time = new DateTime($result[0]['interval']);
                                    $interval = Carbon::parse($interval_time)->format('i');
                                    $latest_date_time = new DateTime($result[0]['created_at']);
                                    $latest_up = Carbon::parse($latest_date_time)->format('Y-m-d H:i:s');
                                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                                    $time1 = $currentdate;
                                    $time2 = new DateTime($latest_up);
                                    $diff = $time1->diff($time2);
                                    
                                    if ($diff->i == $interval) {
                                        $curTime = microtime(true);
                                        $curl = curl_init();
                                        curl_setopt_array($curl, array(
                                            CURLOPT_URL => $m['url_ip'],
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => "",
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 30,
                                            CURLOPT_HEADER, true,
                                            CURLOPT_HEADER, true,
                                            CURLOPT_RETURNTRANSFER, true,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => "GET",
                                            CURLOPT_HTTPHEADER => array(
                                                "cache-control: no-cache",
                                                "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                            ),
                                        ));
                                        $response = curl_exec($curl);
                                        $status = curl_getinfo($curl);
                                        $err = curl_error($curl);
                                        curl_close($curl);
                                        if ($err) {
                                            continue;
                                        } else {
                                            $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;

                                            $response_model = new Monitor_response();
                                            $response_model->monitor_id = $m['id'];
                                            $response_model->response_time = $timeConsumed;
                                            $response_model->save();
                                        }
                                        $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                        $dt = 'wsl ping -c 10';
                                        $data = $dt . ' ' . $urls;
                                        $output = shell_exec($data);
                                        $value = substr($output, strrpos($output, '=') + 1);
                                        $data = str_replace(array("\r", "\n"), '', $value);
                                        $values = explode('/', $value);

                                        if (!empty($values[1])) {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {

                                                foreach ($m['monitorcontact'] as $c) {
                                                    if (!empty($c['contact']['status']) == 1) {

                                                        $logs->status = 'Up';
                                                        $logs->user_id = $m['user_id'];

                                                        if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                            $details['status'] = 'Up';
                                                            $details['monitor'] = $m['friendly_name'];
                                                            $details['user'] = $c['contact']['Friendly_Name'];
                                                            $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                            //     \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                        }
                                                        $logs->min = $values[0];
                                                        $logs->avg = $values[1];
                                                        $logs->max = $values[2];
                                                        $logs->mdev = $values[3];
                                                        $logs->interval = $m['interval'];
                                                        $logs->StatusCode = $status['http_code'];
                                                        $logs->save();
                                                        $data = array('status' => 1);
                                                        monitors::where('id', $m['id'])->update($data);
                                                    }
                                                }
                                            }

                                        } else {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            $logs->StatusCode = $status['http_code'];
                                            if (!empty($m['monitorcontact'])) {
                                                foreach ($m['monitorcontact'] as $c) {
                                                    $logs->status = 'Down';
                                                    $logs->user_id = $m['user_id'];
                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                }
                                                $logs->save();
                                                $data = array('status' => 0);
                                                monitors::where('id', $m['id'])->update($data);
                                            }

                                        }
                                    } else {
                                        continue;
                                    }
                                } else {
                                    // dd('ff');
                                    $curTime = microtime(true);
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => $m['url_ip'],
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => "",
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 30,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_RETURNTRANSFER, true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => "GET",
                                        CURLOPT_HTTPHEADER => array(
                                            "cache-control: no-cache",
                                            "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                        ),
                                    ));
                                    $response = curl_exec($curl);
                                    $status = curl_getinfo($curl);
                                    $err = curl_error($curl);
                                    curl_close($curl);
                                    if ($err) {
                                        echo "cURL Error #:" . $err;
                                    } else {
                                        $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                        $response_model = new Monitor_response();
                                        $response_model->monitor_id = $m['id'];
                                        $response_model->response_time = $timeConsumed;
                                        $response_model->save();
                                    }
                                    $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                    $dt = 'wsl ping -c 10';
                                    $data = $dt . ' ' . $urls;
                                    $output = shell_exec($data);
                                    $value = substr($output, strrpos($output, '=') + 1);
                                    $data = str_replace(array("\r", "\n"), '', $value);
                                    $values = explode('/', $value);

                                    if (!empty($values[1])) {
                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {

                                            foreach ($m['monitorcontact'] as $c) {
                                                if (!empty($c['contact']['status']) == 1) {
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->status = 'Up';

                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        $details['monitor_url'] = $m['url_ip'];
                                                        $details['timestamp'] = Carbon::now();
                                                        //$details['user_id']=$m['user_id'];
                                                        //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                    $logs->min = $values[0];
                                                    $logs->avg = $values[1];
                                                    $logs->max = $values[2];
                                                    $logs->mdev = $values[3];
                                                    $logs->interval = $m['interval'];
                                                    $logs->StatusCode = $status['http_code'];

                                                    $logs->save();
                                                    $data = array('status' => 1);
                                                    monitors::where('id', $m['id'])->update($data);
                                                }
                                            }
                                        }

                                    } else {

                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {
                                            foreach ($m['monitorcontact'] as $c) {
                                                $logs->status = 'Down';
                                                $logs->user_id = $m['user_id'];
                                                $logs->StatusCode = $status['http_code'];
                                                if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Down';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //$details['user_id']=$m['user_id'];
                                                    //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                            }
                                            $logs->save();
                                            $data = array('status' => 0);
                                            monitors::where('id', $m['id'])->update($data);
                                        }

                                    }
                                }

                            }
                        } else {
                            $curTime = microtime(true);
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => $m['url_ip'],
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HEADER, true,
                                CURLOPT_HEADER, true,
                                CURLOPT_RETURNTRANSFER, true,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HTTPHEADER => array(
                                    "cache-control : no-cache",
                                ),
                            ));

                            $response = curl_exec($curl);
                            $status = curl_getinfo($curl);
                            $err = curl_error($curl);
                            curl_close($curl);
                            if ($err) {
                                echo "cURL Error #:" . $err;
                            } else {

                                $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                $response_model = new Monitor_response();
                                $response_model->monitor_id = $m['id'];
                                $response_model->response_time = $timeConsumed;
                                $response_model->save();
                            }

                            //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                            $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                            $dt = 'wsl ping -c 10 ';
                            $data = $dt . ' ' . $urls;

                            //echo $data.PHP_EOL;
                            $output = shell_exec($data);

                            $value = substr($output, strrpos($output, '=') + 1);

                            $data = str_replace(array("\r", "\n"), '', $value);

                            $values = explode('/', $value);

                            if (!empty($values[1])) {

                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {

                                    foreach ($m['monitorcontact'] as $c) {

                                        if (!empty($c['contact']['status']) == 1) {
                                            //dd($m);
                                            $logs->status = 'Up';
                                            $logs->user_id = $m['user_id'];
                                            if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Up';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                                // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                            $logs->min = $values[0];
                                            $logs->avg = $values[1];
                                            $logs->max = $values[2];
                                            $logs->mdev = $values[3];
                                            $logs->interval = $m['interval'];
                                            $logs->StatusCode = $status['http_code'];
                                            // dd($logs);
                                            $logs->save();
                                            $data = array('status' => 1);
                                            monitors::where('id', $m['id'])->update($data);
                                        }
                                    }
                                }

                            } else {
                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {
                                    foreach ($m['monitorcontact'] as $c) {
                                        $logs->status = 'Down';
                                        $logs->user_id = $m['user_id'];
                                        $logs->StatusCode = $status['http_code'];
                                        if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                            $details['status'] = 'Down';
                                            $details['monitor'] = $m['friendly_name'];
                                            $details['user'] = $c['contact']['Friendly_Name'];
                                            $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                            $details['monitor_url'] = $m['url_ip'];
                                            $details['timestamp'] = Carbon::now();
                                            //$details['user_id']=$m['user_id'];
                                          Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                        }

                                    }
                                    $logs->save();
                                    $data = array('status' => 0);
                                    monitors::where('id', $m['id'])->update($data);
                                }

                            }
                        }

                    }

                }

                if ($mt['monitor_type_id'] == 4) {

                    $monitorslist_type = monitors::where('pause', '0')->where('monitor_type_id', '4')->with('monitorcontact.contact')->get()->toArray();

                    foreach ($monitorslist_type as $m) {
                        if ($m['port'] == 1) {
                            $port = 80;
                        } elseif ($m['port'] == 2) {
                            $port = 443;
                        } elseif ($m['port'] == 3) {
                            $port = 21;
                        } elseif ($m['port'] == 4) {
                            $port = 25;
                        } elseif ($m['port'] == 5) {
                            $port = 110;
                        } elseif ($m['port'] == 6) {
                            $port = 143;
                        } else {
                            $port = $m['port'];
                        }
                        $result = UserLogModel::where('monitor_id', $m['id'])->orderBy('created_at', 'desc')->limit(1)->get()->toArray();

                        if (!empty($result)) {
                            if ($result[0]['status'] == 'start') {
                                $curTime = microtime(true);
                                $curl = curl_init();
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => $m['url_ip'],
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_PORT => $port,
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_HEADER, true,
                                    CURLOPT_RETURNTRANSFER, true,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => array(
                                        "cache-control : no-cache",
                                    ),
                                ));

                                $response = curl_exec($curl);
                                // dd($response);
                                $status = curl_getinfo($curl);
                                $err = curl_error($curl);
                                curl_close($curl);
                                if ($err) {
                                    echo "cURL Error #:" . $err;
                                } else {

                                    $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                    $response_model = new Monitor_response();
                                    $response_model->monitor_id = $m['id'];
                                    $response_model->response_time = $timeConsumed;
                                    $response_model->save();
                                }

                                //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                                $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                $dt = 'wsl ping -c 10';
                                $data = $dt . ' ' . $urls;
                                //echo $data.PHP_EOL;
                                $output = shell_exec($data);
                                $value = substr($output, strrpos($output, '=') + 1);
                                // dd($value);
                                $data = str_replace(array("\r", "\n"), '', $value);
                                $values = explode('/', $value);

                                if (!empty($values[1])) {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {

                                        foreach ($m['monitorcontact'] as $c) {
                                            if (!empty($c['contact']['status']) == 1) {

                                                $logs->status = 'Up';
                                                $logs->user_id = $m['user_id'];
                                                if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Up';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //    \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                                $logs->min = $values[0];
                                                $logs->avg = $values[1];
                                                $logs->max = $values[2];
                                                $logs->mdev = $values[3];
                                                $logs->interval = $m['interval'];
                                                $logs->StatusCode = $status['http_code'];
                                                $logs->save();
                                                $data = array('status' => 1);
                                                monitors::where('id', $m['id'])->update($data);
                                            }
                                        }
                                    }

                                } else {

                                    $logs = new UserLogModel();
                                    $logs->monitor_id = $m['id'];
                                    if (!empty($m['monitorcontact'])) {
                                        foreach ($m['monitorcontact'] as $c) {
                                            $logs->status = 'Down';
                                            $logs->user_id = $m['user_id'];
                                            $logs->StatusCode = $status['http_code'];
                                            if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Down';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                              Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                        }
                                        $logs->save();
                                        $data = array('status' => 0);
                                        monitors::where('id', $m['id'])->update($data);
                                    }

                                }

                            } else {
                                if ($result[0]['status'] == 'Up') {
                                    $interval_time = new DateTime($result[0]['interval']);
                                    $interval = Carbon::parse($interval_time)->format('i');
                                    $latest_date_time = new DateTime($result[0]['created_at']);
                                    $latest_up = Carbon::parse($latest_date_time)->format('Y-m-d H:i:s');
                                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                                    $time1 = $currentdate;
                                    $time2 = new DateTime($latest_up);
                                    $diff = $time1->diff($time2);
                                    if ($diff->i == $interval) {
                                        $curTime = microtime(true);
                                        $curl = curl_init();
                                        curl_setopt_array($curl, array(
                                            CURLOPT_URL => $m['url_ip'],
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => "",
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 30,
                                            CURLOPT_HEADER, true,
                                            CURLOPT_HEADER, true,
                                            CURLOPT_RETURNTRANSFER, true,
                                            CURLOPT_PORT => $port,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => "GET",
                                            CURLOPT_HTTPHEADER => array(
                                                "cache-control: no-cache",
                                                "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                            ),
                                        ));
                                        $response = curl_exec($curl);
                                        $status = curl_getinfo($curl);
                                        $err = curl_error($curl);
                                        curl_close($curl);
                                        if ($err) {
                                            continue;
                                        } else {
                                            $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;

                                            $response_model = new Monitor_response();
                                            $response_model->monitor_id = $m['id'];
                                            $response_model->response_time = $timeConsumed;
                                            $response_model->save();
                                        }
                                        $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                        $dt = 'wsl ping -c 10';
                                        $data = $dt . ' ' . $urls;
                                        $output = shell_exec($data);
                                        $value = substr($output, strrpos($output, '=') + 1);
                                        $data = str_replace(array("\r", "\n"), '', $value);
                                        $values = explode('/', $value);

                                        if (!empty($values[1])) {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {

                                                foreach ($m['monitorcontact'] as $c) {
                                                    if (!empty($c['contact']['status']) == 1) {

                                                        $logs->status = 'Up';
                                                        $logs->user_id = $m['user_id'];

                                                        if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                            $details['status'] = 'Up';
                                                            $details['monitor'] = $m['friendly_name'];
                                                            $details['user'] = $c['contact']['Friendly_Name'];
                                                            $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                            //     \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                        }
                                                        $logs->min = $values[0];
                                                        $logs->avg = $values[1];
                                                        $logs->max = $values[2];
                                                        $logs->mdev = $values[3];
                                                        $logs->interval = $m['interval'];
                                                        $logs->StatusCode = $status['http_code'];
                                                        $logs->save();
                                                        $data = array('status' => 1);
                                                        monitors::where('id', $m['id'])->update($data);
                                                    }
                                                }
                                            }

                                        } else {

                                            $logs = new UserLogModel();
                                            $logs->monitor_id = $m['id'];
                                            if (!empty($m['monitorcontact'])) {
                                                foreach ($m['monitorcontact'] as $c) {
                                                    $logs->status = 'Down';
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->StatusCode = $status['http_code'];
                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                }
                                                $logs->save();
                                                $data = array('status' => 0);
                                                monitors::where('id', $m['id'])->update($data);
                                            }

                                        }
                                    } else {
                                        continue;
                                    }
                                } else {
                                    $curTime = microtime(true);
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => $m['url_ip'],
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => "",
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_HEADER, true,
                                        CURLOPT_RETURNTRANSFER, true,
                                        CURLOPT_PORT => $port,
                                        CURLOPT_TIMEOUT => 30,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => "GET",
                                        CURLOPT_HTTPHEADER => array(
                                            "cache-control: no-cache",
                                            "postman-token: aa5fbc01-db77-427b-f7a5-379cc4f94092",
                                        ),
                                    ));
                                    $response = curl_exec($curl);
                                    $status = curl_getinfo($curl);
                                    $err = curl_error($curl);
                                    curl_close($curl);
                                    if ($err) {
                                        echo "cURL Error #:" . $err;
                                    } else {
                                        $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                        $response_model = new Monitor_response();
                                        $response_model->monitor_id = $m['id'];
                                        $response_model->response_time = $timeConsumed;
                                        $response_model->save();
                                    }
                                    $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                                    $dt = 'wsl ping -c 10';
                                    $data = $dt . ' ' . $urls;
                                    $output = shell_exec($data);
                                    $value = substr($output, strrpos($output, '=') + 1);
                                    $data = str_replace(array("\r", "\n"), '', $value);
                                    $values = explode('/', $value);

                                    if (!empty($values[1])) {
                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {

                                            foreach ($m['monitorcontact'] as $c) {
                                                if (!empty($c['contact']['status']) == 1) {
                                                    $logs->user_id = $m['user_id'];
                                                    $logs->status = 'Up';

                                                    if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                        $details['status'] = 'Down';
                                                        $details['monitor'] = $m['friendly_name'];
                                                        $details['user'] = $c['contact']['Friendly_Name'];
                                                        $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                        $details['monitor_url'] = $m['url_ip'];
                                                        $details['timestamp'] = Carbon::now();
                                                        //$details['user_id']=$m['user_id'];
                                                        //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                    }

                                                    $logs->min = $values[0];
                                                    $logs->avg = $values[1];
                                                    $logs->max = $values[2];
                                                    $logs->mdev = $values[3];
                                                    $logs->interval = $m['interval'];
                                                    $logs->StatusCode = $status['http_code'];

                                                    $logs->save();
                                                    $data = array('status' => 1);
                                                    monitors::where('id', $m['id'])->update($data);
                                                }
                                            }
                                        }

                                    } else {

                                        $logs = new UserLogModel();
                                        $logs->monitor_id = $m['id'];

                                        if (!empty($m['monitorcontact'])) {
                                            foreach ($m['monitorcontact'] as $c) {
                                                $logs->status = 'Down';
                                                $logs->user_id = $m['user_id'];
                                                $logs->StatusCode = $status['http_code'];
                                                if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                                    $details['status'] = 'Down';
                                                    $details['monitor'] = $m['friendly_name'];
                                                    $details['user'] = $c['contact']['Friendly_Name'];
                                                    $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                                    $details['monitor_url'] = $m['url_ip'];
                                                    $details['timestamp'] = Carbon::now();
                                                    //$details['user_id']=$m['user_id'];
                                                    //      \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                                }

                                            }
                                            $logs->save();
                                            $data = array('status' => 0);
                                            monitors::where('id', $m['id'])->update($data);
                                        }

                                    }
                                }

                            }
                        } else {

                            $curTime = microtime(true);
                            $curl = curl_init();
                            curl_setopt_array($curl, array(
                                CURLOPT_URL => $m['url_ip'],
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_ENCODING => "",
                                CURLOPT_MAXREDIRS => 10,
                                CURLOPT_PORT => $port,
                                CURLOPT_HEADER, true,
                                CURLOPT_HEADER, true,
                                CURLOPT_RETURNTRANSFER, true,
                                CURLOPT_TIMEOUT => 30,
                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                CURLOPT_CUSTOMREQUEST => "GET",
                                CURLOPT_HTTPHEADER => array(
                                    "cache-control : no-cache",
                                ),
                            ));

                            $response = curl_exec($curl);
                            $status = curl_getinfo($curl);
                            $err = curl_error($curl);
                            curl_close($curl);
                            if ($err) {
                                echo "cURL Error #:" . $err;
                            } else {

                                $timeConsumed = round(microtime(true) - $curTime, 3) * 1000;
                                $response_model = new Monitor_response();
                                $response_model->monitor_id = $m['id'];
                                $response_model->response_time = $timeConsumed;
                                $response_model->save();
                            }

                            //$urls = preg_replace("(^(http|https)://)", "", $m['url']);
                            $urls = preg_replace("/^(?:https?:\/\/)?(?:www\.)?/i", "", $m['url_ip']);
                            $dt = 'wsl ping -c 10 ';
                            $data = $dt . ' ' . $urls;

                            //echo $data.PHP_EOL;
                            $output = shell_exec($data);

                            $value = substr($output, strrpos($output, '=') + 1);

                            $data = str_replace(array("\r", "\n"), '', $value);

                            $values = explode('/', $value);

                            if (!empty($values[1])) {

                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {

                                    foreach ($m['monitorcontact'] as $c) {

                                        if (!empty($c['contact']['status']) == 1) {
                                            //dd($m);
                                            $logs->status = 'Up';
                                            $logs->user_id = $m['user_id'];
                                            if ($c['contact']['notification'] == 2 || $c['contact']['notification'] == 0) {
                                                $details['status'] = 'Up';
                                                $details['monitor'] = $m['friendly_name'];
                                                $details['user'] = $c['contact']['Friendly_Name'];
                                                $details['subject'] = 'Monitor is UP:' . $m['friendly_name'];
                                                $details['monitor_url'] = $m['url_ip'];
                                                $details['timestamp'] = Carbon::now();
                                                // \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                            }

                                            $logs->min = $values[0];
                                            $logs->avg = $values[1];
                                            $logs->max = $values[2];
                                            $logs->mdev = $values[3];
                                            $logs->interval = $m['interval'];
                                            $logs->StatusCode = $status['http_code'];
                                            // dd($logs);
                                            $logs->save();
                                            $data = array('status' => 1);
                                            monitors::where('id', $m['id'])->update($data);
                                        }
                                    }
                                }

                            } else {
                                $logs = new UserLogModel();
                                $logs->monitor_id = $m['id'];
                                if (!empty($m['monitorcontact'])) {
                                    foreach ($m['monitorcontact'] as $c) {
                                        $logs->status = 'Down';
                                        $logs->user_id = $m['user_id'];
                                        $logs->StatusCode = $status['http_code'];
                                        if ($c['contact']['notification'] == 1 || $c['contact']['notification'] == 0) {
                                            $details['status'] = 'Down';
                                            $details['monitor'] = $m['friendly_name'];
                                            $details['user'] = $c['contact']['Friendly_Name'];
                                            $details['subject'] = 'Monitor is DOWN:' . $m['friendly_name'];
                                            $details['monitor_url'] = $m['url_ip'];
                                            $details['timestamp'] = Carbon::now();
                                            //$details['user_id']=$m['user_id'];
                                            Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
                                        }

                                    }
                                    $logs->save();
                                    $data = array('status' => 0);
                                    monitors::where('id', $m['id'])->update($data);
                                }

                            }
                        }
                    }
                }

            }

        }
    }
}
