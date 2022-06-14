<?php

namespace App\Http\Controllers;

use App\Models\monitors;
use App\Models\monitor_contact_details;
use App\Models\Monitor_response;
use App\Models\User;
use App\Models\UserLogModel;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class monitors_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert monitor code

        switch ($request->input('newMonitorType')) {
            case ('1'):

                $http = array(
                    'friendly_name' => $request->input('newHTTPMonitorFriendlyName'),
                    'url_ip' => $request->input('newHTTPMonitorURL'),
                    'interval' => gmdate("H:i:s", $request->input('newHTTPMonitorInterval')),
                    'timeout' => gmdate($request->input('newHTTPMonitorTimeout')),
                    'monitor_type_id' => $request->input('newMonitorType'),
                    'pause' => '0',
                    'user_id' => auth()->user()->id,

                );

                $data = monitors::create($http);

                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $data->id,
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', $data->id)->get()->first();

                $id = $data->id;
                $logs = new UserLogModel();
                $logs->monitor_id = $id;
                $logs->status = 'Start';
                $logs->user_id = auth()->user()->id;
                // $logs->min = $values[0];
                // $logs->avg = $values[1];
                // $logs->max = $values[2];
                $logs->interval = $http['interval'];
                $logs->save();

                return array('0' => true, '1' => view('userside.add_monitor', compact('d')));

                // $msg = 'http insert successfully saved.';

                break;

            case ('2'):
                $keyword = array(
                    'friendly_name' => $request->input('newKeywordMonitorFriendlyName'),
                    'url_ip' => $request->input('newKeywordMonitorURL'),
                    'keyword' => $request->input('newKeywordMonitorKeywordValue'),
                    'case_inse' => $request->input('newKeywordCaseType'),
                    'alertWhen' => $request->input('newKeywordMonitorKeywordType'),
                    'interval' => gmdate("H:i:s", $request->input('newKeywordMonitorInterval')),
                    'timeout' => gmdate($request->input('newKeywordMonitorTimeout')),
                    'monitor_type_id' => $request->input('newMonitorType'),
                    'pause' => '0',
                    'user_id' => auth()->user()->id,
                );

                $data = monitors::create($keyword);

                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $data->id,
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', $data->id)->get()->first();

                $id = $data->id;
                $logs = new UserLogModel();
                $logs->monitor_id = $id;
                $logs->status = 'Start';
                $logs->user_id = auth()->user()->id;
                // $logs->min = $values[0];
                // $logs->avg = $values[1];
                // $logs->max = $values[2];
                $logs->interval = $keyword['interval'];
                $logs->save();

                return array('0' => true, '1' => view('userside.add_monitor', compact('d')));

                break;

            case ('3'):

                $ping = array(
                    'friendly_name' => $request->input('newPingMonitorFriendlyName'),
                    'url_ip' => $request->input('newPingMonitorURL'),
                    'interval' => gmdate("H:i:s", $request->input('newPingMonitorInterval')),
                    'monitor_type_id' => $request->input('newMonitorType'),
                    'pause' => '0',
                    'user_id' => auth()->user()->id,
                );

                $data = monitors::create($ping);

                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $data->id,
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', $data->id)->get()->first();

                $id = $data->id;
                $logs = new UserLogModel();
                $logs->monitor_id = $id;
                $logs->status = 'Start';
                $logs->user_id = auth()->user()->id;
                // $logs->min = $values[0];
                // $logs->avg = $values[1];
                // $logs->max = $values[2];
                $logs->interval = $ping['interval'];
                $logs->save();

                return array('0' => true, '1' => view('userside.add_monitor', compact('d')));

                break;
            case ('4'):
                $port = array(
                    'friendly_name' => $request->input('newPortMonitorFriendlyName'),
                    'url_ip' => $request->input('newPortMonitorURL'),
                    'port' => $request->input('newPortMonitorPort'),
                    'interval' => gmdate("H:i:s", $request->input('newPortMonitorInterval')),
                    'timeout' => gmdate($request->input('newPortMonitorTimeout')),
                    'monitor_type_id' => $request->input('newMonitorType'),
                    'pause' => '0',
                    'user_id' => auth()->user()->id,
                );
                if ($request->input('newPortMonitorCustomPort')) {
                    $port['port'] = $request->input('newPortMonitorCustomPort');
                }

                $data = monitors::create($port);

                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $data->id,
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', $data->id)->get()->first();

                $id = $data->id;
                $logs = new UserLogModel();
                $logs->monitor_id = $id;
                $logs->status = 'Start';
                $logs->user_id = auth()->user()->id;
                // $logs->min = $values[0];
                // $logs->avg = $values[1];
                // $logs->max = $values[2];
                $logs->interval = $port['interval'];
                $logs->save();

                return array('0' => true, '1' => view('userside.add_monitor', compact('d')));

            default:
                $msg = 'Something went wrong.';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return monitors::whereId($id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
        // ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
        // ->where('monitors.user_id',auth()->user()->id)
        // ->get(['monitors.*', 'monitor_types.monitor_type']);
        $data = array();
        $data['0'] = monitors::where('monitors.id', $id)
            ->get()->first();
        $data['0']['closestMonitorLinks'] = array('nextMonitorID' => monitors::where('id', '>', $id)->orderBy('id')->get(['id', 'friendly_name'])->first(),
            'previousMonitorID' => monitors::where('id', '<', $id)->orderBy('id', 'desc')->get(['id', 'friendly_name'])->first());

        $data['0']['contact_id'] = monitor_contact_details::join('contact_detlais', 'monitor_contact_details.contact_id', '=', 'contact_detlais.id')
            ->where('monitor_contact_details.monitor_id', $id)->get();

        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        if ($request->input('editMonitorType') == 1) {
            $http = array(
                'friendly_name' => $request->input('editHTTPMonitorFriendlyName'),
                'url_ip' => $request->input('editHTTPMonitorURL'),
                'interval' => gmdate("H:i:s", $request->input('editHTTPMonitorInterval')),
                'timeout' => gmdate($request->input('editHTTPMonitorTimeout')),
                'monitor_type_id' => $request->input('editMonitorType'),
                'pause' => '0',
                'user_id' => auth()->user()->id,
            );

            monitors::whereId($id)->update($http);

            //upodate query

            if ($request->input('monitorAlertContactsNew')) {
                monitor_contact_details::where('monitor_id', $id)->delete();
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $id, 'contact_id' => $key);
                    monitor_contact_details::create($monitor_contact);

                }

            }

            return true;

        } elseif ($request->input('editMonitorType') == 2) {
            $keyword = array(
                'friendly_name' => $request->input('editKeywordMonitorFriendlyName'),
                'url_ip' => $request->input('editKeywordMonitorURL'),
                'keyword' => $request->input('editKeywordMonitorKeywordValue'),
                'case_inse' => $request->input('editKeywordCaseType'),
                'alertWhen' => $request->input('editKeywordMonitorKeywordType'),
                'interval' => gmdate("H:i:s", $request->input('editKeywordMonitorInterval')),
                'timeout' => gmdate($request->input('editKeywordMonitorTimeout')),
                'monitor_type_id' => $request->input('editMonitorType'),
                'pause' => '0',
                'user_id' => auth()->user()->id,
            );
            monitors::whereId($id)->update($keyword);

            if ($request->input('monitorAlertContactsNew')) {
                monitor_contact_details::where('monitor_id', $id)->delete();
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $id, 'contact_id' => $key);
                    monitor_contact_details::create($monitor_contact);

                }

            }

            return true;

        } elseif ($request->input('editMonitorType') == 3) {
            $ping = array(
                'friendly_name' => $request->input('editPingMonitorFriendlyName'),
                'url_ip' => $request->input('editPingMonitorURL'),
                'interval' => gmdate("H:i:s", $request->input('editPingMonitorInterval')),
                'monitor_type_id' => $request->input('editMonitorType'),
                'pause' => '0',
                'user_id' => auth()->user()->id,
            );
            monitors::whereId($id)->update($ping);

            if ($request->input('monitorAlertContactsNew')) {
                monitor_contact_details::where('monitor_id', $id)->delete();
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $id, 'contact_id' => $key);
                    monitor_contact_details::create($monitor_contact);

                }

            }

            return true;

        } elseif ($request->input('editMonitorType') == 4) {
            $port = array(
                'friendly_name' => $request->input('editPortMonitorFriendlyName'),
                'url_ip' => $request->input('editPortMonitorURL'),
                'port' => $request->input('editPortMonitorPort'),
                'interval' => gmdate("H:i:s", $request->input('editPortMonitorInterval')),
                'timeout' => gmdate($request->input('editPortMonitorTimeout')),
                'monitor_type_id' => $request->input('editMonitorType'),
                'pause' => '0',
                'user_id' => auth()->user()->id,
            );

            if ($request->input('editPortMonitorCustomPort')) {
                $port['port'] = $request->input('editPortMonitorCustomPort');
            }
            monitors::whereId($id)->update($port);

            if ($request->input('monitorAlertContactsNew')) {
                monitor_contact_details::where('monitor_id', $id)->delete();
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => $id, 'contact_id' => $key);
                    monitor_contact_details::create($monitor_contact);

                }

            }

            return true;
        } else {
            echo "try again";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        monitors::where('id', $id)->delete();
        return 'true';
    }

    public function startpausemonitor($id, Request $request)
    {
        $monitor = monitors::whereId($id)->get()->first();
        if ($monitor->pause == 0) {

            $data = array('pause' => 1);
            $d = monitors::where('id', $id)->update($data);

            $logs = new UserLogModel();
            $logs->monitor_id = $id;
            $logs->status = 'Pause';
            $logs->user_id = auth()->user()->id;
            // $logs->min = $values[0];
            // $logs->avg = $values[1];
            // $logs->max = $values[2];
            $logs->interval = $monitor['interval'];
            $logs->save();

            return 0;
        } else {

            $data = array('pause' => 0);
            $d = monitors::where('id', $id)->update($data);

            $logs = new UserLogModel();
            $logs->monitor_id = $id;
            $logs->status = 'Start';
            $logs->user_id = auth()->user()->id;
            // $logs->min = $values[0];
            // $logs->avg = $values[1];
            // $logs->max = $values[2];
            $logs->interval = $monitor['interval'];
            $logs->save();

            return 1;

        }
    }
    //get monitor detalis
    public function monitor($id)
    {

        $data = monitors::leftjoin('monitor_contact_details', 'monitor_contact_details.monitor_id', '=', 'monitors.id')
            ->where('monitors.id', $id)
            ->get(['monitors.*', 'monitor_contact_details.*']);

        echo $data;
    }

    //monitor response and graph
    public function monitor_detalis($id)
    {
        $data = monitors::findOrFail($id)->toArray();
        //  dd($data);

        //24 hrs
        $total24hrs = UserLogModel::where('monitor_id', $id)->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())->count();

        $totalUpMonitors = UserLogModel::where('status', 'Up')->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())->count();

        if ($total24hrs != 0) {

            $data['userLogsHours'] = round((($totalUpMonitors * 100) / $total24hrs), 2);
        } else {

            $data['userLogsHours'] = 0.00;
        }

        //7 days
        $total7Days = UserLogModel::where('monitor_id', $id)->where('created_at', '>=', Carbon::now()->subDay(7)->toDateTimeString())->count();
        $totalUpMonitor = UserLogModel::where('status', 'Up')->where('created_at', '>=', Carbon::now()->subDay(7)->toDateTimeString())->count();

        if ($total7Days != 0) {

            $data['userLogs7Days'] = round((($totalUpMonitor * 100) / $total7Days), 2);
        } else {

            $data['userLogs7Days'] = 0.00;
        }

        //30 days
        $total30Days = UserLogModel::where('monitor_id', $id)->where('created_at', '>=', Carbon::now()->subDay(30)->toDateTimeString())->count();
        $total_UpMonitor = UserLogModel::where('status', 'Up')->where('created_at', '>=', Carbon::now()->subDay(30)->toDateTimeString())->count();

        if ($total30Days != 0) {

            $data['userLogs30Days'] = round((($total_UpMonitor * 100) / $total30Days), 2);
        } else {

            $data['userLogs30Days'] = 0.00;
        }

        $data['response_time'] = UserLogModel::where('monitor_id', $id)->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())->sum('avg');

        $data['monitor_response'] = Monitor_response::select('*', DB::raw("DATE_FORMAT(created_at,'%H:%i') AS c_date"))->where('monitor_id', $id)->orderBy('response_time', 'asc')->get()->toArray();

        $x = json_encode(array_column($data['monitor_response'], 'response_time'));

        $y = json_encode(array_column($data['monitor_response'], 'c_date'));

        //    $data['chart']=array_merge($x,$y);

        /* $data['current_status']=UserLogModel::with('monitor')->where('monitor_id',$id)->orderBy('id','desc')->limit(1)->get()->toArray(); */

        $c_date = date('Y-m-d H:i:s');

        $cur = date('Y-m-d H:i:s', strtotime('-1 day', strtotime($c_date)));

        $data['current_status'] = UserLogModel::where('monitor_id', $id)->with('monitor')->whereHas('monitor', function ($q) {
            $q->where('user_id', auth()->user()->id);
        })->selectRaw('logs.*')->orderby('logs.created_at', 'desc')->limit(1)->get()->toArray();

        //    dd( 'ss',$data['current_status']);

        //dd($data['current_status']);
        // echo "<pre>";print_r($data['current_status']);exit;

        if (!empty($data['current_status'])) {
            if ($data['current_status'][0]['status'] == "Down") {

                $m_id = $data['current_status'][0]['monitor_id'];
                $log_id = $data['current_status'][0]['id'];
                $logss = UserLogModel::where('id', '>', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Up')->limit(1)->get()->toArray();
                if (!empty($logss)) {

                    $interval_time = new DateTime($logss[0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');

                    $interval_time_down = new DateTime($data['current_status'][0]['created_at']);
                    $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                    $time1 = new DateTime($latest_up);
                    $time2 = new DateTime($latest_down);
                    $interval = $time1->diff($time2);

                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['current_status'][0]['totaltime'] = $duration;

                } else {
                    $interval_time = new DateTime($data['current_status'][0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');

                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                    $time1 = $currentdate;
                    $time2 = new DateTime($latest_up);
                    $interval = $time1->diff($time2);

                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['current_status'][0]['totaltime'] = $duration;

                }

            } else {
                if ($data['current_status'][0]['status'] == 'Up') {
                    $interval_time = new DateTime($data['current_status'][0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                    $time1 = $currentdate;
                    $time2 = new DateTime($latest_up);
                    $interval = $time1->diff($time2);
                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['current_status'][0]['totaltime'] = $duration;
                   //  dd($data['current_status'][0]);
                } else {
                    $m_id = $data['current_status'][0]['monitor_id'];
                    $log_id = $data['current_status'][0]['id'];
                    $logss = UserLogModel::where('id', '<', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'start')->get()->toArray();
                    // echo "<pre>";print_r($logss);exit;
                    if (!empty($logss)) {

                        $interval_time = new DateTime($logss[0]['created_at']);
                        $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                        $interval_time_down = new DateTime($data['current_status'][0]['created_at']);
                        $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                        $time1 = new DateTime($latest_up);
                        $time2 = new DateTime($latest_down);
                        $interval = $time1->diff($time2);
                        $duration = $interval->h . " hrs," . $interval->i . " mins";
                        $data['current_status'][0]['totaltime'] = $duration;
                    } else {
                        $data['current_status'][0]['totaltime'] = 0;

                    }
                }
            }

        } else {
            $data['current_status'] = [];
        }

       // $data['current_status'][0]['created_at'] = \Carbon\Carbon::parse($data['current_status'][0]['created_at'])->format('Y-m-d h:m:s');
        //   dd( $data['current_status'][0]['created_at']);

        //Latesest Down Time
        $data['latestDownTime'] = UserLogModel::with('monitor')->where('monitor_id', $id)->where('status', 'Down')->orderBy('id', 'desc')->limit(1)->get()->toArray();

        if (!empty($data['latestDownTime']) && $data['latestDownTime'][0]['status'] == "Down") {

            $m_id = $data['latestDownTime'][0]['monitor_id'];
            $log_id = $data['latestDownTime'][0]['id'];
            $logss = UserLogModel::where('id', '>', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Up')->limit(1)->get()->toArray();
            if (!empty($logss)) {

                $interval_time = new DateTime($logss[0]['created_at']);
                $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                $interval_time_down = new DateTime($data['latestDownTime'][0]['created_at']);
                $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                $time1 = new DateTime($latest_up);
                $time2 = new DateTime($latest_down);
                $interval = $time1->diff($time2);

                $duration = $interval->h . " hrs," . $interval->i . " mins";
                $data['latestDownTime'][0]['totaltime'] = $duration;
                $data['latestDownTime'][0]['created_at'] = $latest_down;
            } else {
                $interval_time = new DateTime($data['latestDownTime'][0]['created_at']);
                $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                $currentdate = new DateTime(date('Y-m-d H:i:s'));
                $time1 = $currentdate;
                $time2 = new DateTime($latest_up);
                $interval = $time1->diff($time2);
                $duration = $interval->h . " hrs," . $interval->i . " mins";
                $data['latestDownTime'][0]['totaltime'] = $duration;
                $data['latestDownTime'][0]['created_at'] = $latest_up;
            }
        }
        //  dd($data);

        $data['record'] = UserLogModel::with('monitor')->whereHas('monitor', function ($q) {
            $q->where('user_id', auth()->user()->id);
        })->where('created_at', '<=', $cur)->where('monitor_id', '=', $id)->selectRaw('logs.*')->where('status', '!=', 'Pause')->orderby('logs.created_at', 'desc')->limit(10)->get()->toArray();

        //  dd($data['record']);
        foreach ($data['record'] as $key => $value) {
            if ($value['status'] == "Down") {

                $m_id = $value['monitor_id'];
                $log_id = $value['id'];
                $logss = UserLogModel::where('id', '>', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Up')->limit(1)->get()->toArray();

                if (!empty($logss)) {

                    $interval_time = new DateTime($logss[0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $interval_time_down = new DateTime($value['created_at']);
                    $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                    $time1 = new DateTime($latest_up);
                    $time2 = new DateTime($latest_down);
                    $interval = $time1->diff($time2);

                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                    // echo $interval->format('%s second(s)');
                } else {
                    $interval_time = new DateTime($value['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                    $time1 = $currentdate;
                    $time2 = new DateTime($latest_up);
                    $interval = $time1->diff($time2);
                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                }

                //  echo "<pre>";print_r($data);exit;
                // dd($value);
            } else if ($value['status'] == "Up") {
                $m_id = $value['monitor_id'];
                $log_id = $value['id'];
                $logss = UserLogModel::where('id', '>', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Down')->limit(1)->get()->toArray();
                //($logss);
                if (!empty($logss)) {

                    $interval_time = new DateTime($logss[0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $interval_time_down = new DateTime($value['created_at']);
                    $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                    $time1 = new DateTime();
                    $time2 = new DateTime($latest_down);
                    $interval = $time1->diff($time2);

                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                    // echo $interval->format('%s second(s)');
                } else {
                    $interval_time = new DateTime($value['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                    $time1 = $currentdate;
                    $time2 = new DateTime($latest_up);
                    $interval = $time1->diff($time2);
                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                }

  
            } else if ($value['status'] == "start") {
                $data['record'][$key]['totaltime'] = "0 hrs,0 mins";
            } else {
                $m_id = $value['monitor_id'];
                $log_id = $value['id'];
                $logss = UserLogModel::where('id', '<', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'start')->limit(1)->get()->toArray();

                if ($logss) {
                    $interval_time = new DateTime($logss[0]['created_at']);

                } else {

                    $interval_time = "";
                }

                $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                $currentdate = new DateTime(date('Y-m-d H:i:s'));
                $time1 = $currentdate;
                $time2 = new DateTime($latest_up);
                $interval = $time1->diff($time2);
                $duration = $interval->h . " hrs," . $interval->i . " mins";
                $data['record'][$key]['totaltime'] = $duration;
            }
        }
      //  dd($data);
        //$data['record'][0]['created_at'] = \Carbon\Carbon::parse($data['record'][0]['created_at'])->format('Y-m-d h:m:s');

        return view('userside.monitorresponse', compact('data'));
    }

    public function monitorSearch($monitorSearchKeyword, Request $request)
    {
        $filterResult = monitors::leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
            ->where('friendly_name', 'LIKE', '%' . $monitorSearchKeyword . '%')->get(['monitors.*', 'monitor_types.monitor_type']);

        $count = monitors::leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
            ->where('friendly_name', 'LIKE', '%' . $monitorSearchKeyword . '%')->count();
        if ($count == 0) {
            echo '<li class="accordion-group" style="background: #373b3e;">
                <div class="accordion-heading">
                <a class="monitorTitle" href="#" style="color:#e6e8eb;">No monitors found for the keyword: "' . $monitorSearchKeyword .
                '</a>
                </div>
                </li>';
        } else {
            foreach ($filterResult as $row) {

                if ($row->pause == 0) {
                    $var = '<span class="label sidebarMonitorPercentage"
                     style="background-color: #4da74d">0%</span>';
                } else {
                    $var = '<span class="label sidebarMonitorPercentage"
                     style="background-color: #000000">0%</span>';
                }

                if ($row->pause == 0) {
                    $startpuase = '
             <li class="startStopMonitor"> <a href="#"> <i
                         class="fontello-icon-right-dir"></i><span
                         class="monitorStartStopText' . $row->id . '"
                         name="monitorStartStop" data-id="1"> Pause</span>
                 </a>
             </li>';
                } else {
                    $startpuase = '<li class="startStopMonitor"> <a href="#"> <i
                         class="fontello-icon-right-dir"></i><span
                         class="monitorStartStopText' . $row->id . '"
                         name="monitorStartStop" data-id="1"> Start</span>
                 </a>
             </li>';
                }

                echo '<li class="accordion-group" id=mSidebar' . $row->id . '">
            <div class="accordion-heading">
                ' . $var . '
                <span class="label">' . $row->monitor_type . '</span> <a href="#' . $row->id . '" class="monitorTitle" title="' . $row->url_ip . '"
                    data-monitortitle="' . $row->friendly_name . '">Loading.. </a>
                <a id="sidebarMonitorLink-' . $row->id . '" href="' . $row->url_ip . '" target="_blank">
                    <i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.7em;"></i>
                </a>
                <div class="pull-right">
                    <div class="uptimeSidebarWrapper pull-left">
                        <div class="uptimeHiddenRatio" style="display:none;">100.000</div>
                        <ul class="uptimeChart">
                            <li data-tooltip="Start Time:' . $row->created_at . '<br>End Time:' . \Carbon\Carbon::now() . '<br>
                            Duration: ' . \Carbon\Carbon::now()->diffInHours($row->created_at) . ' hrs, 5 mins<br>Status: Up"
                                style="width: 100%; background:#4da74d;"><img src="userside/assets/img/1px.webp" alt="1px"></li>
                        </ul>
                    </div>
                    <div class="pull-right"><a href="#mMenuAccordion' . $row->id . '" data-parent="#mainSideMenu"
                            data-toggle="collapse" class="accordion-toggle monitorAccordionBtn"><i
                                class="chevron fontello-icon-cog-3"></i></a></div>
                </div>
            </div>



            <ul class="accordion-content nav nav-list collapse" id="mMenuAccordion' . $row->id . '">
               ' . $startpuase . '
                <li> <a href="#editMonitor" data-toggle="modal" data-monitorid="' . $row->id . '" class="editMonitor"> <i
                            class="fontello-icon-right-dir"></i> Edit </a> </li>
                <li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="' . $row->id . '" class="deleteMonitor"> <i
                            class="fontello-icon-right-dir"></i> Delete </a> </li>
                <li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="' . $row->id . '" class="resetMonitor"> <i
                            class="fontello-icon-right-dir"></i> Reset Stats </a> </li>
            </ul>
        </li>
        ';

            }
        }
    }

    public function getMonitors()
    {
        $filterResult = monitors::leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
            ->get(['monitors.*', 'monitor_types.monitor_type']);

        foreach ($filterResult as $row) {
            if ($row->pause == 0) {
                $var = '<span class="label sidebarMonitorPercentage"
                     style="background-color: #4da74d">0%</span>';
            } else {
                $var = '<span class="label sidebarMonitorPercentage"
                     style="background-color: #000000">0%</span>';
            }

            if ($row->pause == 0) {
                $startpuase = '
             <li class="startStopMonitor"> <a href="#"> <i
                         class="fontello-icon-right-dir"></i><span
                         class="monitorStartStopText' . $row->id . '"
                         name="monitorStartStop" data-id="1"> Pause</span>
                 </a>
             </li>';
            } else {
                $startpuase = '<li class="startStopMonitor"> <a href="#"> <i
                         class="fontello-icon-right-dir"></i><span
                         class="monitorStartStopText' . $row->id . '"
                         name="monitorStartStop" data-id="1"> Start</span>
                 </a>
             </li>';
            }

            echo '<li class="accordion-group" id=mSidebar' . $row->id . '">
            <div class="accordion-heading">
                ' . $var . '
                <span class="label">' . $row->monitor_type . '</span> <a href="#' . $row->id . '" class="monitorTitle" title="' . $row->url_ip . '"
                    data-monitortitle="' . $row->friendly_name . '">Loading.. </a>
                <a id="sidebarMonitorLink-' . $row->id . '" href="' . $row->url_ip . '" target="_blank">
                    <i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.7em;"></i>
                </a>
                <div class="pull-right">
                    <div class="uptimeSidebarWrapper pull-left">
                        <div class="uptimeHiddenRatio" style="display:none;">100.000</div>
                        <ul class="uptimeChart">
                            <li data-tooltip="Start Time:' . $row->created_at . '<br>End Time:' . \Carbon\Carbon::now() . '<br>
                            Duration: ' . \Carbon\Carbon::now()->diffInHours($row->created_at) . ' hrs, 5 mins<br>Status: Up"
                                style="width: 100%; background:#4da74d;"><img src="userside/assets/img/1px.webp" alt="1px"></li>
                        </ul>
                    </div>
                    <div class="pull-right"><a href="#mMenuAccordion' . $row->id . '" data-parent="#mainSideMenu"
                            data-toggle="collapse" class="accordion-toggle monitorAccordionBtn"><i
                                class="chevron fontello-icon-cog-3"></i></a></div>
                </div>
            </div>



            <ul class="accordion-content nav nav-list collapse" id="mMenuAccordion' . $row->id . '">
               ' . $startpuase . '
                <li> <a href="#editMonitor" data-toggle="modal" data-monitorid="' . $row->id . '" class="editMonitor"> <i
                            class="fontello-icon-right-dir"></i> Edit </a> </li>
                <li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="' . $row->id . '" class="deleteMonitor"> <i
                            class="fontello-icon-right-dir"></i> Delete </a> </li>
                <li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="' . $row->id . '" class="resetMonitor"> <i
                            class="fontello-icon-right-dir"></i> Reset Stats </a> </li>
            </ul>
        </li>
        ';

        }
    }

    public function sortmonitring($sorttype)
    {
        switch ($sorttype) {
            case 1:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('friendly_name', 'asc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);

                return view('userside.monitorlist', compact('data'));
                break;
            case 2:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('friendly_name', 'desc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;
            case 3:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('status', 'asc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;
            case 4:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('pause', 'asc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;
            case 5:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('status', 'desc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;

            case 6:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('pause', 'desc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;

            case 7:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('monitor_type', 'asc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;

            case 8:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderByRaw('FIELD(monitor_type_id,2,1,3,4)')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));

                break;
            case 9:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderByRaw('FIELD(monitor_type_id,3,4,2,1)')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;

            case 10:
                $data = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                    ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                    ->where('monitors.user_id', auth()->user()->id)->orderBy('monitor_type', 'desc')
                    ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist', compact('data'));
                break;
            default:
                echo "select sort  ";
        }
    }

    public function mainDashboard()
    {
        //24 hours

        $total24hrs = UserLogModel::where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())->count();

        $totalUpMonitors = UserLogModel::where('status', 'Up')->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())->count();

        if ($total24hrs != 0) {
            $data['userLogsHours'] = round((($totalUpMonitors * 100) / $total24hrs), 2);
        } else {

            $data['userLogsHours'] = 0.00;
        }

        //7 days
        $total7Days = UserLogModel::where('created_at', '>=', Carbon::now()->subDay(7)->toDateTimeString())->count();
        $totalUpMonitor = UserLogModel::where('status', 'Up')->where('created_at', '>=', Carbon::now()->subDay(7)->toDateTimeString())->count();

        if ($total7Days != 0) {

            $data['userLogs7Days'] = round((($totalUpMonitor * 100) / $total7Days), 2);
        } else {

            $data['userLogs7Days'] = 0.00;
        }

        //30 days
        $total30Days = UserLogModel::where('created_at', '>=', Carbon::now()->subDay(30)->toDateTimeString())->count();
        $total_UpMonitor = UserLogModel::where('status', 'Up')->where('created_at', '>=', Carbon::now()->subDay(30)->toDateTimeString())->count();

        if ($total30Days != 0) {

            $data['userLogs30Days'] = round((($total_UpMonitor * 100) / $total30Days), 2);
        } else {

            $data['userLogs30Days'] = 0.00;
        }
        $c_date = date('Y-m-d');

        // dd($data);
        $data['count'] = DB::table("monitors")
            ->select(DB::raw("COUNT(monitors.id) as Total_count"),
                DB::raw("(select count(id)  from monitors where pause = 1 and user_id = " . auth()->user()->id . ") as pause "),
                DB::raw("(select count(id)  from monitors where  status = 1 and user_id = " . auth()->user()->id . ") as up "),
                DB::raw("(select count(id)  from monitors where status = 0 and user_id = " . auth()->user()->id . ") as down ")
            )
            ->join('users', 'users.id', '=', 'monitors.user_id')
            ->where('monitors.user_id', auth()->user()->id)
            ->get()->first();

        $data['latestDownTime'] = UserLogModel::with('monitor')->where('user_id', auth()->user()->id)->where('status', 'Down')->orderBy('id', 'desc')->limit(1)->get()->toArray();

        if (!empty($data['latestDownTime']) && $data['latestDownTime'][0]['status'] == "Down") {

            $m_id = $data['latestDownTime'][0]['monitor_id'];
            $log_id = $data['latestDownTime'][0]['id'];

            $logss = UserLogModel::where('id', '<', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Up')->limit(1)->get()->toArray();

            if (!empty($logss)) {

                $interval_time = new DateTime($logss[0]['created_at']);

                $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                // echo "<pre>";print_r($latest_up);exit;
                $interval_time_down = new DateTime($data['latestDownTime'][0]['created_at']);
                $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                $time1 = new DateTime($latest_up);
                $time2 = new DateTime($latest_down);
                $interval = $time1->diff($time2);

                $duration = $interval->h . " hrs," . $interval->i . " mins";
                $data['latestDownTime'][0]['totaltime'] = $duration;
                $data['latestDownTime'][0]['created_at'] = $latest_down;

                // echo $interval->format('%s second(s)');
            } else {
                $interval_time = new DateTime($data['latestDownTime'][0]['created_at']);

                $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                // echo "<pre>";print_r($latest_up);exit;
                $currentdate = new DateTime(date('Y-m-d H:i:s'));
                $time1 = $currentdate;
                $time2 = new DateTime($latest_up);

                $interval = $time1->diff($time2);

                $duration = $interval->h . " hrs," . $interval->i . " mins";
                $data['latestDownTime'][0]['totaltime'] = $duration;
                $data['latestDownTime'][0]['created_at'] = $latest_up;
                // dd($data['latestDownTime'][0]);
            }
        }

        //Record data show
        //dd($data['latestDownTime']);
        // $data['record'] = UserLogModel::with('monitor')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->limit(10)->get()->toArray();

        $c_date = date('Y-m-d H:i:s');
        $cur = date('Y-m-d H:i:s', strtotime('-1 day', strtotime($c_date)));

        $data['record'] = UserLogModel::with('monitor')->whereHas('monitor', function ($q) {
            $q->where('user_id', auth()->user()->id);
        })->where('created_at', '>=', $cur)->selectRaw('logs.*')->where('status', '!=', 'Pause')->orderby('logs.created_at', 'desc')->limit(10)->get()->toArray();

        //  dd($data['record']);

        foreach ($data['record'] as $key => $value) {
            if ($value['status'] == "Down") {

                $m_id = $value['monitor_id'];
                $log_id = $value['id'];
                $logss = UserLogModel::where('id', '>', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Up')->limit(1)->get()->toArray();

                if (!empty($logss)) {

                    $interval_time = new DateTime($logss[0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $interval_time_down = new DateTime($value['created_at']);
                    $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                    $time1 = new DateTime($latest_up);
                    $time2 = new DateTime($latest_down);
                    $interval = $time1->diff($time2);

                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                    // echo $interval->format('%s second(s)');
                } else {
                    $interval_time = new DateTime($value['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                    $time1 = $currentdate;
                    $time2 = new DateTime($latest_up);
                    $interval = $time1->diff($time2);
                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                }

                //  echo "<pre>";print_r($data);exit;
                // dd($value);
            } else if ($value['status'] == "Up") {
                $m_id = $value['monitor_id'];
                $log_id = $value['id'];
                $logss = UserLogModel::where('id', '>', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'Down')->limit(1)->get()->toArray();

                if (!empty($logss)) {

                    $interval_time = new DateTime($logss[0]['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $interval_time_down = new DateTime($value['created_at']);
                    $latest_down = Carbon::parse($interval_time_down)->format('Y-m-d H:i:s');

                    $time1 = new DateTime($latest_up);
                    $time2 = new DateTime($latest_down);
                    $interval = $time1->diff($time2);

                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                    // echo $interval->format('%s second(s)');
                } else {
                    $interval_time = new DateTime($value['created_at']);
                    $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                    // echo "<pre>";print_r($latest_up);exit;
                    $currentdate = new DateTime(date('Y-m-d H:i:s'));
                    $time1 = $currentdate;
                    $time2 = new DateTime($latest_up);
                    $interval = $time1->diff($time2);
                    $duration = $interval->h . " hrs," . $interval->i . " mins";
                    $data['record'][$key]['totaltime'] = $duration;
                };
                
            } else if ($value['status'] == "start") {
                $data['record'][$key]['totaltime'] = "0 hrs,0 mins";
            } else {
                $m_id = $value['monitor_id'];
                $log_id = $value['id'];
                $logss = UserLogModel::where('id', '<', $log_id)->where('monitor_id', '=', $m_id)->where('status', '=', 'start')->limit(1)->get()->toArray();

                if ($logss) {
                    $interval_time = new DateTime($logss[0]['created_at']);

                } else {

                    $interval_time = "";
                }

                $latest_up = Carbon::parse($interval_time)->format('Y-m-d H:i:s');
                $currentdate = new DateTime(date('Y-m-d H:i:s'));
                $time1 = $currentdate;
                $time2 = new DateTime($latest_up);
                $interval = $time1->diff($time2);
                $duration = $interval->h . " hrs," . $interval->i . " mins";
                $data['record'][$key]['totaltime'] = $duration;
            }
        }
        //   dd($data['record']);

        return view('pages.mainDashboard', compact('data'));

    }

    public function check($id)
    {

        $monitorslist = monitors::where('id', $id)->with('monitorcontact.contact')->get()->toArray();
        // dd($monitorslist);
        if (empty($monitorslist)) {
            dd("try again");
        } else {

            foreach ($monitorslist as $mt) {

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
                                                //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                            //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                                //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                            //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                                //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                            //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                                //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
                                            //   \Mail::to($c['contact']['email'])->send(new \App\Mail\MonitorNotificationSend($details));
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
