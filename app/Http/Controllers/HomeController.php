<?php

namespace App\Http\Controllers;

use App\Models\contact_detlais;
use App\Models\monitors;
use App\Models\Monitor_response;
use App\Models\monitor_type;
use App\Models\User;
use App\Models\UserLogModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * {
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (auth()->user()->is_admin == 0) {
            $d = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id', auth()->user()->id)->orderBy('friendly_name', 'desc')
                ->get(['monitors.*', 'monitor_types.monitor_type'])->toArray();
            if (empty($d)) {
                $data[] = $d;
            } else {

                foreach ($d as $row) {
                    $monitor_id = $row['id'];
                    $total = UserLogModel::where('monitor_id', $monitor_id)->where('status', '!=', "")->where('status', '!=', "Pause")->where('created_at', '<=', Carbon::now()->subDay(1)->toDateTimeString())->count();

                    $totalUpMonitors = UserLogModel::where('status', 'Up')->where('monitor_id', $monitor_id)->where('created_at', '<=', Carbon::now()->subDay(1)->toDateTimeString())->count();

                    if ($total != 0) {
                        $row['userLogsHours'] = round((($totalUpMonitors * 100) / $total), 2);
                        // echo "<pre>";print_r($row);
                    } else {
                        if ($total == 0) {
                            $row['userLogsHours'] = 0;
                        } else {
                            $row['userLogsHours'] = 100;
                        }

                    }
                    // echo "<pre>";print_r($row);
                    $data[] = $row;
                }
            }
            // dd($data);

            return view('userside.dashboard', compact('data'));
        }else{
            return "please login to admin controller";
        }

    }
    public function adminHome()
    {
      
        if (auth()->user()->is_admin == 1) {

            $user = User::all();
            $monitor_type = monitor_type::all();
            $monitor = monitors::all();
            $Monitor_response = Monitor_response::all();
            $mType = monitor_type::all();

            return view('admin.customer.customer_dashboard', ['mType' => $mType, 'usercnt' => $user, 'monitor' => $monitor, 'monitor_type' => $monitor_type, 'Monitor_response' => $Monitor_response]);
        } else {
            return "please user authentication";
        }
    }

    public function status()
    {
        return view('userside.status-page');
    }

    public function settingsDashboard()
    {
        $Contact_detalis = contact_detlais::select('*', DB::raw('(select count(id) from contact_detlais where user_id = ' . auth()->user()->id . ') as count'))->where('user_id', auth()->user()->id)->get()->toArray();

        return view('pages.settingsDashboard', compact('Contact_detalis'));
    }
}
