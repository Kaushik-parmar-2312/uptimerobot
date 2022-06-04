<?php

namespace App\Http\Controllers;

use App\Models\monitors;
use App\Models\monitor_contact_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Models\UserLogModel;
use Carbon\Carbon;
use DateTime;

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

                monitors::create($http);
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => monitors::max('id'),
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', monitors::max('id'))->get()->first();
                
                return array('0' => true, '1' =>  view('userside.add_monitor', compact('d')));

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

                monitors::create($keyword);

                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => monitors::max('id'),
                        'contact_id' => $key);

                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', monitors::max('id'))->get()->first();

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

                monitors::create($ping);
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => monitors::max('id'),
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', monitors::max('id'))->get()->first();

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

                monitors::create($port);
                foreach ($request->input('monitorAlertContactsNew') as $key) {
                    $monitor_contact = array('monitor_id' => monitors::max('id'),
                        'contact_id' => $key,
                    );
                    monitor_contact_details::create($monitor_contact);
                }
                $d = monitors::where('id', monitors::max('id'))->get()->first();

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
        $data['0']['closestMonitorLinks'] = array('nextMonitorID' => monitors::where('id', '>', $id )->orderBy('id')->get(['id', 'friendly_name'])->first()  , 
                                                'previousMonitorID' => monitors::where('id','<', $id )->orderBy('id','desc')->get(['id', 'friendly_name'])->first());

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
            return 0;
        } else {

            $data = array('pause' => 0);
            $d = monitors::where('id', $id)->update($data);
            return 1;

        }
    }

    public function monitor($id)
    {

        $data = monitors::leftjoin('monitor_contact_details', 'monitor_contact_details.monitor_id', '=', 'monitors.id')
            ->where('monitors.id', $id)
            ->get(['monitors.*', 'monitor_contact_details.*']);

        echo $data;
    }
    public function monitor_detalis($id)
    {
        $data = monitors::findOrFail($id);

        return view('userside.monitorresponse');
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
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('friendly_name', 'asc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);

                    return view('userside.monitorlist',compact('data'));
                break;
            case 2:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('friendly_name', 'desc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;
            case 3:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('status', 'asc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;
            case 4:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('pause', 'asc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;
            case 5:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('status', 'desc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;

            case 6:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('pause', 'desc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;

            case 7:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('monitor_type', 'asc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;

            case 8:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderByRaw('FIELD(monitor_type_id,2,1,3,4)')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
               
                break;
            case 9:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderByRaw('FIELD(monitor_type_id,3,4,2,1)')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                    return view('userside.monitorlist',compact('data'));
                break;

            case 10:
                $data=monitors::leftjoin('users', 'monitors.user_id', '=','users.id')
                ->leftjoin('monitor_types', 'monitor_types.id', '=', 'monitors.monitor_type_id')
                ->where('monitors.user_id',auth()->user()->id)->orderBy('monitor_type', 'desc')
                ->get(['monitors.*', 'monitor_types.monitor_type']);
                return view('userside.monitorlist',compact('data'));
                break;
            default:
                echo "select sort  ";
        }
    }
    
    public function mainDashboard()
    {
        //24 hours
        $total24hrs=UserLogModel::where('created_at', '<=', Carbon::now()->subDay()->toDateTimeString())->count();
       
        $totalUpMonitors=UserLogModel::where('status','Up')->where('created_at', '<=', Carbon::now()->subDay()->toDateTimeString())->count();
      
        if($total24hrs != 0) {
            $data['userLogsHours'] =round((($totalUpMonitors * 100)/$total24hrs),2);
        } else {

            $data['userLogsHours'] = 0.00;
        }

     //7 days
     $total7Days=UserLogModel::where('created_at', '<=', Carbon::now()->subDay(7)->toDateTimeString())->count();
     $totalUpMonitor=UserLogModel::where('status','Up')->where('created_at', '<=', Carbon::now()->subDay(7)->toDateTimeString())->count();

     if($total7Days != 0) {

         $data['userLogs7Days'] =round((($totalUpMonitor * 100)/$total7Days),2);
     } else {

         $data['userLogs7Days'] = 0.00;
     }

     //30 days
     $total30Days=UserLogModel::where('created_at', '<=', Carbon::now()->subDay(30)->toDateTimeString())->count();
     $total_UpMonitor=UserLogModel::where('status','Up')->where('created_at', '<=', Carbon::now()->subDay(30)->toDateTimeString())->count();

     if($total30Days != 0) {

         $data['userLogs30Days']=round((($total_UpMonitor * 100)/$total30Days),2);
     } else {

         $data['userLogs30Days'] = 0.00;
     }

        $data['count'] = DB::table("monitors")
	    ->select(DB::raw("COUNT(monitors.id) as Total_count"),
                DB::raw("(select count(id)  from monitors where pause = 1 and user_id = ".auth()->user()->id .") as pause "),
                DB::raw("(select count(id)  from monitors where  status = 1 and user_id = ".auth()->user()->id .") as up "),
                DB::raw("(select count(id)  from monitors where status = 0 and user_id = ".auth()->user()->id .") as down ")
                )
        ->join('users','users.id','=','monitors.user_id')
        ->where('monitors.user_id',auth()->user()->id)
	    ->get()->first();          

        $data['latestDownTime'] = UserLogModel::with('monitor')->where('status','Down')->orderBy('id','desc')->limit(1)->get()->toArray();
       // dd($data);
       $data['record']= UserLogModel::with('monitor')->orderBy('id','asc')->limit(10)->get()->toArray();
        return view('pages.mainDashboard',compact('data'));
    }

}
