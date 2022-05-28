<?php

namespace App\Http\Controllers;

use App\Models\contact_detlais;
use App\Models\monitors;
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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $d = monitors::leftjoin('users', 'monitors.user_id', '=', 'users.id')
            ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
            ->where('monitors.user_id', auth()->user()->id)->orderBy('friendly_name', 'desc')
            ->get(['monitors.*', 'monitor_types.monitor_type'])->toArray();
        if (empty($d)) {
                $data[]=$d;
        } else {

            foreach ($d as $row) {
                $monitor_id = $row['id'];
                $total = UserLogModel::where('monitor_id', $monitor_id)->where('status', '!=', "")->where('status', '!=', "Pause")->where('created_at', '<=', Carbon::now()->subDay(1)->toDateTimeString())->count();

                $totalUpMonitors = UserLogModel::where('status', 'Up')->where('monitor_id', $monitor_id)->where('created_at', '<=', Carbon::now()->subDay(1)->toDateTimeString())->count();
                
                if ($total != 0) {
                    $row['userLogsHours'] = round((($totalUpMonitors * 100) / $total), 2);
                    // echo "<pre>";print_r($row);
                } else {
                    $row['userLogsHours'] = 100;
                }
                // echo "<pre>";print_r($row);
                $data[] = $row;
            }
        }
        // dd($totalUpMonitors);

        return view('userside.dashboard', compact('data'));
    }
    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function status()
    {
        return view('userside.status-page');
    }

    public function settingsDashboard()
    {
        $Contact_detalis = contact_detlais::select('*', DB::raw('(select count(id) from contact_detlais where user_id = ' . auth()->user()->id . ') as count'))->where('user_id', auth()->user()->id)->get();
        return view('pages.settingsDashboard', compact('Contact_detalis'));
    }
}
