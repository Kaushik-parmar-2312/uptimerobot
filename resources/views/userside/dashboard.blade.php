 @extends('layouts.userside') @section('content')
     <a class="sessionWarning hide" href="#sessionWarning" data-toggle="modal">.</a>
     <a class="accountPausedNotification hide" href="#accountPausedNotification" data-toggle="modal">.</a>
     <div class="page-container">
         <div id="header-container">
             <div id="header">
                 <div id="logo" style="margin: 24px 0 0 15px;">
                     <a href="/">
                         <img class="normal-logo" src="{{ asset('userside/assets/img/uptimerobot-logo-dark.svg') }}"
                             alt="UptimeRobot logo" width="180" />
                         <img class="tvmode-logo" src="{{ asset('userside/assets/img/uptimerobot-logo.svg') }}"
                             alt="UptimeRobot logo" width="180" style="display:none" />
                     </a>
                 </div>

                 <div id="logoMiniWrap" class="margin-top5 hide">
                     <div style="float: left;">
                         <div id="logo-mini" style="margin: 5px 0 0 15px;">
                             <a href="/">
                                 <img class="normal-logo"
                                     src="{{ asset('userside/assets/img/uptimerobot-logo-dark.svg') }}"
                                     alt="UptimeRobot logo" width="150" />
                                 <img class="tvmode-logo" src="{{ asset('userside/assets/img/uptimerobot-logo.svg') }}"
                                     alt="UptimeRobot logo" width="150" style="display:none" />
                             </a>
                         </div>
                     </div>

                     {{-- MENU --}}
                     <div style="float: right; margin-right:10px;">
                         <div class="btn-group pull-right">
                             <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i
                                     class="fontello-icon-menu"></i></a>
                             <ul class="dropdown-menu dropdown-menu-arrow" style="min-width: 100px;">
                                 <li style="padding: 0 10px;"><a href="dashboard#mainDashboard"
                                         class="mainDashboard mainDashboardMobile">Dashboard</a></li>
                                 <li style="padding: 0 10px;"><a href="/statuspage"
                                         class="mySettings mySettingsMobile">Status pages</a></li>
                                 <li style="padding: 0 10px;"><a href="dashboard#mySettings"
                                         class="mySettings mySettingsMobile">My Settings</a></li>
                                 <li style="padding: 0 10px;"><a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">Logout</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                         class="d-none">
                                         @csrf
                                     </form>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     {{-- menu end --}}
                 </div>
             </div>
         </div>

         <div id="main-container">
             <style>
                 .uptimeSidebarWrapper {
                     width: 238px;
                 }

             </style>
             <script>
                 monitorNamesLengthStatus = "short";
                 monitorNamesLengthStatusText = "Expand Monitor Names";
             </script>
             {{-- monitring start --}}
             <div class="sidebar-item">
                 <div class="media profile" style="border-top: 1px solid #babecc;">
                     <div>
                         <div class="addMonitorInSearch">
                             <div>
                                 <a class="btn btn-green btn-large btn-glyph newMonitor" href="#newMonitor"
                                     data-toggle="modal">
                                     <i class="fontello-icon-plus-1"></i>
                                     <span id="addNewMonitorRemoval">Add New</span> Monitor</a><br /> {{-- exprot detalis --}}
                                 <span class="text-grey"
                                     style="font-size:10px; height: 10px; position:relative; float:right; margin-right:10px;">
                                     <a class="bulkActions text-grey underlineLink" href="#bulkActions"
                                         data-toggle="modal">(Bulk Actions) </a>
                                     {{-- (<a class="bulkActions text-grey underlineLink" --}}
                                     {{-- href="../inc/dml/monitorDML.php?action=exportMonitors">Export Monitors</a> - --}}
                                     <a class="bulkActions text-grey underlineLink" href="#bulkImportUpload"
                                         data-toggle="modal">Import Monitors</a> -
                                     <a class="switchMonitorNamesLength text-grey underlineLink shortMonitorNamesState"
                                         href="javascript:void(0);">Expand Monitor Names</a>
                                     )</span> {{-- end export --}}
                             </div>

                             <div id="sidebarHeaderMenu">
                                 <div>
                                     {{-- sort monitirng --}}
                                     <ul id="sidebarHeaderMenuList" style="height:30px; margin:0;">
                                         <li style="width:115px; background:#999999; padding-left: 10px;">
                                             <a href="javascript:void(0);" class="sortMonitors"
                                                 style="text-decoration:none;"><strong class="text-blacky">Sort
                                                     Monitors</strong> <i class="fontello-icon-down-dir"
                                                     style="color: #333333;"></i></a>
                                         </li>
                                         <li style="width:128px; padding-left: 10px;" id="last24HoursTitle">
                                             <i class="fontello-icon-clock"></i> <strong>Last 24 Hours</strong>
                                         </li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">7</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">6</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">5</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">4</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">3</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">2</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">1</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">0</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">23</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">22</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">21</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">20</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">19</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">18</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">17</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">16</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">15</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">14</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">13</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">12</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">11</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">10</li>
                                         <li class="twentyFourHourText twentyFourHourTextHide">9</li>
                                         <li class="twentyFourHourText twentyFourHourTextShow">8</li>
                                     </ul>
                                     {{-- end sort monitring --}}
                                 </div>
                             </div>
                         </div>
                     </div>
                     {{-- Search box --}}
                     <div class="search-global">
                         <input id="searchMonitors" name="searchMonitors" class="search search-query input-large"
                             type="search" value="">
                         <a class="search-button" href="javascript:void(0);"><i class="fontello-icon-search-5"></i></a>
                     </div>
                     {{-- end search box --}}
                 </div>
             </div>
             {{-- sort in detalis --}}
             <div id="main-sidebar" class="sidebar">
                 <div id="sortMonitors" class="hide">
                     <ul style="list-style-type:none;" class="margin-top10 text-whitesmoke">
                         <li><strong class="text-whitesmoke">- Sort by name:</strong> (<a href="javascript:void(0);"
                                 class="sortMonitorType text-green" data-sortmonitortype="1">a-z</a> / <a
                                 href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="2">z-a</a>)
                         </li>
                         <li><strong class="text-whitesmoke">- Sort by status:</strong> (<a href="javascript:void(0);"
                                 class="sortMonitorType" data-sortmonitortype="3">up-down</a> / <a
                                 href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="4">start-pause</a>
                             / <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="5">down-up</a> /
                             <a href="javascript:void(0);" class="sortMonitorType"
                                 data-sortmonitortype="6">paused-start</a>)
                         </li>
                         <li><strong class="text-whitesmoke">- Sort by type:</strong> (<a href="javascript:void(0);"
                                 class="sortMonitorType" data-sortmonitortype="7">http-kywd-ping-port</a> / <a
                                 href="javascript:void(0);" class="sortMonitorType"
                                 data-sortmonitortype="8">kywd-http-ping-port</a> / <a href="javascript:void(0);"
                                 class="sortMonitorType" data-sortmonitortype="9">ping-port-http-kywd</a> / <a
                                 href="javascript:void(0);" class="sortMonitorType"
                                 data-sortmonitortype="10">port-ping-http-kywd</a> )
                         </li>
                         <li>- <a href="javascript:void(0);" class="sortMonitorType" data-sortmonitortype="1"
                                 id="sortMonitorsReset">Reset all sorts (defaults to a-z)</a></li>
                     </ul>
                     <input type="hidden" id="mainSideMenuMonitorsSortType" value="1" />
                 </div>
                 {{-- sort end detalis --}}
                 <style>
                     .uptimeSidebarWrapper {
                         display: inline-block;
                         float: right;
                     }

                 </style>


                 <ul id="mainSideMenu" class="nav nav-list nav-side">

                     @if (empty($data[0]) || $data == ' ')
                         <li class="accordion-group" id="noMonitorsYet" style="background: #373b3e;">
                             <div class="accordion-heading">
                                 <span style="color:#e6e8eb;">You have no monitors yet.</span>
                             </div>
                         </li>
                     @else
                         {{-- listing monitor --}}
                         @foreach ($data as $row)
                             <li class="accordion-group" id="mSidebar{{ $row['id'] }}">
                                 <div class="accordion-heading">
                                     @if ($row['pause'] == 0)
                                         @if ($row['status'] == '0')
                                             <span class="label sidebarMonitorPercentage"
                                                 style="background-color: #ba3737">{{ $row['userLogsHours'] }}%</span>
                                         @elseif($row['status'] == 1)
                                             <span class="label sidebarMonitorPercentage"
                                                 style="background-color: #4da74d">{{ $row['userLogsHours'] }}%</span>
                                         @elseif($row['status'] == '' || $row['status'] == null)
                                             <span class="label sidebarMonitorPercentage "
                                                 style="background-color: #">{{ $row['userLogsHours'] }}%</span>
                                         @endif
                                     @else
                                         <span class="label sidebarMonitorPercentage"
                                             style="background-color: #000000">{{ $row['userLogsHours'] }}%</span>
                                     @endif

                                     <span class="label">{{ $row['monitor_type'] }}</span>
                                     <a href="#{{ $row['id'] }}" class="monitorTitle" title="{{ $row['url_ip'] }}"
                                         data-monitortitle="{{ $row['friendly_name'] }}">{{ $row['friendly_name'] }}
                                     </a>

                                     @if ($row['monitor_type_id'] == 3 || $row['monitor_type_id'] == 4)
                                     @else
                                         <a id="sidebarMonitorLink-{{ $row['id'] }}" href="{{ $row['url_ip'] }}"
                                             target="_blank">
                                             <i class="item-icon fontello-icon-link-1"
                                                 style="color:#999999; font-size: 0.7em;"></i>
                                         </a>
                                     @endif

                                     @if ($row['status'] == '0')
                                         <div class="pull-right">
                                             <div class="uptimeSidebarWrapper pull-left">
                                                 <div class="uptimeHiddenRatio" style="display:none;">
                                                     {{ $row['userLogsHours'] }}</div>
                                                 <ul class="uptimeChart">
                                                     <li data-tooltip="
                                                                             Start Time: {{ \Carbon\Carbon::parse($row['created_at'])->format('Y/m/d h:m:s') }}<br>
                                                                             End Time: {{ \Carbon\Carbon::now() }}  <br>
                                                                             Duration:{{ round(\Carbon\Carbon::now()->diffInHours( \Carbon\Carbon::parse($row['created_at'])->format('Y-m-d H:i:s'), true)) }} hrs,{{ round(\Carbon\Carbon::now()->diffInMinutes($row['created_at'], true) / 3600) }} mins<br>
                                                                            Status: Down"
                                                         style="width: 100%; background:#ba3737;">
                                                         <img src="{{ asset('userside/assets/img/1px.webp') }}"
                                                             alt="1px">
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="pull-right"><a href="#mMenuAccordion{{ $row['id'] }}"
                                                     data-parent="#mainSideMenu" data-toggle="collapse"
                                                     class="accordion-toggle monitorAccordionBtn"><i
                                                         class="chevron fontello-icon-cog-3"></i></a></div>
                                         </div>
                                     @elseif($row['status'] == 1)
                                         <div class="pull-right">
                                             <div class="uptimeSidebarWrapper pull-left">
                                                 <div class="uptimeHiddenRatio" style="display:none;">
                                                     {{ $row['userLogsHours'] }}</div>
                                                 <ul class="uptimeChart">
                                                     <li data-tooltip="
                                                                                   Start Time: {{ \Carbon\Carbon::parse($row['created_at'])->format('Y/m/d h:m:s') }}<br>
                                                                                   End Time: {{ \Carbon\Carbon::now() }}  <br>
                                                                                   Duration: {{ round(\Carbon\Carbon::now()->diffInHours($row['created_at'], true)) }} hrs,{{ round(\Carbon\Carbon::now()->diffInMinutes($row['created_at'], true) / 3600) }} mins<br>
                                                                                   Status: Up"
                                                         style="width: 100%; background:#4da74d;">
                                                         <img src="{{ asset('userside/assets/img/1px.webp') }}"
                                                             alt="1px">
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="pull-right"><a href="#mMenuAccordion{{ $row['id'] }}"
                                                     data-parent="#mainSideMenu" data-toggle="collapse"
                                                     class="accordion-toggle monitorAccordionBtn"><i
                                                         class="chevron fontello-icon-cog-3"></i></a></div>
                                         </div>
                                     @elseif($row['status'] == '' || $row['status'] == null)
                                         <div class="pull-right">
                                             <div class="uptimeSidebarWrapper pull-left">
                                                 <ul class="uptimeChart">
                                                     <li class="newMonitorUptimeLine" data-tooltip="No logs (info) exist.">
                                                         <img alt="1px"
                                                             src="{{ asset('userside/assets/img/1px.webp') }}">
                                                     </li>
                                                 </ul>
                                             </div>
                                             <div class="pull-right"> <a class="accordion-toggle monitorAccordionBtn"
                                                     data-parent="#mainSideMenu" data-toggle="collapse"
                                                     href="#mMenuAccordion{{ $row['id'] }}">
                                                     <i class="chevron fontello-icon-cog-3"></i> </a>
                                             </div>
                                         </div>
                                     @endif



                                 </div>
                                 <ul class="accordion-content nav nav-list collapse"
                                     id="mMenuAccordion{{ $row['id'] }}">
                                     @if ($row['pause'] == 0)
                                         <li class="startStopMonitor"> <a href="#"> <i
                                                     class="fontello-icon-right-dir"></i><span
                                                     class="monitorStartStopText{{ $row['id'] }}"
                                                     name="monitorStartStop" data-id="1"> Pause</span>
                                             </a>
                                         </li>
                                     @else
                                         <li class="startStopMonitor"> <a href="#"> <i
                                                     class="fontello-icon-right-dir"></i><span
                                                     class="monitorStartStopText{{ $row['id'] }}"
                                                     name="monitorStartStop" data-id="1"> Start</span>
                                             </a>
                                         </li>
                                     @endif
                                     <li> <a href="#editMonitor" data-toggle="modal" data-monitorid="{{ $row['id'] }}"
                                             class="editMonitor"> <i class="fontello-icon-right-dir"></i> Edit </a>
                                     </li>
                                     <li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="{{ $row['id'] }}"
                                             class="deleteMonitor"> <i class="fontello-icon-right-dir"></i> Delete </a>
                                     </li>
                                     <li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="{{ $row['id'] }}"
                                             class="resetMonitor"> <i class="fontello-icon-right-dir"></i> Reset Stats
                                         </a> </li>
                                 </ul>
                             </li>
                         @endforeach
                         {{-- end listing monitor --}}
                     @endif
                     <input type="hidden" value="20" id="mainSideMenuMonitorsLimit">

                     <li class="accordion-group hide" id="loadingMoreMonitors" style="background: #373b3e;">
                         <div class="accordion-heading">
                             <a class="monitorTitle" href="#" style="color:#e6e8eb;">Loading more....</a>
                         </div>
                     </li>
                 </ul>
                 <input id="monitorsLastRowReached" type="hidden" value="0" />

                 <div class="sidebar-item"></div>

             </div>

             <a href="#upgradeAccount" class="upgradeProAccount hide" data-toggle="modal">.</a> {{-- menu start --}}
             <div id="main-content" class="main-content container-fluid">
                 <div id="headerMenuWrap" class="row-fluid">
                     <ul id="headerMenu" class="unstyled inline f16">
                         <li class="margin-right20 standardHeaderItem" style="position: relative;">
                             <a href="#upgradeAccount" class="upgradeProAccount btn btn-green btn-large"
                                 data-toggle="modal" style="margin-top: -10px;"
                                 data-cta-source="main_header-cta">Upgrade</a>
                         </li>

                         <li class="margin-right20 standardHeaderItem"><a href="#mainDashboard"
                                 class="mainDashboard text-color">Dashboard</a></li>
                         <li class="margin-right20 standardHeaderItem"><a href="/statuspage"
                                 class="mySettings text-color">Status pages</a></li>
                         <li class="margin-right20 standardHeaderItem"><a href="#mySettings"
                                 class="mySettings text-color">My Settings</a></li>

                         {{-- logout --}}
                         <li class="standardHeaderItem" style="float: right;">
                             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();"
                                 class="text-dirtyred">Logout</a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </li>

                         {{-- logout end --}}

                         <li class="margin-right20 standardHeaderItem" style="float: right;">
                             <img src="{{ asset('userside/assets/img/icon/user-icon.svg') }}" width="24" alt="user icon"
                                 class="margin-right10" />
                             <a href="{{ asset('/cdn-cgi/l/email-protection') }}" class="__cf_email__"
                                 data-cfemail="">
                                 {{ Auth::user()->email }}</a>
                         </li>

                         {{-- menu end --}}
                         <li class="margin-right20 exitTVModeHeaderItem hidden">
                             <a href="/dashboard#mainDashboard" class="exitTVMode text-dirtyred">Exit TV Mode</a>
                             (refreshing in <span class="countdown"></span> seconds)
                             <span id="TVModeNotificationHolder">
                                 <a id="TVModeNotification" href="#" style="color:white;">
                                     <i class="fontello-icon-volume-down-1"></i>
                                 </a>
                             </span>
                         </li>
                     </ul>

                     <div class="socialWrapper" style="position: absolute; left: 571px; bottom: -10px;">
                         <ul class="unstyled inline">
                             <li style="height:20px;border-top-left-radius: 5px; border-top-right-radius: 5px;background: url(userside/assets/img/background/body-bg-02-15.jpg) repeat; padding:0 6px 0 4px;"
                                 class="text-center">
                                 <a href="#tvMode" class="enableTVMode noUnderline"><i
                                         class="fontello-icon-monitor tvModeLink"> TV Mode</i></a>
                             </li>
                             <li style="height:20px; margin:0 0 0 5px; border-top-left-radius: 5px; border-top-right-radius: 5px;background: url(userside/assets/img/background/body-bg-02-15.jpg) repeat; padding:0 6px 0 4px;"
                                 class="text-center">
                                 <a href="https://twitter.com/uptimerobot" class="noUnderline"><i
                                         class="fontello-icon-twitter-squared twitterLink"></i></a>
                             </li>
                             <li style="height:20px; margin:0 20px 0 5px;border-top-left-radius: 5px; border-top-right-radius: 5px;background: url(userside/assets/img/background/body-bg-02-15.jpg) repeat; padding:0 6px 0 4px;"
                                 class="text-center">
                                 <a href="https://facebook.com/UptimeRobot" class="noUnderline"><i
                                         class="fontello-icon-facebook-squared facebookLink"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div>


                 <div class="row-fluid page-head">
                     <h2 class="page-title"><i class="fontello-icon-monitor"></i> <span class="dashBigTitle"
                             data-monitorID="">Dashboard</span> <small class="dashSmallTitle greenLink">all details in a
                             snapshot</small></h2>
                     <p class="pagedesc">A place to find all the details about your monitors</p>
                     <p class="backToMonitorListBtn">
                         <a href="javascript:">
                             < Back to "Monitors List" </a>
                     </p>
                     <div class="page-bar">
                         <div class="btn-toolbar"> </div>
                     </div>
                 </div>


                 <div id="page-content" class="page-content">
                 </div>
                 {{-- footer start dashbord --}}
                 <div id="footer" class="row-fluid text-color"
                     style="background:#dfdfdf; padding: 10px 10px 0 10px; font-size: 11px; height:40px;">
                     <div class="span12">
                         <a href="#">Privacy Policy</a> / <a href="#">Terms</a> / <a href="#">Locations & IPs</a> --- <a
                             href="#">FAQ</a> / <a href="#">Contact
                             Us</a> --- <a href="#">API</a>
                     </div>
                 </div>
                 {{-- footer end --}}

                 <div id="newMonitor" class="modal hide fade" tabindex="-1" data-width="60%">
                     <div class="modal-header"> </div>
                     {{-- form start Add monitring --}}
                     <form id="newMonitorForm" class="form-horizontal" method="POST"
                         action="{{ route('monitor.store') }}" autocomplete="off">
                         @csrf
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span7 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> New Monitor</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Monitor Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <input type="hidden" id="userMonitorLimit"
                                                                             value="1" />
                                                                         <label for="newMonitorType"
                                                                             class="control-label">Monitor Type</label>
                                                                         <div class="controls">
                                                                             <select id="newMonitorType"
                                                                                 class="selecttwo span6"
                                                                                 name="newMonitorType">
                                                                                 <option selected="selected" value="0">
                                                                                     Please
                                                                                     Select</option>
                                                                                 <option value="1">HTTP(s)</option>
                                                                                 <option value="2">Keyword</option>
                                                                                 <option value="3">Ping</option>
                                                                                 <option value="4">Port</option>
                                                                             </select>
                                                                         </div>
                                                                     </li>

                                                                     <div class="hide" id="newHTTPMonitor">
                                                                         <li class="control-group">
                                                                             <label for="newHTTPMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="newHTTPMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newHTTPMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newHTTPMonitorURL"
                                                                                 class="control-label">URL (or
                                                                                 IP)</label>
                                                                             <div class="controls">
                                                                                 <input id="newHTTPMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="newHTTPMonitorURL"
                                                                                     value="https://">
                                                                             </div>
                                                                         </li>
                                                                         {{-- 1 min by default --}}
                                                                         <li class="control-group">
                                                                             <label for="newHTTPMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="newHTTPMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="newHTTPMonitorInterval"
                                                                                     name="newHTTPMonitorInterval"
                                                                                     value="60" class="hide">
                                                                             </div>
                                                                         </li>

                                                                         {{-- 1 min by default --}}
                                                                         <li class="control-group">
                                                                             <label for="newHTTPMonitorTimeout"
                                                                                 class="control-label">Monitor
                                                                                 Timeout</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider span6 timeoutSlider">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in
                                                                                     <span class="timeoutInText"><b>30</b>
                                                                                         seconds</span>
                                                                                     <input type="text"
                                                                                         name="newHTTPMonitorTimeout"
                                                                                         value="30"
                                                                                         class="hide monitorTimeout">
                                                                             </div>
                                                                         </li>


                                                                     </div>

                                                                     {{-- keyword --}}
                                                                     <div class="hide" id="newKeywordMonitor">
                                                                         <li class="control-group">
                                                                             <label for="newKeywordMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="newKeywordMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newKeywordMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newKeywordMonitorURL"
                                                                                 class="control-label">URL (or
                                                                                 IP)</label>
                                                                             <div class="controls">
                                                                                 <input id="newKeywordMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="newKeywordMonitorURL"
                                                                                     value="https://">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newKeywordMonitorKeywordValue"
                                                                                 class="control-label">Keyword</label>
                                                                             <div class="controls">
                                                                                 <input id="newKeywordMonitorKeywordValue"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newKeywordMonitorKeywordValue">
                                                                                 <span class="help-block">(the
                                                                                     keyword
                                                                                     must
                                                                                     be present in the HTML
                                                                                     source)</span>
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newKeywordCaseType"
                                                                                 class="control-label">Case-insensitive</label>
                                                                             <div class="controls">
                                                                                 <input id="newKeywordCaseType"
                                                                                     class="leftFloat" type="checkbox"
                                                                                     name="newKeywordCaseType" value="1">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newKeywordMonitorKeywordType"
                                                                                 class="control-label">Alert
                                                                                 When</label>
                                                                             <div class="controls">
                                                                                 <div data-toggle="buttons-radio"
                                                                                     class="btn-group">
                                                                                     <button
                                                                                         onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='1'"
                                                                                         class="btn"
                                                                                         type="button"
                                                                                         class-toggle="btn-green"
                                                                                         value="1">Keyword
                                                                                         Exists</button>
                                                                                     <button
                                                                                         onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='2'"
                                                                                         class="btn"
                                                                                         type="button"
                                                                                         class-toggle="btn-green"
                                                                                         value="2">Keyword Not
                                                                                         Exists</button>
                                                                                 </div>
                                                                                 <input type="hidden"
                                                                                     id="newKeywordMonitorKeywordType"
                                                                                     value=""
                                                                                     name="newKeywordMonitorKeywordType" />
                                                                             </div>
                                                                         </li>
                                                                         {{-- interval keyword monitor --}}
                                                                         <li class="control-group">
                                                                             <label for="newKeywordMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="newKeywordMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="newKeywordMonitorInterval"
                                                                                     name="newKeywordMonitorInterval"
                                                                                     value="60" class="hide">
                                                                             </div>
                                                                         </li>
                                                                         {{-- interval keyword monitor --}}

                                                                         <li class="control-group">
                                                                             <label for="newKeywordMonitorTimeout"
                                                                                 class="control-label">Monitor
                                                                                 Timeout</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider span6 timeoutSlider">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in
                                                                                     <span class="timeoutInText"><b>30</b>
                                                                                         seconds</span>
                                                                                     <input type="text"
                                                                                         name="newKeywordMonitorTimeout"
                                                                                         value="30"
                                                                                         class="hide monitorTimeout">
                                                                             </div>
                                                                         </li>


                                                                     </div>

                                                                     {{-- ping monitor --}}
                                                                     <div class="hide" id="newPingMonitor">
                                                                         <li class="control-group">
                                                                             <label for="newPingMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="newPingMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newPingMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newPingMonitorURL"
                                                                                 class="control-label">IP (or
                                                                                 Host)</label>
                                                                             <div class="controls">
                                                                                 <input id="newPingMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="newPingMonitorURL" value="">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newPingMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="newPingMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="newPingMonitorInterval"
                                                                                     name="newPingMonitorInterval"
                                                                                     value="60" class="hide">
                                                                             </div>
                                                                         </li>
                                                                     </div>

                                                                     {{-- port --}}
                                                                     <div class="hide" id="newPortMonitor">
                                                                         <li class="control-group">
                                                                             <label for="newPortMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="newPortMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newPortMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newPortMonitorURL"
                                                                                 class="control-label">IP (or URL or
                                                                                 Host)</label>
                                                                             <div class="controls">
                                                                                 <input id="newPortMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="newPortMonitorURL" value="">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newPortMonitorPort"
                                                                                 class="control-label">Port</label>
                                                                             <div class="controls">
                                                                                 <select id="newPortMonitorPort"
                                                                                     class="selecttwo span6"
                                                                                     name="newPortMonitorPort"
                                                                                     style="float:none;">
                                                                                     <option value="0" selected="selected">
                                                                                         Please select</option>
                                                                                     <optgroup label="Popular Ports">
                                                                                         <option value="1">HTTP (80)
                                                                                         </option>
                                                                                         <option value="2">HTTPS (443)
                                                                                         </option>
                                                                                         <option value="3">FTP (21)
                                                                                         </option>
                                                                                         <option value="4">SMTP (25)
                                                                                         </option>
                                                                                         <option value="5">POP3 (110)
                                                                                         </option>
                                                                                         <option value="6">IMAP (143)
                                                                                         </option>
                                                                                     </optgroup>
                                                                                     <optgroup label="Custom Port">
                                                                                         <option value="99">Custom Port
                                                                                         </option>
                                                                                     </optgroup>
                                                                                 </select>
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group hide"
                                                                             id="newPortMonitorCustomPortWrapper">
                                                                             <label for="newPortMonitorCustomPort"
                                                                                 class="control-label">Custom
                                                                                 Port</label>
                                                                             <div class="controls">
                                                                                 <input id="newPortMonitorCustomPort"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newPortMonitorCustomPort">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="newPortMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="newPortMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="newPortMonitorInterval"
                                                                                     name="newPortMonitorInterval"
                                                                                     value="60" class="hide">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newPortMonitorTimeout"
                                                                                 class="control-label">Monitor
                                                                                 Timeout</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider span6 timeoutSlider">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in
                                                                                     <span class="timeoutInText"><b>30</b>
                                                                                         seconds</span>
                                                                                     <input type="text"
                                                                                         name="newPortMonitorTimeout"
                                                                                         value="30"
                                                                                         class="hide monitorTimeout">
                                                                             </div>
                                                                         </li>
                                                                     </div>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>


                                         <div id="newMonitorSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Monitor created!</strong> You can keep creating
                                             new monitors.
                                         </div>

                                         <div id="newMonitorSuccessNotificationTestInfo"
                                             class="alert alert-info no-margin-right no-margin-left margin-top20 hide"
                                             style="min-height: 30px;">
                                             Go ahead and test notification setup to see if everything works.
                                             <button type="button" class="btn btn-primary pull-right"
                                                 id="show-monitor-detail">
                                                 Go to monitor detail
                                             </button>
                                         </div>
                                         <div id="newMonitorErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">The monitor already exists in the
                                                 list</strong>.
                                         </div>

                                         <div id="newMonitorBlacklistErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">The monitor URL/IP is in blacklist, please
                                                 try
                                                 with
                                                 another URL/IP</strong>.
                                         </div>

                                         <div id="newMonitorInvalidUrlErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">The monitor URL/IP is invalid, please try
                                                 with
                                                 another URL/IP</strong>.
                                         </div>
                                     </div>
                                     {{-- alert conact --}}
                                     <div class="span5 grider">
                                         <input type="hidden" name="alertContactsInputNew" class="alertContactsInputNew" />
                                         <input type="hidden" name="alertContactsSettingsStatus"
                                             class="alertContactsSettingsStatus" value="0" />
                                         <div id="newMonitorAlertContacts" class="alertContactsContainerNew">
                                         </div>
                                         <input type="hidden" class="getAlertContactsEditOrListDetector" value="0" />
                                         <input type="hidden" name="mWindowsInputNew" class="mWindowsInputNew" />
                                         <input type="hidden" class="getMWindowsEditOrListDetector" value="0" />
                                     </div>
                                     {{-- end --}}
                                 </div>

                             </div>
                         </div>

                         {{-- model button --}}
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Create Monitor</button>
                         </div>
                     </form>
                 </div>
                 {{-- end add form --}} {{-- Edit form start --}}
                 <div id="editMonitor" class="modal hide fade" tabindex="-1" data-width="60%">
                     <div class="modal-header"> </div>
                     <form id="editMonitorForm" class="form-horizontal" method="POST" action="" autocomplete="off">
                         @csrf
                         @method('patch')
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span7 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Edit Monitor </h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Monitor Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="editMonitorType"
                                                                             class="control-label">Monitor Type</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="editMonitorTypeTitle"></span>
                                                                             <input id="editMonitorType"
                                                                                 class="span6" type="hidden"
                                                                                 value="" name="editMonitorType">
                                                                         </div>
                                                                     </li>

                                                                     <div class="hide" id="editHTTPMonitor">
                                                                         <li class="control-group">
                                                                             <label for="editHTTPMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="editHTTPMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editHTTPMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editHTTPMonitorURL"
                                                                                 class="control-label">URL (or
                                                                                 IP)</label>
                                                                             <div class="controls">
                                                                                 <input id="editHTTPMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="editHTTPMonitorURL" value="">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editHTTPMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="editHTTPMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="editHTTPMonitorInterval"
                                                                                     name="editHTTPMonitorInterval"
                                                                                     value="5" class="hide">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newHTTPMonitorTimeout"
                                                                                 class="control-label">Monitor
                                                                                 Timeout</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider span6 timeoutSlider">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in
                                                                                     <span class="timeoutInText"></span>
                                                                                     <input type="text"
                                                                                         name="editHTTPMonitorTimeout"
                                                                                         value="1"
                                                                                         class="hide monitorTimeout">
                                                                             </div>
                                                                         </li>

                                                                     </div>

                                                                     {{-- keyword Edit form --}}
                                                                     <div class="hide" id="editKeywordMonitor">
                                                                         <li class="control-group">
                                                                             <label for="editKeywordMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="editKeywordMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editKeywordMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editKeywordMonitorURL"
                                                                                 class="control-label">URL (or
                                                                                 IP)</label>
                                                                             <div class="controls">
                                                                                 <input id="editKeywordMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="editKeywordMonitorURL" value="">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editKeywordMonitorKeywordValue"
                                                                                 class="control-label">Keyword</label>
                                                                             <div class="controls">
                                                                                 <input id="editKeywordMonitorKeywordValue"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editKeywordMonitorKeywordValue">
                                                                                 <span class="help-block">(the
                                                                                     keyword
                                                                                     must
                                                                                     be present in the HTML
                                                                                     source)</span>
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editKeywordCaseType"
                                                                                 class="control-label">Case-insensitive</label>
                                                                             <div class="controls">
                                                                                 <input id="editKeywordCaseType"
                                                                                     class="leftFloat" type="checkbox"
                                                                                     name="editKeywordCaseType" value="1">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editKeywordMonitorKeywordType"
                                                                                 class="control-label">Alert
                                                                                 When</label>
                                                                             <div class="controls">
                                                                                 <div data-toggle="buttons-radio"
                                                                                     class="btn-group">
                                                                                     <button
                                                                                         id="editKeywordMonitorKeywordTypeExists"
                                                                                         onclick="javascript:document.getElementById('editKeywordMonitorKeywordType').value='1'"
                                                                                         class="btn"
                                                                                         type="button"
                                                                                         class-toggle="btn-green"
                                                                                         value="1">Keyword
                                                                                         Exists</button>
                                                                                     <button
                                                                                         id="editKeywordMonitorKeywordTypeNotExists"
                                                                                         onclick="javascript:document.getElementById('editKeywordMonitorKeywordType').value='2'"
                                                                                         class="btn"
                                                                                         type="button"
                                                                                         class-toggle="btn-green"
                                                                                         value="2">Keyword Not
                                                                                         Exists</button>
                                                                                 </div>
                                                                                 <span class="help-block">(the event
                                                                                     log
                                                                                     will
                                                                                     be erased when you change this
                                                                                     setting)</span>
                                                                                 <input type="hidden"
                                                                                     id="editKeywordMonitorKeywordType"
                                                                                     value=""
                                                                                     name="editKeywordMonitorKeywordType" />
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editKeywordMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="editKeywordMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="editKeywordMonitorInterval"
                                                                                     name="editKeywordMonitorInterval"
                                                                                     class="hide">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editKeywordMonitorTimeout"
                                                                                 class="control-label">Monitor
                                                                                 Timeout</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider span6 timeoutSlider">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in
                                                                                     <span class="timeoutInText"></span>
                                                                                     <input type="text"
                                                                                         name="editKeywordMonitorTimeout"
                                                                                         value="1"
                                                                                         class="hide monitorTimeout">
                                                                             </div>
                                                                         </li>


                                                                     </div>

                                                                     <div class="hide" id="editPingMonitor">
                                                                         <li class="control-group">
                                                                             <label for="editPingMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="editPingMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editPingMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editPingMonitorURL"
                                                                                 class="control-label">IP (or
                                                                                 Host)</label>
                                                                             <div class="controls">
                                                                                 <input id="editPingMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="editPingMonitorURL" value="">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editPingMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="editPingMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="editPingMonitorInterval"
                                                                                     name="editPingMonitorInterval"
                                                                                     class="hide">
                                                                             </div>
                                                                         </li>
                                                                     </div>

                                                                     <div class="hide" id="editPortMonitor">
                                                                         <li class="control-group">
                                                                             <label for="editPortMonitorFriendlyName"
                                                                                 class="control-label">Friendly
                                                                                 Name</label>
                                                                             <div class="controls">
                                                                                 <input id="editPortMonitorFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editPortMonitorFriendlyName">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editPortMonitorURL"
                                                                                 class="control-label">IP (or URL or
                                                                                 Host)</label>
                                                                             <div class="controls">
                                                                                 <input id="editPortMonitorURL"
                                                                                     class="span8" type="text"
                                                                                     name="editPortMonitorURL" value="">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editPortMonitorPort"
                                                                                 class="control-label">Port</label>
                                                                             <div class="controls">
                                                                                 <select id="editPortMonitorPort"
                                                                                     class="selecttwo span6"
                                                                                     name="editPortMonitorPort">
                                                                                     <option value="" selected="selected">
                                                                                         Please select</option>
                                                                                     <optgroup label="Popular Ports">
                                                                                         <option value="1">HTTP (80)
                                                                                         </option>
                                                                                         <option value="2">HTTPS (443)
                                                                                         </option>
                                                                                         <option value="3">FTP (21)
                                                                                         </option>
                                                                                         <option value="4">SMTP (25)
                                                                                         </option>
                                                                                         <option value="5">POP3 (110)
                                                                                         </option>
                                                                                         <option value="6">IMAP (143)
                                                                                         </option>
                                                                                     </optgroup>
                                                                                     <optgroup label="Custom Port">
                                                                                         <option value="99">Custom Port
                                                                                         </option>
                                                                                     </optgroup>
                                                                                 </select>
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group hide"
                                                                             id="editPortMonitorCustomPortWrapper">
                                                                             <label for="editPortMonitorCustomPort"
                                                                                 class="control-label">Custom
                                                                                 Port</label>
                                                                             <div class="controls">
                                                                                 <input id="editPortMonitorCustomPort"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editPortMonitorCustomPort">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editPortMonitorInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b
                                                                                         id="editPortMonitorIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text"
                                                                                     id="editPortMonitorInterval"
                                                                                     name="editPortMonitorInterval"
                                                                                     class="hide">
                                                                             </div>
                                                                         </li>

                                                                         <li class="control-group">
                                                                             <label for="editPortMonitorTimeout"
                                                                                 class="control-label">Monitor
                                                                                 Timeout</label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider span6 timeoutSlider">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in
                                                                                     <span class="timeoutInText">
                                                                                         seconds</span>
                                                                                     <input type="text"
                                                                                         name="editPortMonitorTimeout"
                                                                                         value="1"
                                                                                         class="hide monitorTimeout">
                                                                             </div>
                                                                         </li>
                                                                     </div>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="editMonitorSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Monitor edited!</strong> You can keep editing
                                             it.
                                         </div>

                                         <div id="editMonitorErrorNotificationExist"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">This monitor url is already in the
                                                 list.</strong>.
                                         </div>

                                         <div id="editMonitorBlacklistErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">The monitor URL/IP is in blacklist, please
                                                 try
                                                 with
                                                 another URL/IP</strong>.
                                         </div>

                                         <div id="editMonitorInvalidUrlErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">The monitor URL/IP is invalid, please try
                                                 with
                                                 another URL/IP</strong>.
                                         </div>
                                     </div>

                                     <div class="span5 grider">
                                         <input type="hidden" name="alertContactsInputEdit" class="alertContactsInputEdit"
                                             value="" />
                                         <div id="editMonitorAlertContacts" class="alertContactsContainerEdit">
                                         </div>
                                         <input type="hidden" class="getAlertContactsEditOrListDetector" value="0" />
                                         <input type="hidden" name="mWindowsInputEdit" class="mWindowsInputEdit" />
                                         <input type="hidden" class="getMWindowsEditOrListDetector" value="0" />
                                     </div>

                                 </div>

                             </div>
                         </div>

                         <div class="modal-footer">
                             <span class="pull-left" style="margin-top:6px;">
                                 <a href="#" id="previousMonitorLink" class="getMonitor hide"> « Previous Monitor</a>
                                 <span id="brackets"> - </span>
                                 <a href="#" id="nextMonitorLink" class="getMonitor hide"> Next Monitor »</a>
                             </span>
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Save Changes</button>
                         </div>
                     </form>
                 </div>


                 {{-- delete form start --}}

                 <div id="deleteMonitor" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="deleteMonitorForm" class="form-horizontal" method="POST" action="">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Delete Monitor </h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Monitor Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteMonitorType"
                                                                             class="control-label">Monitor Type</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteMonitorTypeTitle"></span>
                                                                         </div>
                                                                         <input type="hidden" name="deleteMonitorID"
                                                                             id="deleteMonitorID" />
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteMonitorFriendlyName"
                                                                             class="control-label">Friendly
                                                                             Name</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteMonitorFriendlyNameTitle"
                                                                                 style="word-break:break-all;"></span>
                                                                         </div>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteMonitorURL"
                                                                             class="control-label">URL (or IP)</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteMonitorURLTitle"
                                                                                 style="word-break:break-all;"></span>
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="deleteMonitorSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Monitor deleted!</strong>
                                         </div>
                                         <div id="deleteMonitorInfoNotification"
                                             class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-warning">Warning!</strong> You are about to delete this
                                             monitor and any logs related to it.
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="deleteMonitorFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="deleteMonitorFormSubmitButton">Delete
                                 Monitor</button>
                         </div>
                     </form>
                 </div>
                 {{-- delete from end --}} {{-- reset from start --}}
                 <div id="resetMonitor" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="resetMonitorForm" class="form-horizontal" method="POST" action="">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Reset Monitor </h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Monitor Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="resetMonitorType"
                                                                             class="control-label">Monitor Type</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="resetMonitorTypeTitle"></span>
                                                                         </div>
                                                                         <input type="hidden" name="resetMonitorID"
                                                                             id="resetMonitorID" />
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="resetMonitorFriendlyName"
                                                                             class="control-label">Friendly
                                                                             Name</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="resetMonitorFriendlyNameTitle"
                                                                                 style="word-break:break-all;"></span>
                                                                         </div>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="resetMonitorURL"
                                                                             class="control-label">URL (or IP)</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="resetMonitorURLTitle"
                                                                                 style="word-break:break-all;"></span>
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="resetMonitorSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Monitor is reset!</strong>.
                                         </div>
                                         <div id="resetMonitorInfoNotification"
                                             class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-warning">Warning!</strong> You are about to delete any
                                             logs and reset the stats of this monitor.
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>

                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="resetMonitorFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="resetMonitorFormSubmitButton">Reset
                                 Monitor</button>
                         </div>
                     </form>
                 </div>

                 {{-- reset from clodashboardbse --}}


                 {{-- new alert contact --}}
                 <div id="newAlertContact" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form id="newAlertContactForm" class="form-horizontal" method="post"
                         action="{{ route('addAlert') }}">
                         @csrf
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> New Alert Contact</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Alert Contact
                                                                             Information
                                                                         </h4>
                                                                     </li>
                                                                     <div class="show" id="newEmailAlertContact">
                                                                         <li class="control-group">
                                                                             <label for="newEmailAlertContactFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input
                                                                                     id="newEmailAlertContactFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newEmailAlertContactFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newEmailAlertContactValue"
                                                                                 class="control-label">E-mail <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newEmailAlertContactValue"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newEmailAlertContactValue">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label
                                                                                 for="newEmailAlertContactExcludeNotifications"
                                                                                 class="control-label">Enable
                                                                                 notifications
                                                                                 for: </label>
                                                                             <div class="controls">
                                                                                 <div class="span8">
                                                                                     <select
                                                                                         id="newEmailAlertContactExcludeNotifications"
                                                                                         class="selecttwo span6"
                                                                                         name="newEmailAlertContactExcludeNotifications"
                                                                                         style="float:none;">
                                                                                         <option selected="selected"
                                                                                             value="0">Up & down events
                                                                                         </option>
                                                                                         <option value="1">Only down
                                                                                             events
                                                                                         </option>
                                                                                         <option value="2">Only up events
                                                                                         </option>
                                                                                     </select>
                                                                                     <div>
                                                                                     </div>
                                                                         </li>


                                                                     </div>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         {{-- <div id="newAlertContactAttachNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 ">
                                                <strong>Please, assign the alert contact</strong> to each monitor you would like to be notified of. Click on the "cogwheel" button next to your monitor and
                                                <code>"edit" > Select "Alert Contacts To Notify"</code>.
                                            </div> --}}
                                         <div id="newAlertContactSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 ">
                                             <strong class="alert-success">Alert contact created!</strong> You can keep
                                             adding new alert contacts.
                                         </div>
                                         <div id="newAlertContactErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 ">
                                         </div>
                                         <div id="newPushbulletAlertContactErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 ">
                                         </div>
                                         <div id="newAlertContactExistsErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 ">
                                             <strong class="alert-error">Ooops!</strong> This alert contact already
                                             exists under your account.
                                         </div>
                                         <div id="newTwitterAlertContactNoFollowNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 ">
                                             <strong class="alert-error">Ooops!</strong> Please make sure that you
                                             follow the <a href="http://twitter.com/uptimerobot">@uptimerobot</a> Twitter
                                             user (as notification direct messages are sent from this
                                             address).
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>

                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Create Alert Contact</button>
                         </div>
                     </form>
                 </div>
                 {{-- new alert  form completed --}}

                 {{-- delete acount --}}
                 {{-- inc/dml/userDML.php?action=deleteAlertContact --}}
                 <div id="deleteAlertContact" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="deleteAlertContactForm" class="form-horizontal" method="get" action="">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Delete Alert Contact</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Alert Contact
                                                                             Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteAlertContactType"
                                                                             class="control-label">Alert Contact
                                                                             Type</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteAlertContactTypeTitle"></span>
                                                                         </div>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteAlertContactValue"
                                                                             class="control-label">Alert
                                                                             Contact</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteAlertContactValueTitle"></span>
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="deleteAlertContactSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Alert contact deleted!</strong>.
                                         </div>
                                         <div id="deleteAlertContactInfoNotification"
                                             class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-warning">Warning!</strong> You are about to delete this
                                             alert contact and it will be removed from any monitors it is attached to
                                             (monitors will not be deleted).
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="deleteAlertContactFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="deleteAlertContactFormSubmitButton">Delete
                                 Alert Contact</button>
                         </div>
                     </form>
                 </div>

                 {{-- <div id="activateAlertContact" class="modal hide fade" tabindex="-1" data-width="35%">
                    <div class="modal-header"> </div>
                    <form id="activateAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=activateAlertContact">
                        <div class="modal-body">
                            <div class="tab-pane active fade in">
                                <div class="row-fluid">
                                    <div class="spa12 grider">
                                        <div class="widget widget-simple">
                                            <div class="widget-header">
                                                <h4><i class="fontello-icon-edit"></i> Activate Alert Contact</h4>
                                            </div>
                                            <div class="widget-content">
                                                <div class="widget-body">
                                                    <div class="row-fluid">
                                                        <div class="span12 form-dark">
                                                            <fieldset>
                                                                <ul class="form-list label-left list-bordered dotted">
                                                                    <li class="section-form">
                                                                        <h4 class="test">Alert Contact Information
                                                                        </h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="activateAlertContactType" class="control-label">Alert Contact
                                                                            Type</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="activateAlertContactTypeTitle"></span>
                                                                        </div>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="activateAlertContactValue" class="control-label">Alert
                                                                            Contact</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="activateAlertContactValueTitle"></span>
                                                                        </div>
                                                                    </li>
                                                                    <li id="activateTelegramAlertNotStarted" class="control-group hide">
                                                                        <div class="alert alert-info no-margin">
                                                                            <strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog with the Telegram UptimeRobot Bot. Please
                                                                            <a href="https://telegram.me/officialuptimerobot?start=">click
                                                                                this custom link and start the dialog on
                                                                                Telegram</a>, <b>for this alert contact
                                                                                to
                                                                                work</b>.
                                                                        </div>
                                                                    </li>
                                                                    <li id="activateGoogleAdWordsAlertNoAuth" class="control-group hide">
                                                                        <div class="alert alert-info no-margin">
                                                                            <strong class="alert-info">Important!</strong> Please <em>sign in with Google</em> to complete Google AdWords Authentication process. After Google AdWords authentication you have
                                                                            to edit alert contact to select which campaigns should be managed depending on your monitor.
                                                                            <br><a class="sign_in_with_google" href="inc/lib/GoogleAdWords/index.php?auth=1&dacid=" onclick="javascript:window.open('inc/lib/GoogleAdWords/index.php?auth=1&dacid=','google_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><b>Sign
                                                                                    in with Google</b></a>.
                                                                        </div>
                                                                    </li>
                                                                    <li id="activateGoogleAdWordsAlertYesAuthNoActive" class="control-group hide">
                                                                        <div class="alert alert-info no-margin">
                                                                            <strong class="alert-info">Important!</strong> You have already completed the Google Authentication process. To activate the monitor please edit this alert contact and choose
                                                                            related Ad Campaigns.
                                                                        </div>
                                                                    </li>
                                                                    <li id="activateFacebookAdsAlertNoAuth" class="control-group hide">
                                                                        <div class="alert alert-info no-margin">
                                                                            <strong class="alert-info">Important!</strong> Please <em>sign in with Facebook</em> to complete Facebook Ads Authentication process. After Facebook Ads authentication you have
                                                                            to edit alert contact to select which campaigns should be managed depending on your monitor.
                                                                            <br><a class="sign_in_with_facebook" href="inc/lib/FacebookAds/index.php?auth=1&dacid=" onclick="javascript:window.open('inc/lib/FacebookAds/index.php?auth=1&dacid=','facebook_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><b>Sign
                                                                                    in with Facebook</b></a>.
                                                                        </div>
                                                                    </li>
                                                                    <li id="activateFacebookAdsAlertYesAuthNoActive" class="control-group hide">
                                                                        <div class="alert alert-info no-margin">
                                                                            <strong class="alert-info">Important!</strong> You have already completed the Facebook Authentication process. To activate the monitor please edit this alert contact and choose
                                                                            related Ad Campaigns.
                                                                        </div>
                                                                    </li>
                                                                    <li class="control-group" id="activateAlertContactActivationCodeContainer">
                                                                        <label for="activateAlertContactActivationCode" class="control-label">Activation
                                                                            Code</label>
                                                                        <div class="controls">
                                                                            <input id="activateAlertContactActivationCode" class="span6" type="text" value="" name="activateAlertContactActivationCode" autocomplete="one-time-code">
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="activateAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-success">Alert contact activated!</strong>.
                                        </div>
                                        <div id="activateAlertContactErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">Oops!</strong> The activation code is not valid. Please try again.
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn" id="activateAlertContactFormCancelButton">Close</button>
                            <button type="submit" class="btn btn-primary" id="activateAlertContactFormSubmitButton">Activate
                                Alert Contact</button>
                        </div>
                    </form>
                </div> --}}

                 {{-- edit alert conact model call --}}
                 <div id="editAlertContact" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form id="editAlertContactForm" class="form-horizontal" method="POST" action="">
                         @csrf


                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Edit Alert Contact</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Alert Contact
                                                                             Information
                                                                         </h4>
                                                                     </li>
                                                                     {{-- type of alert --}}
                                                                     <li class="control-group">
                                                                         <label for="editAlertContactType"
                                                                             class="control-label">Alert Contact Type
                                                                             <span class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="editAlertContactTypeTitle"></span>
                                                                             <input id="editAlertContactType"
                                                                                 class="span6" type="hidden"
                                                                                 value="" name="editAlertContactType">
                                                                         </div>
                                                                     </li>
                                                                     {{-- end of type alert --}} {{-- base accounnt --}}

                                                                     <div class="hide"
                                                                         id="editBaseAccountAlertContact">
                                                                         <li class="control-group">
                                                                             <label
                                                                                 for="editBaseAccountAlertContactFriendlyName"
                                                                                 class="control-label">Friendly Name <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <span
                                                                                     id="editBaseAccountAlertContactFriendlyName"
                                                                                     class="span6"></span>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label
                                                                                 for="editBaseAccountAlertContactExcludeNotifications"
                                                                                 class="control-label">Enable
                                                                                 notifications for: </label>
                                                                             <div class="controls">
                                                                                 <select
                                                                                     id="editBaseAccountAlertContactExcludeNotifications"
                                                                                     class="selecttwo span6"
                                                                                     name="editBaseAccountAlertContactExcludeNotifications"
                                                                                     style="float:none;">
                                                                                     <option value="0">Up & down events
                                                                                     </option>
                                                                                     <option value="1">Only down events
                                                                                     </option>
                                                                                     <option value="2">Only up events
                                                                                     </option>
                                                                                 </select>
                                                                             </div>
                                                                         </li>

                                                                     </div>

                                                                     {{-- end --}}
                                                                     {{-- email type alert form --}}
                                                                     <div class="hide"
                                                                         id="editEmailAlertContact">
                                                                         <li class="control-group">
                                                                             <label for="editEmailAlertContactFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input
                                                                                     id="editEmailAlertContactFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editEmailAlertContactFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editEmailAlertContactValue"
                                                                                 class="control-label">E-mail <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <span class="bold"
                                                                                     id="editEmailAlertContactValue"></span>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label
                                                                                 for="editEmailAlertContactExcludeNotifications"
                                                                                 class="control-label">Enable
                                                                                 notifications
                                                                                 for: </label>
                                                                             <div class="controls">
                                                                                 <select
                                                                                     id="editEmailAlertContactExcludeNotifications"
                                                                                     class="selecttwo span6"
                                                                                     name="editEmailAlertContactExcludeNotifications"
                                                                                     style="float:none;">
                                                                                     <option value="0">Up & down events
                                                                                     </option>
                                                                                     <option value="1">Only down events
                                                                                     </option>
                                                                                     <option value="2">Only up events
                                                                                     </option>
                                                                                 </select>
                                                                             </div>
                                                                             <input type="hidden" name="account_type"
                                                                                 id="account_type">
                                                                         </li>

                                                                     </div>
                                                                     {{-- end --}}
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="editAlertContactSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Alert contact edited!</strong> You can keep
                                             editing alert contacts.
                                         </div>
                                         <div id="editAlertContactExistsNotification"
                                             class="alert alert-danger no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-danger">Alert contact could not be saved!</strong> An
                                             alert contact with similar data exists.
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Save Changes</button>
                         </div>
                     </form>
                 </div>
                 {{-- end --}}



                 <div id="shareMonitorWidgets" class="modal hide fade" tabindex="-1" data-width="60%">
                     <div class="modal-header"> </div>
                     <form id="shareMonitorForm" class="form-horizontal" method="POST" action="">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span6 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-rss"></i> Widgets</h4>
                                             </div>
                                             <div class="widget-body">
                                                 <div class="row-fluid">
                                                     <div class="span12">
                                                         <fieldset>
                                                             <ul class="form-list label-left list-bordered dotted">
                                                                 <li class="control-group userRSSLinkWrapper">
                                                                     <div class='enableWidgetWrapper hide'>
                                                                         <button type="submit"
                                                                             class="btn btn-blue enableWidgetButton">Enable
                                                                             Widget</button>
                                                                         <br><br>
                                                                         <span class='f14'>Please click to enable widgets
                                                                             for
                                                                             this monitor.</span>
                                                                     </div>
                                                                     <div class='disableWidgetWrapper hide'>
                                                                         <button type="submit"
                                                                             class="btn btn-red disableWidgetButton">Disable
                                                                             Widget</button>
                                                                     </div>
                                                                 </li>
                                                             </ul>
                                                         </fieldset>
                                                     </div>
                                                 </div>
                                                 <div class="row-fluid widgetGenerationWrapper hide">
                                                     <div class="span12 form-dark">
                                                         <fieldset>
                                                             <ul class="form-list label-left list-bordered dotted">
                                                                 <li class="section-form">
                                                                     <h4 class="test">Widget Generation Tool
                                                                     </h4>
                                                                 </li>

                                                                 <li class="control-group">
                                                                     <label for="newMonitorWidgetType"
                                                                         class="control-label">Widget Type <span
                                                                             class="required">*</span></label>
                                                                     <div class="controls">
                                                                         <select id="newMonitorWidgetType"
                                                                             class="selecttwo span8"
                                                                             name="newMonitorWidgetType"
                                                                             style="float:none;">
                                                                             <option selected="selected" value="0">Please
                                                                                 Select</option>
                                                                             <option value="1">Type1 - Detailed</option>
                                                                             <option value="2">Type2 - Summary</option>
                                                                         </select>
                                                                     </div>
                                                                 </li>

                                                                 <li class="control-group widgetColorStep hide">
                                                                     <label for="newMonitorWidgetColor"
                                                                         class="control-label">Widget Color <span
                                                                             class="required">*</span></label>
                                                                     <div class="controls">
                                                                         <select id="newMonitorWidgetColor"
                                                                             class="selecttwo span8"
                                                                             name="newMonitorWidgetColor"
                                                                             style="float:none;">
                                                                             <option selected="selected" value="0">Please
                                                                                 Select</option>
                                                                             <option value="1">Black</option>
                                                                             <option value="2">Green</option>
                                                                         </select>
                                                                     </div>
                                                                 </li>

                                                                 <li class="control-group widgetPeriodStep hide">
                                                                     <label for="newMonitorWidgetPeriod"
                                                                         class="control-label">Widget Period <span
                                                                             class="required">*</span></label>
                                                                     <div class="controls">
                                                                         <select id="newMonitorWidgetPeriod"
                                                                             class="selecttwo span8"
                                                                             name="newMonitorWidgetPeriod"
                                                                             style="float:none;">
                                                                             <option selected="selected" value="0">Please
                                                                                 Select</option>
                                                                             <option value="1">1 Day</option>
                                                                             <option value="7">7 Days</option>
                                                                             <option value="30">30 Days</option>
                                                                         </select>
                                                                     </div>
                                                                 </li>

                                                             </ul>
                                                         </fieldset>
                                                     </div>
                                                 </div>
                                                 <div class="row-fluid widgetResultWrapper hide">
                                                     <div class="span12 form-dark">
                                                         <fieldset>
                                                             <ul class="form-list label-left list-bordered dotted">
                                                                 <li class="section-form">
                                                                     <h4 class="test">Generated Widget</h4>
                                                                 </li>
                                                                 <li class="widgetResult">
                                                                     <img class='widgetImage' />
                                                                     <br>
                                                                     <h5>UptimeRobot Widget URL:
                                                                         <a href="" class="widgetLink"
                                                                             target='_blank'></a>
                                                                     </h5>
                                                                 </li>
                                                             </ul>
                                                         </fieldset>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="widget-footer">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                         </div>
                     </form>
                 </div>
                 <div id="debugMonitor" class="modal hide fade" tabindex="-1" data-width="80%">
                     <div class="modal-header"></div>
                     <form id="debugMonitorForm" class="form-horizontal" method="POST" action="">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span7 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4 class="debugMonitorPanelTitle"><i
                                                         class="fontello-icon-briefcase"></i> Debug Monitor (<label
                                                         class="debugMonitorType label"></label><label
                                                         class="debugMonitorName"></label><a href=""
                                                         class="debugMonitorUrl" target="_blank"><i
                                                             class="item-icon fontello-icon-link-1"
                                                             style="color:#999999; font-size: 0.6em;"></i></a>)</h4>
                                                 <label class="debugMonitorID"></label>
                                                 <label class="debugMonitorIP"></label>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span6 form-dark"
                                                             style="padding-right: 2.5%; border-right: 1px solid #ccc;">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4>Current Configuration</h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="debugMonitorCurrentServer"
                                                                             class="control-label span6">Server
                                                                             :</label>
                                                                         <div class="controls">
                                                                             <select id="debugMonitorCurrentServer"
                                                                                 class="selecttwo span10 debugMonitorCurrentServer"
                                                                                 name="debugMonitorCurrentServer">
                                                                             </select>
                                                                             <a href="javascript:"
                                                                                 class="copyDebugServerBtn"
                                                                                 data-copy-element="#debugMonitorCurrentServer">Copy</a>
                                                                         </div>
                                                                     </li>
                                                                     <li
                                                                         class="control-group debugMonitorRequestTypeBlock">
                                                                         <label for="debugMonitorCurrentRequestType"
                                                                             class="control-label span6">Request Type
                                                                             :</label>
                                                                         <div class="controls">
                                                                             <select id="debugMonitorCurrentRequestType"
                                                                                 class="selecttwo span10"
                                                                                 name="debugMonitorCurrentRequestType">
                                                                                 <option value="HEAD">HEAD</option>
                                                                                 <option value="GET">GET</option>
                                                                             </select>
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group debugMonitorUserAgentBlock">
                                                                         <label for="debugMonitorCurrentUserAgent"
                                                                             class="control-label span6">Custom User
                                                                             Agent
                                                                             :</label>
                                                                         <div class="controls">
                                                                             <input id="debugMonitorCurrentUserAgent"
                                                                                 class="span6 validateIgnore" type="text"
                                                                                 value=""
                                                                                 name="debugMonitorCurrentUserAgent">
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <div class="span4">
                                                                             <label for="debugMonitorCurrentIsTrace"
                                                                                 class="control-label span4">TRACE</label>
                                                                             <input id="debugMonitorCurrentIsTrace"
                                                                                 class="checkbox" type="checkbox"
                                                                                 value="1"
                                                                                 name="debugMonitorCurrentIsTrace">
                                                                         </div>
                                                                         <div class="span4">
                                                                             <label for="debugMonitorCurrentIsPing"
                                                                                 class="control-label span4">PING</label>
                                                                             <input id="debugMonitorCurrentIsPing"
                                                                                 class="checkbox" type="checkbox"
                                                                                 value="1" name="debugMonitorCurrentIsPing">
                                                                         </div>
                                                                         <div class="span4 debugMonitorIsHttpBlock">
                                                                             <label for="debugMonitorCurrentIsHttp"
                                                                                 class="control-label span4">HTTP</label>
                                                                             <input id="debugMonitorCurrentIsHttp"
                                                                                 class="checkbox" type="checkbox"
                                                                                 value="1" name="debugMonitorCurrentIsHttp">
                                                                         </div>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <button type="submit"
                                                                             class="btn btn-primary debugCurrentSubmit">Debug</button>
                                                                     </li>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                         <div class="span6 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4>Custom Configuration</h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="debugMonitorCustomServer"
                                                                             class="control-label span6">Server
                                                                             :</label>
                                                                         <div class="controls">
                                                                             <select id="debugMonitorCustomServer"
                                                                                 class="selecttwo span10 debugMonitorCustomServer"
                                                                                 name="debugMonitorCustomServer">
                                                                                 <option selected="selected" value="0">
                                                                                     Please
                                                                                     Select</option>
                                                                             </select>
                                                                             <a href="javascript:"
                                                                                 class="copyDebugServerBtn"
                                                                                 data-copy-element="#debugMonitorCustomServer">Copy</a>
                                                                         </div>
                                                                     </li>
                                                                     <li
                                                                         class="control-group debugMonitorRequestTypeBlock">
                                                                         <label for="debugMonitorCustomRequestType"
                                                                             class="control-label span6">Request Type
                                                                             :</label>
                                                                         <div class="controls">
                                                                             <select id="debugMonitorCustomRequestType"
                                                                                 class="selecttwo span10"
                                                                                 name="debugMonitorCustomRequestType">
                                                                                 <option value="HEAD">HEAD</option>
                                                                                 <option value="GET">GET</option>
                                                                             </select>
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <div class="span4">
                                                                             <label for="debugMonitorCustomIsTrace"
                                                                                 class="control-label span4">TRACE</label>
                                                                             <input id="debugMonitorCustomIsTrace"
                                                                                 class="checkbox" type="checkbox"
                                                                                 value="1" name="debugMonitorCustomIsTrace">
                                                                         </div>
                                                                         <div class="span4">
                                                                             <label for="debugMonitorCustomIsPing"
                                                                                 class="control-label span4">PING</label>
                                                                             <input id="debugMonitorCustomIsPing"
                                                                                 class="checkbox" type="checkbox"
                                                                                 value="1" name="debugMonitorCustomIsPing">
                                                                         </div>
                                                                         <div class="span4 debugMonitorIsHttpBlock">
                                                                             <label for="debugMonitorCustomIsHttp"
                                                                                 class="control-label span4">HTTP</label>
                                                                             <input id="debugMonitorCustomIsHttp"
                                                                                 class="checkbox" type="checkbox"
                                                                                 value="1" name="debugMonitorCustomIsHttp">
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label style="color: red;"
                                                                             class="customDebugError hide">Please
                                                                             select
                                                                             a
                                                                             debug server.</label>
                                                                         <button type="submit"
                                                                             class="btn btn-primary debugCustomSubmit">Debug</button>
                                                                     </li>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                     <div class="row-fluid debugResultMainBlock">
                                                         <div class="span6 form-dark debugResultCurrentContainer hide">
                                                             <div class="debugResultBlock">
                                                                 <div class="debugResultTitles">
                                                                     <ul class="nav nav-pills nav-sm">
                                                                         <li class="active"><a href="javascript:"
                                                                                 data-resulttype="ping">Ping</a></li>
                                                                         <li class="portResBlockBtn"><a href="javascript:"
                                                                                 data-resulttype="port">Port</a></li>
                                                                         <li><a href="javascript:"
                                                                                 data-resulttype="tracert">Tracert</a>
                                                                         </li>
                                                                         <li class="headerResBlockBtn"><a
                                                                                 href="javascript:"
                                                                                 data-resulttype="headerResBlock">Header</a>
                                                                         </li>
                                                                         <li class="httpResBtn"><a href="javascript:"
                                                                                 data-resulttype="http">Http</a></li>
                                                                     </ul>
                                                                 </div>
                                                                 <div class="debugResultTexts">
                                                                     <ul class="debugResultTextsContainer">
                                                                         <li class="ping active">
                                                                             <span><strong>Target:</strong> </span><span
                                                                                 class="target"></span><br>
                                                                             <span><strong>Total Duration:
                                                                                 </strong></span><span
                                                                                 class="totalduration"></span><br>
                                                                             <span><strong>Result:</strong> </span><span
                                                                                 class="stat"></span>
                                                                         </li>
                                                                         <li class="port">
                                                                             <span><strong>Total Duration:
                                                                                 </strong></span><span
                                                                                 class="totalduration"></span><br>
                                                                             <span><strong>Result:</strong> </span><span
                                                                                 class="stat"></span>
                                                                         </li>
                                                                         <li class="tracert">
                                                                             <span><strong>Tracing route to</strong>
                                                                             </span><span
                                                                                 class="target"></span><br><br>
                                                                             <span class="route"></span><br>
                                                                         </li>
                                                                         <li class="headerResBlock">
                                                                         </li>
                                                                         <li class="http"></li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="span6 form-dark debugResultCustomContainer hide">
                                                             <div class="debugResultBlock">
                                                                 <div class="debugResultTitles">
                                                                     <ul class="nav nav-pills nav-sm">
                                                                         <li class="active"><a href="javascript:"
                                                                                 data-resulttype="ping">Ping</a></li>
                                                                         <li class="portResBlockBtn"><a href="javascript:"
                                                                                 data-resulttype="port">Port</a></li>
                                                                         <li><a href="javascript:"
                                                                                 data-resulttype="tracert">Tracert</a>
                                                                         </li>
                                                                         <li class="headerResBlockBtn"><a
                                                                                 href="javascript:"
                                                                                 data-resulttype="headerResBlock">Header</a>
                                                                         </li>
                                                                         <li class="httpResBtn"><a href="javascript:"
                                                                                 data-resulttype="http">Http</a></li>
                                                                     </ul>
                                                                 </div>
                                                                 <div class="debugResultTexts">
                                                                     <ul class="debugResultTextsContainer">
                                                                         <li class="ping active">
                                                                             <span><strong>Target:</strong> </span><span
                                                                                 class="target"></span><br>
                                                                             <span><strong>Total Duration:
                                                                                 </strong></span><span
                                                                                 class="totalduration"></span><br>
                                                                             <span><strong>Result:</strong> </span><span
                                                                                 class="stat"></span>
                                                                         </li>
                                                                         <li class="port">
                                                                             <span><strong>Total Duration:
                                                                                 </strong></span><span
                                                                                 class="totalduration"></span><br>
                                                                             <span><strong>Result:</strong> </span><span
                                                                                 class="stat"></span>
                                                                         </li>
                                                                         <li class="tracert">
                                                                             <span><strong>Tracing route to</strong>
                                                                             </span><span
                                                                                 class="target"></span><br><br>
                                                                             <span class="route"></span><br>
                                                                         </li>
                                                                         <li class="headerResBlock">
                                                                         </li>
                                                                         <li class="http"></li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="debugMonitorSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Monitor debugged!</strong>
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                         </div>
                     </form>
                 </div>
                 <div id="sessionWarning" class="modal hide fade" tabindex="-1" data-width="35%" data-keyboard="false"
                     data-backdrop="static">
                     <div class="modal-header"> </div>
                     <div class="modal-body">
                         <div class="tab-pane padding-bottom30 active fade in">
                             <div class="row-fluid">
                                 <div class="spa12 grider">
                                     <div class="alert alert-warning no-margin">
                                         <strong class="alert-warning">Warning!</strong> The session has expired. Please
                                         <a href="/login" style="color:#c09853; text-decoration:underline;">click
                                             here</a> to login again.
                                     </div>
                                 </div>

                             </div>

                         </div>
                     </div>
                     <div class="modal-footer">
                     </div>
                 </div>
                 <div id="intervalUpgrade" class="modal hide fade" tabindex="-1" data-width="35%" data-keyboard="false"
                     data-backdrop="static">
                     <div class="modal-header"> </div>
                     <div class="modal-body">
                         <div class="tab-pane active fade in">
                             <div class="row-fluid">
                                 <div class="spa12 grider">
                                     <div class="alert alert-info no-margin">
                                         You can set 5 minutes as the lowest monitoring interval in the free plan. Upgrade
                                         to PRO plan and be notified 5x faster!
                                     </div>
                                 </div>

                             </div>

                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" data-dismiss="modal" class="btn">Close</button>
                         <button type="submit" class="btn btn-primary upgradeProAccount" data-toggle="modal"
                             data-target="#upgradeAccount" onclick="$('#intervalUpgrade').modal('hide');">Upgrade</button>
                     </div>
                 </div>
                 <div id="bulkActions" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form id="bulkActionsForm" class="form-horizontal" method="POST"
                         action="inc/dml/monitorDML.php?action=bulkAction">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Bulk Actions</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Action Details</h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="bulkActionType"
                                                                             class="control-label">I
                                                                             want to
                                                                             <span class="required">*</span>
                                                                         </label>
                                                                         <div class="controls">
                                                                             <select id="bulkActionType"
                                                                                 class="selecttwo span10"
                                                                                 name="bulkActionType">
                                                                                 <option selected="selected"
                                                                                     data-approvetext="-" value="0">
                                                                                     Please
                                                                                     Select</option>
                                                                                 <option value="1"
                                                                                     data-approvetext="PAUSE MONITORS">
                                                                                     Pause
                                                                                     Monitors</option>
                                                                                 <option value="2"
                                                                                     data-approvetext="START MONITORS">
                                                                                     Start
                                                                                     Monitors</option>
                                                                                 <option value="6"
                                                                                     data-approvetext="RESET MONITORS">
                                                                                     Reset
                                                                                     Monitors</option>
                                                                                 <option value="3"
                                                                                     data-approvetext="DELETE MONITORS">
                                                                                     Delete Monitors</option>
                                                                                 <option value="4"
                                                                                     data-approvetext="CHANGE INTERVAL">
                                                                                     Change Intervals Of Monitors
                                                                                 </option>
                                                                                 <option value="5"
                                                                                     data-approvetext="CHANGE ALERT CONTACTS">
                                                                                     Change Alert Contacts Of Monitors
                                                                                 </option>
                                                                                 <option value="9"
                                                                                     data-approvetext="CHANGE TIMEOUT">
                                                                                     Change
                                                                                     Timeouts Of Monitors</option>
                                                                                 <option value="7" disabled>Change SSL
                                                                                     Settings Of Monitors (Pro Plan)
                                                                                 </option>
                                                                                 <option value="8" disabled>Add
                                                                                     Maintenance
                                                                                     Window To Monitors (Pro Plan)
                                                                                 </option>
                                                                             </select>
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label for="bulkType"
                                                                             class="control-label">Applies
                                                                             to <span
                                                                                 class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <select id="bulkType" class="selecttwo span10"
                                                                                 name="bulkType" style="float:none;">
                                                                                 <option selected="selected" value="0">
                                                                                     Please
                                                                                     Select</option>
                                                                                 <option value="1">For all the monitors
                                                                                 </option>
                                                                                 <option value="2">For selected monitors
                                                                                 </option>
                                                                             </select>
                                                                         </div>
                                                                     </li>
                                                                     <li id="bulkActionMonitorSelect"
                                                                         class="control-group hide">
                                                                         <label for="bulkActionMonitorList"
                                                                             class="control-label">Monitors</label>
                                                                         <div class="controls">
                                                                             <input type="hidden" id="bulkActionMonitorList"
                                                                                 multiple="multiple"
                                                                                 class="span10" />
                                                                         </div>
                                                                     </li>
                                                                     <li id="bulkEditSelectedMonitorsList"
                                                                         class="control-group hide">
                                                                         <select id="bulkEditSelectedMonitors"
                                                                             name="bulkEditSelectedMonitors[]"
                                                                             multiple="multiple">
                                                                             <option value="0">0</option>
                                                                         </select>
                                                                     </li>

                                                                     <div class="hide"
                                                                         id="bulkActionChangeIntervalsWrapper">
                                                                         <li class="control-group">
                                                                             <label for="bulkActionInterval"
                                                                                 class="control-label">Monitoring
                                                                                 Interval
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider newEditMonitorSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">every
                                                                                     <b id="bulkActionIntervalDisplay">1</b>
                                                                                     <span
                                                                                         class="intervalMinHourText">minutes</span></span>
                                                                                 <input type="text" id="bulkActionInterval"
                                                                                     name="bulkActionInterval" value="300"
                                                                                     class="hide">
                                                                             </div>
                                                                         </li>
                                                                     </div>
                                                                     <div class="hide"
                                                                         id="bulkActionSSLSettingsWrapper">
                                                                         <li class="section-form">
                                                                             <h4 class="test">SSL Settings
                                                                             </h4>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="bulkActionIgnoreSSLErrors"
                                                                                 class="control-label">Ignore SSL
                                                                                 errors
                                                                             </label>
                                                                             <div class="controls">
                                                                                 <input
                                                                                     id="bulkActionIgnoreSSLErrorsEnabled"
                                                                                     class="leftFloat hide" type="hidden"
                                                                                     name="bulkActionIgnoreSSLErrorsEnabled"
                                                                                     value="1" disabled="disabled">
                                                                                 <input id="bulkActionIgnoreSSLErrors"
                                                                                     class="leftFloat hide" type="checkbox"
                                                                                     name="bulkActionIgnoreSSLErrors"
                                                                                     value="1" disabled="disabled"> <a
                                                                                     class="enableBulkIgnoreSSLErrorsEditing">(Click
                                                                                     to enable for editing.)</a> <a
                                                                                     class="disableBulkIgnoreSSLErrorsEditing hide">(Click
                                                                                     to disable for editing.)</a>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="bulkActionSSLCheckDisableStatus"
                                                                                 class="control-label">Disable SSL
                                                                                 expiry
                                                                                 reminders </label>
                                                                             <div class="controls">
                                                                                 <input
                                                                                     id="bulkActionSSLCheckDisableStatusEnabled"
                                                                                     class="leftFloat hide" type="hidden"
                                                                                     name="bulkActionSSLCheckDisableStatusEnabled"
                                                                                     value="1" disabled="disabled">
                                                                                 <input id="bulkActionSSLCheckDisableStatus"
                                                                                     class="leftFloat hide" type="checkbox"
                                                                                     name="bulkActionSSLCheckDisableStatus"
                                                                                     value="1" disabled="disabled"> <a
                                                                                     class="enableBulkSSLCheckDisableStatusEditing">(Click
                                                                                     to enable for editing.)</a> <a
                                                                                     class="disableBulkSSLCheckDisableStatusEditing hide">(Click
                                                                                     to disable for editing.)</a>
                                                                             </div>
                                                                         </li>
                                                                     </div>
                                                                     <div class="hide"
                                                                         id="bulkActionAlertContactsWrapper">
                                                                         <br />
                                                                         <input type="hidden" name="alertContactsInputBulk"
                                                                             class="alertContactsInputBulk" />
                                                                         <div id="bulkActionAlertContacts"
                                                                             class="alertContactsContainerBulk">
                                                                         </div>
                                                                         <input type="hidden"
                                                                             class="getAlertContactsEditOrListDetector"
                                                                             value="0" />
                                                                     </div>
                                                                     <div class="hide"
                                                                         id="bulkActionChangeTimeoutsWrapper">
                                                                         <li class="control-group">
                                                                             <label for="bulkActionTimeout"
                                                                                 class="control-label">Monitoring
                                                                                 Timeout
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <div
                                                                                     class="noUiSlider timeoutSlider span6">
                                                                                 </div>
                                                                                 <span class="help-inline span5">in <b
                                                                                         id="bulkActionTimeoutDisplay"></b>
                                                                                     <span class="timeoutInText"><b>30</b>
                                                                                         seconds</span></span>
                                                                                 <input type="text" id="bulkActionTimeout"
                                                                                     name="bulkActionTimeout"
                                                                                     class="monitorTimeout hide" value="30"
                                                                                     class="hide">
                                                                             </div>
                                                                         </li>
                                                                     </div>
                                                                     <div class="hide"
                                                                         id="bulkAddMaintenanceWindowWrapper">
                                                                     </div>
                                                                     <input type="hidden" name="mWindowsInputBulk"
                                                                         class="mWindowsInputBulk" />
                                                                 </ul>
                                                                 <ul class="form-list label-left list-bordered dotted hide"
                                                                     id="bulkActionApproveTextWrapper">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Action Approval
                                                                         </h4>
                                                                     </li>

                                                                     <div>
                                                                         <li class="control-group">
                                                                             <div class="alert alert-info no-margin">
                                                                                 Please write <span
                                                                                     id="bulkActionApproveTextInfo"
                                                                                     class="bold"></span> to the
                                                                                 field below to approve the action.
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="bulkActionApproveText"
                                                                                 class="control-label">Approval Text
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="bulkActionApproveText"
                                                                                     class="span6" type="text"
                                                                                     value="" name="bulkActionApproveText">
                                                                                 <input id="bulkActionApproveTextHidden"
                                                                                     class="span6" type="hidden"
                                                                                     value=""
                                                                                     name="bulkActionApproveTextHidden">
                                                                             </div>
                                                                         </li>
                                                                     </div>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="bulkActionSuccessNotification"
                                             class="alert alert-success no-margin hide">
                                             <strong class="alert-success">Bulk Action Completed!</strong> You can apply
                                             new actions (or <a href="#no" onclick="window.location.reload();">refresh the
                                                 page</a> to see an updated view).
                                         </div>
                                         <div id="bulkActionErrorNotification" class="alert alert-error no-margin hide">
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Complete Action</button>
                         </div>
                     </form>
                 </div>
                 <div id="bulkImportUpload" class="modal hide fade in" tabindex="-1" data-width="70%"
                     data-backdrop="static" data-keyboard="false">
                     <div class="modal-header"> </div>
                     <form id="bulkImportActionForm" class="form-horizontal" method="POST"
                         action="inc/dml/monitorDML.php?action=validateBulkImportUpload">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div id="bulkImportUploadWidget" class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-upload"></i> Import Monitors</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left">
                                                                     <li>
                                                                         <p class="alert alert-info"
                                                                             style="margin: 0 0 8px 0;">This is a PRO
                                                                             feature. If you need to import large amount of
                                                                             monitors, upgrade to PRO plan first.</p>
                                                                     </li>
                                                                     <li style="border-bottom:none;">
                                                                         <p>
                                                                             Using this dialog, you can import any number of
                                                                             monitors (that fit to your accounts limit).
                                                                             Below is a guide on how to create a valid
                                                                             import file. After the import, monitors will be
                                                                             started automatically.
                                                                         </p>
                                                                     </li>
                                                                     <li class="section-form">
                                                                         <h3 class="test">Creating import file
                                                                         </h3>
                                                                     </li>
                                                                     <li>
                                                                         <ol>
                                                                             <li><a
                                                                                     href="downloads/TemplateBulkImportFile.csv">Download
                                                                                     file template</a></li>
                                                                             <li>Download <a
                                                                                     href="inc/dml/monitorDML.php?action=exportAlertContacts">your
                                                                                     alert contacts</a> (If you don't have
                                                                                 any alert contacts, go create them first!)
                                                                             </li>
                                                                             <li>Fill the template with your specific
                                                                                 monitor attributes (see below for
                                                                                 explanation)
                                                                             </li>
                                                                         </ol>
                                                                     </li>
                                                                 </ul>
                                                             </fieldset>
                                                             <fieldset>
                                                                 <ul class="form-list label-left">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Attributes</h4>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <ul>
                                                                             <li><strong>Type:</strong> Monitor type,
                                                                                 possible values <code>HTTP, Ping, Port,
                                                                                     Keyword</code></li>
                                                                             <li><strong>Friendly Name:</strong> name of
                                                                                 your monitor as it will be displayed in UI
                                                                                 and on Status pages</li>
                                                                             <li><strong>URL/IP:</strong> the monitored
                                                                                 resource
                                                                             </li>
                                                                             <li><strong>Interval:</strong> monitoring
                                                                                 interval, possible values
                                                                                 <code>1-1440</code>
                                                                             </li>
                                                                             <li><strong>Keyword type:</strong> for keyword
                                                                                 monitor polarity (alert when), possible
                                                                                 values: <code>1 (If exists) / 0
                                                                                     (If not
                                                                                     exists)</code></li>
                                                                             <li><strong>Keyword value:</strong> the
                                                                                 specific string value for keyword monitors,
                                                                                 keep empty otherwise</li>
                                                                             <li><strong>Port:</strong> the port number in
                                                                                 case of Port monitor, keep empty for
                                                                                 otherwise
                                                                             </li>
                                                                             <li>
                                                                                 <strong>Alert Contacts:</strong> where to
                                                                                 send notifications in case of an outage
                                                                                 <br />
                                                                                 <p class="alert alert-warning"
                                                                                     role="alert" style="margin: 10px 0;">We
                                                                                     strongly recommend attaching alert
                                                                                     contacts when importing monitors, if
                                                                                     you don't have alert contacts yet, add
                                                                                     them first.
                                                                                 </p>
                                                                                 <p>
                                                                                     Use the <a
                                                                                         href="inc/dml/monitorDML.php?action=exportAlertContacts">alert
                                                                                         contacts file</a> to prepare your
                                                                                     specific values for each monitor.
                                                                                     Format:
                                                                                     <code>{&lt;alertContactId&gt;;&lt;threshold&gt;;&lt;recurrence&gt;}</code>
                                                                                     &rarr; separate multiple contacts with
                                                                                     <code>|</code>. See explained threshold
                                                                                     and recurrence attributes at example
                                                                                     below.
                                                                                 </p>
                                                                                 <ul>
                                                                                     <li><strong>Threshold:</strong> the
                                                                                         number (in minutes) after when
                                                                                         outage is still active you want to
                                                                                         get notification, possible values:
                                                                                         <code>0-720</code>
                                                                                     </li>
                                                                                     <li><strong>Recurrence:</strong> get
                                                                                         notification every X minutes while
                                                                                         the outage lasts, possible values:
                                                                                         <code>0-60</code>
                                                                                     </li>
                                                                                 </ul>
                                                                             </li>
                                                                         </ul>
                                                                     </li>
                                                                 </ul>
                                                             </fieldset>
                                                             <fieldset>
                                                                 <ul class="form-list label-left">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Example (<a
                                                                                 href="downloads/ExampleBulkImportFile.csv">download
                                                                                 file</a>)</h4>
                                                                     </li>
                                                                     <li><img
                                                                             src="userside/assets/img/monitor_import_example.png" />
                                                                     </li>
                                                                 </ul>
                                                             </fieldset>
                                                             <fieldset>
                                                                 <ul
                                                                     class="form-list label-left list-bordered dotted form-inline">
                                                                     <li class="section-form">
                                                                         <h3 class="test">Upload file</h3>
                                                                     </li>
                                                                     <li class="form-group">
                                                                         <label for="newMonitorsBulkFile"
                                                                             class="control-label"
                                                                             style="width: 170px;">File
                                                                             (can be .csv, max 10MB)</label>
                                                                         <div class="controls pull-right">
                                                                             <input id="newMonitorsBulkFile" type="file"
                                                                                 name="newMonitorsBulkFile" accept=".csv"
                                                                                 required>
                                                                         </div>
                                                                     </li>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="spinner">
                                             <div class="bounce1"></div>
                                             <div class="bounce2"></div>
                                             <div class="bounce3"></div>
                                         </div>
                                         <div id="bulkImportResultsWidget" class="widget widget-box hide">
                                             <div class="tabbable tabs-top">
                                                 <ul class="nav nav-tabs">
                                                     <li><a id="validatedMonitorsTabLink" class="hide"
                                                             href="#validatedMonitors" data-toggle="tab"><i
                                                                 class="fontello-icon-ok-circle"></i> Validated
                                                             Monitors
                                                             <span></span></a></li>
                                                     <li><a id="failedMonitorsTabLink" class="hide"
                                                             href="#failedMonitors" data-toggle="tab"><i
                                                                 class="fontello-icon-attention"></i> Failed
                                                             Monitors <span></span></a></li>
                                                 </ul>
                                                 <div class="tab-content">
                                                     <div class="tab-pane" id="validatedMonitors">
                                                         <div class="dataTables_scroll">
                                                             <div class="dataTables_scrollHead"
                                                                 style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                 <div class="dataTables_scrollHeadInner">
                                                                     <table id="bulkImportSuccessResults"
                                                                         class="table boo-table table-bordered table-condensed table-hover"
                                                                         style="background: url('../../../userside/assets/img/table/loading-background.png')">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th scope="col">Friendly Name</th>
                                                                                 <th scope="col">Type</th>
                                                                                 <th scope="col">Interval</th>
                                                                                 <th scope="col">URL/IP</th>
                                                                                 <th scope="col">Keyword Type</th>
                                                                                 <th scope="col">Keyword Value</th>
                                                                                 <th scope="col">Port</th>
                                                                                 <th scope="col">Alert Contact</th>
                                                                             </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                         </tbody>
                                                                     </table>
                                                                     <div
                                                                         style="position: absolute; top: 0px; left: 0px; width: 1px; height: 0px;">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="tab-pane" id="failedMonitors">
                                                         <div class="dataTables_scroll">
                                                             <div class="dataTables_scrollHead"
                                                                 style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                 <div class="dataTables_scrollHeadInner">
                                                                     <table id="bulkImportErrorResults"
                                                                         class="table boo-table table-bordered table-condensed table-hover"
                                                                         style="background: url('userside/assets/img/table/loading-background.png')">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th scope="col">Friendly Name</th>
                                                                                 <th scope="col">Type</th>
                                                                                 <th scope="col">Interval</th>
                                                                                 <th scope="col">URL/IP</th>
                                                                                 <th scope="col">Keyword Type</th>
                                                                                 <th scope="col">Keyword Value</th>
                                                                                 <th scope="col">Port</th>
                                                                                 <th scope="col">Alert Contact</th>
                                                                                 <th scope="col">Error</th>
                                                                             </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                         </tbody>
                                                                     </table>
                                                                     <div
                                                                         style="position: absolute; top: 0px; left: 0px; width: 1px; height: 0px;">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                             </div>

                                         </div>
                                         <div id="bulkImportSuccessNotification"
                                             class="alert alert-success no-margin hide">
                                             <strong class="alert-success">Bulk Import Completed!</strong>
                                             <a href="#no" onclick="window.location.reload();">Refresh the
                                                 page</a> to see an updated view.
                                         </div>
                                         <div id="bulkImportErrorNotification" class="alert alert-error no-margin hide">
                                             <ul class="bulkImportErrorList"></ul>
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button id="clearBulkImportButton" type="button" data-dismiss="modal"
                                 class="btn">Close</button>
                         </div>
                     </form>
                 </div>
                 <div id="upgradeAccount" class="modal hide fade" tabindex="-1" data-width="75%">
                     <form id="newPaymentForm" method="POST" action="">
                         <div class="modal-body">
                             <div class="container-fluid">
                                 <div class="row">
                                     <div class="col-md-4 hidden-sm hidden-xs">

                                         <h3 class="text-center">What you get with PRO plan?</h3>
                                         <div style="padding: 20px; font-size: 11px;" class="upsell-reasons">
                                             <div class="row" style="margin-bottom: 15px">
                                                 <div class="col-md-3 text-center">
                                                     <img src="userside/assets/img/interval-icon.svg" alt="status page icon"
                                                         width="50" />
                                                 </div>
                                                 <div class="col-md-9">
                                                     <h5><s>5 min.</s> 1 min. monitoring interval</h5>
                                                     Get notified about downtimes 5x faster.
                                                 </div>
                                             </div>
                                             <hr />
                                             <div class="row" style="margin-bottom: 15px">
                                                 <div class="col-md-3 text-center">
                                                     <img src="{{ asset('userside/assets/img/statuspage-icon.svg') }}"
                                                         alt="status page icon" width="50" />
                                                 </div>
                                                 <div class="col-md-9">
                                                     <h5>Status page customizations</h5>
                                                     Customize, link your domain and notify customers.
                                                 </div>
                                             </div>
                                             <hr />
                                             <div class="row" style="margin-bottom: 15px">
                                                 <div class="col-md-3 text-center">
                                                     <img src="{{ asset('userside/assets/img/ssl-monitoring.svg') }}"
                                                         alt="ssl icon" width="50" />
                                                 </div>
                                                 <div class="col-md-9">
                                                     <h5>SSL certificate monitoring</h5>
                                                     Monitor SSL errors and certificate expiry dates.
                                                 </div>
                                             </div>
                                             <hr />
                                             <div class="row" style="margin-bottom: 15px">
                                                 <div class="col-md-3 text-center">
                                                     <img src="{{ asset('userside/assets/img/cron-job-monitoring.svg') }}"
                                                         alt="cron job icon" width="50" />
                                                 </div>
                                                 <div class="col-md-9">
                                                     <h5>Background job monitoring</h5>
                                                     Monitor recurring jobs or intranet devices.
                                                 </div>
                                             </div>
                                             <hr />
                                             <div class="row" style="margin-bottom: 15px">
                                                 <div class="col-md-3 text-center">
                                                     <img src="{{ asset('userside/assets/img/more-icon.svg') }}"
                                                         alt="ssl icon" width="50" />
                                                 </div>
                                                 <div class="col-md-9">
                                                     <h5>...and more!</h5>
                                                     Custom HTTP headers &amp; statuses, maintenance windows, and 24 months
                                                     log retention.
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div data-tooltip="">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-8 col-sm-12" style="padding-top: 20px;">
                                         <input type="hidden" id="productType" name="productType" value="" />
                                         <input type="hidden" id="userId" name="userId" value="1612895" />
                                         <div class="tab-pane active fade in">
                                             <div class="row-fluid">
                                                 <div class="span12 grider">
                                                     <div id="paymentFormStep1Wrapper">
                                                         <div class="widget well">
                                                             <div class="widget-header">
                                                                 <h4 id="upgradeFormTitle"><i
                                                                         class="fontello-icon-edit"></i> The Current Plan
                                                                 </h4>
                                                             </div>
                                                             <div class="widget-content">
                                                                 <div class="widget-body">
                                                                     <p id="upgradeAccountCurrentDetails">You are using Free
                                                                         Plan (50 monitors, 5 minute intervals).</p>
                                                                     <p id="upgradeSMSCurrentDetails"
                                                                         class="hide">You have 0 SMS or
                                                                         voice-calls left.</p>
                                                                 </div>
                                                             </div>
                                                         </div>

                                                         <div id="proPlanMonitorLimitWrapper" class="widget well ">
                                                             <div class="widget-header">
                                                                 <h4>Select your Pro Plan</h4>
                                                             </div>
                                                             <div class="widget-content">
                                                                 <div class="widget-body">
                                                                     <div class="row-fluid">
                                                                         <div class="span12 form-dark">
                                                                             <fieldset>
                                                                                 <ul class="form-list label-left list-bordered dotted form-horizontal"
                                                                                     style="margin-bottom: 0; border-bottom: 1px dotted #bec2c4;">

                                                                                     <li class="control-group">
                                                                                         <label for="proPlanMonitorLimit"
                                                                                             class="control-label">Number
                                                                                             of
                                                                                             monitors</label>
                                                                                         <div class="controls">
                                                                                             <select
                                                                                                 id="proPlanMonitorLimit"
                                                                                                 class="span4"
                                                                                                 name="proPlanMonitorLimit"
                                                                                                 style="height:auto; font-size:16px; background:#FFF; color:#333; padding:0; margin:0; min-width:80px;">
                                                                                                 <option
                                                                                                     data-addedvalue1="20"
                                                                                                     data-annualmonthlyprice="7"
                                                                                                     data-annualprice="84.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="8.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="50 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro50"
                                                                                                     value="91">
                                                                                                     50
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="30"
                                                                                                     data-annualmonthlyprice="21"
                                                                                                     data-annualprice="252.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="26.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="100 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro100"
                                                                                                     value="92">
                                                                                                     100
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="50"
                                                                                                     data-annualmonthlyprice="28"
                                                                                                     data-annualprice="336.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="34.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="200 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro200"
                                                                                                     value="93">
                                                                                                     200
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="100"
                                                                                                     data-annualmonthlyprice="62"
                                                                                                     data-annualprice="744.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="74.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="500 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro500"
                                                                                                     value="94">
                                                                                                     500
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="160"
                                                                                                     data-annualmonthlyprice="121"
                                                                                                     data-annualprice="1452.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="134.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="1,000 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro1000"
                                                                                                     value="95">
                                                                                                     1000
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="240"
                                                                                                     data-annualmonthlyprice="204"
                                                                                                     data-annualprice="2448.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="224.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="2,000 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro2000"
                                                                                                     value="96">
                                                                                                     2000
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="480"
                                                                                                     data-annualmonthlyprice="412"
                                                                                                     data-annualprice="4944.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="444.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="5,000 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro5000"
                                                                                                     value="97">
                                                                                                     5000
                                                                                                 </option>
                                                                                                 <option
                                                                                                     data-addedvalue1="900"
                                                                                                     data-annualmonthlyprice="828"
                                                                                                     data-annualprice="9936.00"
                                                                                                     data-feature1="1"
                                                                                                     data-monthlyprice="884.00"
                                                                                                     data-onceprice=""
                                                                                                     data-productname="10,000 Monitors (1-minute monitoring)"
                                                                                                     data-productsku="pro10000"
                                                                                                     value="98">
                                                                                                     10000
                                                                                                 </option>
                                                                                             </select> &nbsp;monitors
                                                                                         </div>
                                                                                     </li>

                                                                                     <li class="control-group">
                                                                                         <label for="proPlanSMSCredits"
                                                                                             class="control-label">SMS
                                                                                             or
                                                                                             Voice-calls</label>
                                                                                         <div class="controls">
                                                                                             <span
                                                                                                 class="pricingProSMS"></span>
                                                                                             <small>(doesn't renew but
                                                                                                 more
                                                                                                 messages (or calls) can
                                                                                                 be
                                                                                                 purchased
                                                                                                 anytime)</small>
                                                                                         </div>
                                                                                     </li>

                                                                                     </li>


                                                                                 </ul>
                                                                                 <div class="container-fluid"
                                                                                     style="border-top: 1px dotted #fff;">
                                                                                     <div class="row">
                                                                                         <div class="col-md-12 old-price-strike hidden"
                                                                                             style="margin-top: 15px;">
                                                                                             <span
                                                                                                 style="color:#FFF; background:#faa05a; padding:3px 5px; border-radius: 3px;">Special
                                                                                                 entry offer!</span>
                                                                                         </div>
                                                                                         <div
                                                                                             class="col-md-6 proPricingMonthlyAnnual">
                                                                                             <div>
                                                                                                 <h3 class="inline-block"
                                                                                                     style="margin: 0;">
                                                                                                     <s class="old-price-strike hidden"
                                                                                                         style="opacity: 0.5">$15</s>
                                                                                                     $
                                                                                                 </h3>
                                                                                                 <h3 class="inline-block pricingAnnualMonthlyPrice"
                                                                                                     style="margin:0;">
                                                                                                 </h3>
                                                                                                 <h4 class="inline-block"
                                                                                                     style="margin: 0;">
                                                                                                     / month
                                                                                                 </h4><br /> billed annually
                                                                                             </div>
                                                                                         </div>
                                                                                         <div
                                                                                             class="col-md-6 proPricingMonthlyAnnual">
                                                                                             <h3 class="inline-block"
                                                                                                 style="margin: 0; font-weight: normal;">
                                                                                                 <s class="old-price-strike hidden"
                                                                                                     style="opacity: 0.5">$18</s>
                                                                                                 $
                                                                                             </h3>
                                                                                             <h3 class="inline-block pricingMonthlyPrice annual-possible"
                                                                                                 style="margin:0; font-weight: normal;">
                                                                                             </h3>
                                                                                             <h4 class="inline-block"
                                                                                                 style="margin: 0; font-weight: normal;">
                                                                                                 / month</h4><br /> billed
                                                                                             monthly
                                                                                         </div>
                                                                                         <div class="col-md-12">
                                                                                             <div
                                                                                                 class="proPricingMonthly hide">
                                                                                                 <h3 class="inline-block"
                                                                                                     style="margin-bottom: 0;">
                                                                                                     $</h3>
                                                                                                 <h3 class="inline-block pricingMonthlyPrice"
                                                                                                     style="margin:-10px 0 0 0; line-height:20px;">
                                                                                                 </h3>
                                                                                                 <h4 class="inline-block"
                                                                                                     style="margin-bottom: 0;">
                                                                                                     / month</h4> (No annual
                                                                                                 billing option exists for
                                                                                                 this plan).
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </fieldset>

                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>

                                                         <div id="proSMSCreditsWrapper" class="widget well">
                                                             <div class="widget-header">
                                                                 <h4>Select the number of SMS (or voice-calls)</h4>
                                                             </div>
                                                             <div class="widget-content">
                                                                 <div class="widget-body">
                                                                     <div class="row-fluid">
                                                                         <div class="span12 form-dark">
                                                                             <fieldset>
                                                                                 <ul
                                                                                     class="form-list label-left list-bordered dotted form-horizontal">

                                                                                     <li class="control-group">
                                                                                         <label for="proSMSCredits"
                                                                                             class="control-label">Number
                                                                                             of
                                                                                             messages/calls</label>
                                                                                         <div class="controls">
                                                                                             <select id="proSMSCredits"
                                                                                                 class="span6"
                                                                                                 name="proSMSCredits"
                                                                                                 style="height:auto; font-size:inherit; background:#FFF; color:#333; padding:0; margin:0;">
                                                                                                 <option data-addedvalue1=""
                                                                                                     data-annualmonthlyprice="0"
                                                                                                     data-annualprice=""
                                                                                                     data-feature1=""
                                                                                                     data-monthlyprice=""
                                                                                                     data-onceprice="15.00"
                                                                                                     data-productname="100 SMS (or voice calls)"
                                                                                                     data-productsku="sms100"
                                                                                                     value="19">
                                                                                                     100
                                                                                                 </option>
                                                                                                 <option data-addedvalue1=""
                                                                                                     data-annualmonthlyprice="0"
                                                                                                     data-annualprice=""
                                                                                                     data-feature1=""
                                                                                                     data-monthlyprice=""
                                                                                                     data-onceprice="25.00"
                                                                                                     data-productname="200 SMS (or voice calls)"
                                                                                                     data-productsku="sms200"
                                                                                                     value="20">
                                                                                                     200
                                                                                                 </option>
                                                                                                 <option data-addedvalue1=""
                                                                                                     data-annualmonthlyprice="0"
                                                                                                     data-annualprice=""
                                                                                                     data-feature1=""
                                                                                                     data-monthlyprice=""
                                                                                                     data-onceprice="55.00"
                                                                                                     data-productname="500 SMS (or voice calls)"
                                                                                                     data-productsku="sms500"
                                                                                                     value="30">
                                                                                                     500
                                                                                                 </option>
                                                                                                 <option data-addedvalue1=""
                                                                                                     data-annualmonthlyprice="0"
                                                                                                     data-annualprice=""
                                                                                                     data-feature1=""
                                                                                                     data-monthlyprice=""
                                                                                                     data-onceprice="100.00"
                                                                                                     data-productname="1000 SMS (or voice calls)"
                                                                                                     data-productsku="sms1000"
                                                                                                     value="31">
                                                                                                     1000
                                                                                                 </option>
                                                                                             </select>
                                                                                         </div>
                                                                                     </li>

                                                                                     <li class="control-group">
                                                                                         <small>Note: 1 notification = 1
                                                                                             SMS
                                                                                             (or voice-call)</small>
                                                                                     </li>

                                                                                     <li class="control-group">
                                                                                         <div>
                                                                                             Pricing is
                                                                                             <h3 class="inline-block">
                                                                                                 $
                                                                                             </h3>
                                                                                             <h3 class="inline-block pricingOncePrice"
                                                                                                 style="margin:-10px 0 0 0; line-height:20px;">
                                                                                             </h3>
                                                                                             <h4 class="inline-block"
                                                                                                 style="margin-bottom: 0;">
                                                                                                 /one-time</h4>.
                                                                                         </div>
                                                                                     </li>

                                                                                 </ul>
                                                                             </fieldset>

                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>

                                                     </div>
                                                     <div id="paymentFormStep2StatusWrapper" class="hide">
                                                         <div class="widget well">
                                                             <div class="widget-header">
                                                                 <h4><i class="fontello-icon-ok-5"></i> Selected Plan
                                                                     <small style="color: #111; font-weight:normal;">(<a
                                                                             href="#no"
                                                                             class="showPaymentFormStep1 underlineLink text-color">edit</a>)</small>
                                                                 </h4>
                                                             </div>
                                                             <div class="widget-content" style="height:40px;">
                                                                 <div class="widget-body">
                                                                     <p>You have selected "<span
                                                                             class="selectedProduct">100</span> <span
                                                                             class="selectedProductInfo">monitors Pro
                                                                             Plan</span>".</p>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="paymentFormStep3StatusWrapper" class="hide">
                                                         <div class="widget well" style="">
                                                             <div class="widget-header">
                                                                 <h4><i class="fontello-icon-ok-5"></i> Payment Details
                                                                     <small style="color: #111; font-weight:normal;">(<a
                                                                             href="#no"
                                                                             class="showPaymentFormStep2 underlineLink text-color">edit</a>)</small>
                                                                 </h4>
                                                             </div>
                                                             <div class="widget-content" style="height:auto;">
                                                                 <div class="widget-body">
                                                                     <p>You will be charged
                                                                         <span id="pricingNoVATWrapper">
                                                                             $<span
                                                                                 class="pricingAnnualPrice"></span><span
                                                                                 class="pricingMonthlyPrice hide"></span><span
                                                                                 class="pricingOncePrice hide"></span>
                                                                             <span class="pricingPeriod">every
                                                                                 year</span>
                                                                             <span
                                                                                 class="pricingAnnualDeductionTinyInfo opaci75 hide"></span><span
                                                                                 class="pricingMonthlyDeductionTinyInfo opaci75 hide"></span>
                                                                         </span>
                                                                         <span id="pricingVATWrapper"
                                                                             class="hide">
                                                                             $<span
                                                                                 class="pricingVATAnnualPrice">0</span><span
                                                                                 class="pricingVATMonthlyPrice hide">0</span><span
                                                                                 class="pricingVATOncePrice hide">0</span>
                                                                             <span class="pricingPeriod">every
                                                                                 year</span>
                                                                             <span
                                                                                 class="pricingAnnualDeductionTinyInfo opaci75 hide"></span><span
                                                                                 class="pricingMonthlyDeductionTinyInfo opaci75 hide"></span>
                                                                             (including VAT).
                                                                         </span>
                                                                     </p>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="paymentFormStep4StatusWrapper" class="hide">
                                                         <div class="widget well" style="">
                                                             <div class="widget-header">
                                                                 <h4><i class="fontello-icon-ok-5"></i> Billing Details
                                                                     <small style="color: #111; font-weight:normal;">(<a
                                                                             href="#no"
                                                                             class="showPaymentFormStep3 underlineLink text-color">edit</a>)</small>
                                                                 </h4>
                                                             </div>
                                                             <div class="widget-content" style="height:40px;">
                                                                 <div class="widget-body">
                                                                     <p id="paymentBillingInfoSummary"></p>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="paymentFormStep2Wrapper" class="hide">
                                                         <div id="paymentPeriodWrapper" class="widget well">
                                                             <div class="widget-header">
                                                                 <h4>Select the Payment Period</h4>
                                                             </div>
                                                             <div class="widget-body">
                                                                 <table class="table table-condensed">
                                                                     <thead>
                                                                         <tr>
                                                                             <th width="15px">&nbsp;</th>
                                                                             <th>Period</th>
                                                                             <th>Price</th>
                                                                         </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                         <tr id="annualPricingWrap">
                                                                             <td><input type="radio" name="paymentPeriod"
                                                                                     id="paymentPeriodAnnual"
                                                                                     class="paymentPeriod"
                                                                                     checked="checked" value="12"></td>
                                                                             <td id="annualPricingTitle">Annual</td>
                                                                             <td>
                                                                                 <div id="pricingAnnualPriceWrapper">
                                                                                     $<span
                                                                                         class="pricingAnnualPrice"></span>/year
                                                                                     ($
                                                                                     <span
                                                                                         class="pricingAnnualMonthlyPrice"></span>/month
                                                                                     - best price!)
                                                                                 </div>
                                                                                 <div
                                                                                     class="pricingAnnualDeductionInfo opaci75">
                                                                                 </div>
                                                                             </td>
                                                                         </tr>
                                                                         <tr id="monthlyPricingWrap">
                                                                             <td><input type="radio" name="paymentPeriod"
                                                                                     id="paymentPeriodMonthly"
                                                                                     class="paymentPeriod" value="1">
                                                                             </td>
                                                                             <td id="monthlyPricingTitle">Monthly</td>
                                                                             <td>
                                                                                 <div id="pricingMonthlyPriceWrapper">
                                                                                     $<span
                                                                                         class="pricingMonthlyPrice"></span>/month
                                                                                 </div>
                                                                                 <div
                                                                                     class="pricingMonthlyDeductionInfo opaci75">
                                                                                 </div>
                                                                             </td>
                                                                         </tr>
                                                                     </tbody>
                                                                 </table>
                                                             </div>
                                                         </div>
                                                         <div class="widget well">
                                                             <div class="widget-header">
                                                                 <h4>Select the Payment Method</h4>
                                                             </div>
                                                             <div class="widget-body">
                                                                 <table class="table table-condensed">
                                                                     <thead>
                                                                         <tr>
                                                                             <th width="15px">&nbsp;</th>
                                                                             <th>Payment Type</th>
                                                                         </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                         <tr id="paymentTypeCreditCardTR">
                                                                             <td><input type="radio"
                                                                                     id="paymentTypeCreditCard"
                                                                                     name="paymentMethod"
                                                                                     class="paymentMethod"
                                                                                     checked="checked" value="1"></td>
                                                                             <td>Credit Card</td>
                                                                         </tr>
                                                                         <tr id="paymentTypePayPalTR">
                                                                             <td><input type="radio" id="paymentTypePayPal"
                                                                                     name="paymentMethod"
                                                                                     class="paymentMethod" value="2">
                                                                             </td>
                                                                             <td>PayPal</td>
                                                                         </tr>
                                                                     </tbody>
                                                                 </table>
                                                                 <div id="paymentTypeSMSAppUpsell"
                                                                     class="alert alert-info margin-top20 hide"
                                                                     style="margin-right: 5px; margin-left: 5px;">
                                                                     If you would like to pay for credits by credit card,
                                                                     use our
                                                                     <strong><a
                                                                             href="https://blog.uptimerobot.com/redesigned-mobile-app/">brand
                                                                             new mobile app</a></strong> and pay via Apple
                                                                     Pay (iOS) or Google Pay (Android).
                                                                 </div>
                                                                 <input id="userProPlanUnusedValue" type="hidden"
                                                                     value="" />
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="paymentFormStep3Wrapper" class="hide">
                                                         <div class="widget well">
                                                             <div class="widget-header">
                                                                 <h4>Billing Details</h4>
                                                             </div>
                                                             <div class="widget-body">
                                                                 <fieldset>
                                                                     <ul
                                                                         class="form-list label-left list-bordered dotted">

                                                                         <div class="row-fluid">
                                                                             <div class="span6 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingName"
                                                                                         class="control-label">Full
                                                                                         name
                                                                                         or
                                                                                         company name <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingName"
                                                                                             id="paymentBillingName"
                                                                                             class="span10"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                             <div class="span6 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingAddress"
                                                                                         class="control-label">Billing
                                                                                         Address <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingAddress"
                                                                                             id="paymentBillingAddress"
                                                                                             class="span12"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                         </div>
                                                                         <div class="row-fluid">
                                                                             <div class="span3 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingZipCode"
                                                                                         class="control-label">Billing
                                                                                         Zip
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingZipCode"
                                                                                             id="paymentBillingZipCode"
                                                                                             class="span12"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                             <div class="span3 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingState"
                                                                                         class="control-label">Billing
                                                                                         State</label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingState"
                                                                                             id="paymentBillingState"
                                                                                             class="span9"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                             <div class="span3 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingCity"
                                                                                         class="control-label">Billing
                                                                                         City
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingCity"
                                                                                             id="paymentBillingCity"
                                                                                             class="span12"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                             <div class="span3 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingPhoneNumber"
                                                                                         class="control-label">Billing
                                                                                         Phone</label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingPhoneNumber"
                                                                                             id="paymentBillingPhoneNumber"
                                                                                             class="span12"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                         </div>
                                                                         <div class="row-fluid">
                                                                             <div class="span6 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingCountry"
                                                                                         class="control-label">Billing
                                                                                         Country <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <select id="paymentBillingCountry"
                                                                                             class="span10 darkSelect"
                                                                                             name="paymentBillingCountry">
                                                                                             <option value="">Please
                                                                                                 Select
                                                                                             </option>
                                                                                             <option value="AFG">
                                                                                                 Afghanistan
                                                                                             </option>
                                                                                             <option value="ALB">Albania
                                                                                             </option>
                                                                                             <option value="DZA">Algeria
                                                                                             </option>
                                                                                             <option value="AND">Andorra
                                                                                             </option>
                                                                                             <option value="AGO">Angola
                                                                                             </option>
                                                                                             <option value="AIA">Anguilla
                                                                                             </option>
                                                                                             <option value="ATG">Antigua
                                                                                                 &
                                                                                                 Barbuda</option>
                                                                                             <option value="ARG">
                                                                                                 Argentina
                                                                                             </option>
                                                                                             <option value="ARM">Armenia
                                                                                             </option>
                                                                                             <option value="ABW">Aruba
                                                                                             </option>
                                                                                             <option value="AUS">
                                                                                                 Australia
                                                                                             </option>
                                                                                             <option value="AUT">Austria
                                                                                             </option>
                                                                                             <option value="AZE">
                                                                                                 Azerbaijan
                                                                                             </option>
                                                                                             <option value="BHS">Bahamas
                                                                                             </option>
                                                                                             <option value="BHR">Bahrain
                                                                                             </option>
                                                                                             <option value="BGD">
                                                                                                 Bangladesh
                                                                                             </option>
                                                                                             <option value="BRB">Barbados
                                                                                             </option>
                                                                                             <option value="BLR">Belarus
                                                                                             </option>
                                                                                             <option value="BEL">Belgium
                                                                                             </option>
                                                                                             <option value="BLZ">Belize
                                                                                             </option>
                                                                                             <option value="BEN">Benin
                                                                                             </option>
                                                                                             <option value="BMU">Bermuda
                                                                                             </option>
                                                                                             <option value="BTN">Bhutan
                                                                                             </option>
                                                                                             <option value="BOL">Bolivia
                                                                                             </option>
                                                                                             <option value="BIH">Bosnia &
                                                                                                 Herzegovina</option>
                                                                                             <option value="BWA">Botswana
                                                                                             </option>
                                                                                             <option value="BRA">Brazil
                                                                                             </option>
                                                                                             <option value="BRN">Brunei
                                                                                                 Darussalam</option>
                                                                                             <option value="BGR">Bulgaria
                                                                                             </option>
                                                                                             <option value="BFA">Burkina
                                                                                                 Faso
                                                                                             </option>
                                                                                             <option value="BDI">Burundi
                                                                                             </option>
                                                                                             <option value="KHM">Cambodia
                                                                                             </option>
                                                                                             <option value="CMR">Cameroon
                                                                                             </option>
                                                                                             <option value="CAN">Canada
                                                                                             </option>
                                                                                             <option value="CPV">Cape
                                                                                                 Verde
                                                                                             </option>
                                                                                             <option value="CYM">Cayman
                                                                                                 Islands</option>
                                                                                             <option value="CAF">Central
                                                                                                 African Republic
                                                                                             </option>
                                                                                             <option value="TCD">Chad
                                                                                             </option>
                                                                                             <option value="CHL">Chile
                                                                                             </option>
                                                                                             <option value="CHN">China
                                                                                             </option>
                                                                                             <option value="COL">Colombia
                                                                                             </option>
                                                                                             <option value="COM">Comoros
                                                                                             </option>
                                                                                             <option value="COG">Congo
                                                                                             </option>
                                                                                             <option value="COD">Congo,
                                                                                                 D.R.
                                                                                             </option>
                                                                                             <option value="COK">Cook
                                                                                                 Islands
                                                                                             </option>
                                                                                             <option value="CRI">Costa
                                                                                                 Rica
                                                                                             </option>
                                                                                             <option value="CIV">Cote
                                                                                                 dIvoire
                                                                                             </option>
                                                                                             <option value="HRV">Croatia
                                                                                             </option>
                                                                                             <option value="CYP">Cyprus
                                                                                             </option>
                                                                                             <option value="CZE">Czech
                                                                                                 Republic</option>
                                                                                             <option value="DNK">Denmark
                                                                                             </option>
                                                                                             <option value="DJI">Djibouti
                                                                                             </option>
                                                                                             <option value="DMA">Dominica
                                                                                             </option>
                                                                                             <option value="DOM">
                                                                                                 Dominican
                                                                                                 Republic</option>
                                                                                             <option value="ECU">Ecuador
                                                                                             </option>
                                                                                             <option value="EGY">Egypt
                                                                                             </option>
                                                                                             <option value="SLV">El
                                                                                                 Salvador
                                                                                             </option>
                                                                                             <option value="GNQ">
                                                                                                 Equatorial
                                                                                                 Guinea</option>
                                                                                             <option value="EST">Estonia
                                                                                             </option>
                                                                                             <option value="ETH">Ethiopia
                                                                                             </option>
                                                                                             <option value="FRO">Faroe
                                                                                                 Islands</option>
                                                                                             <option value="FJI">Fiji
                                                                                             </option>
                                                                                             <option value="FIN">Finland
                                                                                             </option>
                                                                                             <option value="FRA">France
                                                                                             </option>
                                                                                             <option value="GUF">French
                                                                                                 Guiana</option>
                                                                                             <option value="PYF">French
                                                                                                 Polynesia</option>
                                                                                             <option value="GAB">Gabon
                                                                                             </option>
                                                                                             <option value="GMB">Gambia
                                                                                             </option>
                                                                                             <option value="GEO">Georgia
                                                                                             </option>
                                                                                             <option value="DEU">Germany
                                                                                             </option>
                                                                                             <option value="GHA">Ghana
                                                                                             </option>
                                                                                             <option value="GIB">
                                                                                                 Gibraltar
                                                                                             </option>
                                                                                             <option value="GRC">Greece
                                                                                             </option>
                                                                                             <option value="GRL">
                                                                                                 Greenland
                                                                                             </option>
                                                                                             <option value="GRD">Grenada
                                                                                             </option>
                                                                                             <option value="GLP">
                                                                                                 Guadeloupe
                                                                                             </option>
                                                                                             <option value="GUM">Guam
                                                                                             </option>
                                                                                             <option value="GTM">
                                                                                                 Guatemala
                                                                                             </option>
                                                                                             <option value="GGY">Guernsey
                                                                                             </option>
                                                                                             <option value="GIN">Guinea
                                                                                             </option>
                                                                                             <option value="GNB">
                                                                                                 Guinea-Bissau</option>
                                                                                             <option value="GUY">Guyana
                                                                                             </option>
                                                                                             <option value="HTI">Haiti
                                                                                             </option>
                                                                                             <option value="HND">Honduras
                                                                                             </option>
                                                                                             <option value="HKG">Hong
                                                                                                 Kong
                                                                                             </option>
                                                                                             <option value="HUN">Hungary
                                                                                             </option>
                                                                                             <option value="ISL">Iceland
                                                                                             </option>
                                                                                             <option value="IND">India
                                                                                             </option>
                                                                                             <option value="IDN">
                                                                                                 Indonesia
                                                                                             </option>
                                                                                             <option value="IRQ">Iraq
                                                                                             </option>
                                                                                             <option value="IRL">Ireland
                                                                                             </option>
                                                                                             <option value="IMN">Isle of
                                                                                                 Man
                                                                                             </option>
                                                                                             <option value="ISR">Israel
                                                                                             </option>
                                                                                             <option value="ITA">Italy
                                                                                             </option>
                                                                                             <option value="JAM">Jamaica
                                                                                             </option>
                                                                                             <option value="JPN">Japan
                                                                                             </option>
                                                                                             <option value="JOR">Jordan
                                                                                             </option>
                                                                                             <option value="KAZ">
                                                                                                 Kazakhstan
                                                                                             </option>
                                                                                             <option value="KEN">Kenya
                                                                                             </option>
                                                                                             <option value="PRK">Korea
                                                                                                 South
                                                                                             </option>
                                                                                             <option value="XKX">Kosovo
                                                                                             </option>
                                                                                             <option value="KWT">Kuwait
                                                                                             </option>
                                                                                             <option value="KGZ">
                                                                                                 Kyrgyzstan
                                                                                             </option>
                                                                                             <option value="LAO">Laos
                                                                                             </option>
                                                                                             <option value="LVA">Latvia
                                                                                             </option>
                                                                                             <option value="LBN">Lebanon
                                                                                             </option>
                                                                                             <option value="LSO">Lesotho
                                                                                             </option>
                                                                                             <option value="LBR">Liberia
                                                                                             </option>
                                                                                             <option value="LIE">
                                                                                                 Liechtenstein</option>
                                                                                             <option value="LTU">
                                                                                                 Lithuania
                                                                                             </option>
                                                                                             <option value="LUX">
                                                                                                 Luxembourg
                                                                                             </option>
                                                                                             <option value="MAC">Macau
                                                                                             </option>
                                                                                             <option value="MKD">
                                                                                                 Macedonia
                                                                                             </option>
                                                                                             <option value="MDG">
                                                                                                 Madagascar
                                                                                             </option>
                                                                                             <option value="MWI">Malawi
                                                                                             </option>
                                                                                             <option value="MYS">Malaysia
                                                                                             </option>
                                                                                             <option value="MDV">Maldives
                                                                                             </option>
                                                                                             <option value="MLI">Mali
                                                                                             </option>
                                                                                             <option value="MLT">Malta
                                                                                             </option>
                                                                                             <option value="MTQ">
                                                                                                 Martinique
                                                                                             </option>
                                                                                             <option value="MRT">
                                                                                                 Mauritania
                                                                                             </option>
                                                                                             <option value="MUS">
                                                                                                 Mauritius
                                                                                             </option>
                                                                                             <option value="MYT">Mayotte
                                                                                             </option>
                                                                                             <option value="MEX">Mexico
                                                                                             </option>
                                                                                             <option value="MDA">Moldova
                                                                                             </option>
                                                                                             <option value="MCO">Monaco
                                                                                             </option>
                                                                                             <option value="MNG">Mongolia
                                                                                             </option>
                                                                                             <option value="MNE">
                                                                                                 Montenegro
                                                                                             </option>
                                                                                             <option value="MSR">
                                                                                                 Montserrat
                                                                                             </option>
                                                                                             <option value="MAR">Morocco
                                                                                             </option>
                                                                                             <option value="MOZ">
                                                                                                 Mozambique
                                                                                             </option>
                                                                                             <option value="MMR">Myanmar
                                                                                             </option>
                                                                                             <option value="NAM">Namibia
                                                                                             </option>
                                                                                             <option value="NPL">Nepal
                                                                                             </option>
                                                                                             <option value="NLD">
                                                                                                 Netherlands
                                                                                             </option>
                                                                                             <option value="ANT">
                                                                                                 Netherlands
                                                                                                 Antilles</option>
                                                                                             <option value="NCL">New
                                                                                                 Caledonia</option>
                                                                                             <option value="NZL">New
                                                                                                 Zealand
                                                                                             </option>
                                                                                             <option value="NIC">
                                                                                                 Nicaragua
                                                                                             </option>
                                                                                             <option value="NER">Niger
                                                                                             </option>
                                                                                             <option value="NGA">Nigeria
                                                                                             </option>
                                                                                             <option value="NOR">Norway
                                                                                             </option>
                                                                                             <option value="OMN">Oman
                                                                                             </option>
                                                                                             <option value="PAK">Pakistan
                                                                                             </option>
                                                                                             <option value="PSE">
                                                                                                 Palestinian
                                                                                                 Territory</option>
                                                                                             <option value="PAN">Panama
                                                                                             </option>
                                                                                             <option value="PNG">Papua
                                                                                                 New
                                                                                                 Guinea</option>
                                                                                             <option value="PRY">Paraguay
                                                                                             </option>
                                                                                             <option value="PER">Peru
                                                                                             </option>
                                                                                             <option value="PHL">
                                                                                                 Philippines
                                                                                             </option>
                                                                                             <option value="POL">Poland
                                                                                             </option>
                                                                                             <option value="PRT">Portugal
                                                                                             </option>
                                                                                             <option value="PRI">Puerto
                                                                                                 Rico
                                                                                             </option>
                                                                                             <option value="QAT">Qatar
                                                                                             </option>
                                                                                             <option value="REU">Reunion
                                                                                             </option>
                                                                                             <option value="ROU">Romania
                                                                                             </option>
                                                                                             <option value="RUS">Russia
                                                                                             </option>
                                                                                             <option value="RWA">Rwanda
                                                                                             </option>
                                                                                             <option value="KNA">Saint
                                                                                                 Kitts
                                                                                                 and Nevis</option>
                                                                                             <option value="WSM">Samoa
                                                                                             </option>
                                                                                             <option value="SMR">San
                                                                                                 Marino
                                                                                             </option>
                                                                                             <option value="STP">Sao Tome
                                                                                                 &
                                                                                                 Principe</option>
                                                                                             <option value="SAU">Saudi
                                                                                                 Arabia
                                                                                             </option>
                                                                                             <option value="SEN">Senegal
                                                                                             </option>
                                                                                             <option value="SRB">Serbia
                                                                                             </option>
                                                                                             <option value="SYC">
                                                                                                 Seychelles
                                                                                             </option>
                                                                                             <option value="SLE">Sierra
                                                                                                 Leone
                                                                                             </option>
                                                                                             <option value="SGP">
                                                                                                 Singapore
                                                                                             </option>
                                                                                             <option value="SVK">Slovakia
                                                                                             </option>
                                                                                             <option value="SVN">Slovenia
                                                                                             </option>
                                                                                             <option value="ZAF">South
                                                                                                 Africa
                                                                                             </option>
                                                                                             <option value="ESP">Spain
                                                                                             </option>
                                                                                             <option value="LKA">Sri
                                                                                                 Lanka
                                                                                             </option>
                                                                                             <option value="VCT">St
                                                                                                 Vincent
                                                                                                 and the Grenadines
                                                                                             </option>
                                                                                             <option value="SUR">Suriname
                                                                                             </option>
                                                                                             <option value="SWZ">
                                                                                                 Swaziland
                                                                                             </option>
                                                                                             <option value="SWE">Sweden
                                                                                             </option>
                                                                                             <option value="CHE">
                                                                                                 Switzerland
                                                                                             </option>
                                                                                             <option value="TWN">Taiwan
                                                                                             </option>
                                                                                             <option value="TJK">
                                                                                                 Tajikistan
                                                                                             </option>
                                                                                             <option value="TZA">Tanzania
                                                                                             </option>
                                                                                             <option value="THA">Thailand
                                                                                             </option>
                                                                                             <option value="TGO">Togo
                                                                                             </option>
                                                                                             <option value="TON">Tonga
                                                                                             </option>
                                                                                             <option value="TTO">Trinidad
                                                                                                 &
                                                                                                 Tobago</option>
                                                                                             <option value="TUN">Tunisia
                                                                                             </option>
                                                                                             <option value="TUR">Turkey
                                                                                             </option>
                                                                                             <option value="TKM">
                                                                                                 Turkmenistan
                                                                                             </option>
                                                                                             <option value="TCA">Turks &
                                                                                                 Caicos Islands</option>
                                                                                             <option value="UGA">Uganda
                                                                                             </option>
                                                                                             <option value="UKR">Ukraine
                                                                                             </option>
                                                                                             <option value="ARE">United
                                                                                                 Arab
                                                                                                 Emirates</option>
                                                                                             <option value="GBR">United
                                                                                                 Kingdom</option>
                                                                                             <option value="USA"
                                                                                                 selected="selected">
                                                                                                 United
                                                                                                 States</option>
                                                                                             <option value="URY">Uruguay
                                                                                             </option>
                                                                                             <option value="UZB">
                                                                                                 Uzbekistan
                                                                                             </option>
                                                                                             <option value="VUT">Vanuatu
                                                                                             </option>
                                                                                             <option value="VEN">
                                                                                                 Venezuela
                                                                                             </option>
                                                                                             <option value="VNM">Vietnam
                                                                                             </option>
                                                                                             <option value="VGB">Virgin
                                                                                                 Islands, British
                                                                                             </option>
                                                                                             <option value="VIR">Virgin
                                                                                                 Islands, U.S.</option>
                                                                                             <option value="YEM">Yemen
                                                                                             </option>
                                                                                             <option value="ZMB">Zambia
                                                                                             </option>
                                                                                             <option value="ZWE">Zimbabwe
                                                                                             </option>
                                                                                         </select>
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                             <div class="span6 form-dark">
                                                                                 <li class="control-group">
                                                                                     <label for="paymentBillingVAT"
                                                                                         class="control-label">Billing
                                                                                         VAT</label>
                                                                                     <div class="controls">
                                                                                         <input type="text"
                                                                                             name="paymentBillingVAT"
                                                                                             id="paymentBillingVAT"
                                                                                             class="span12"
                                                                                             value="" />
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                         </div>
                                                                         <div id="paymentVATInfoWrapper"
                                                                             class="row-fluid hide">
                                                                             <div class="span12 form-dark">
                                                                                 <div id="paymentVATInfo"
                                                                                     class="alert alert-info no-margin">
                                                                                     <p><b>VAT Information: </b>An
                                                                                         additional
                                                                                         <span
                                                                                             class="paymentVATInfoRatio"></span>%
                                                                                         EU VAT will be added to the
                                                                                         purchase
                                                                                         <span
                                                                                             class="paymentNonMaltaVATInfo">if
                                                                                             no valid VAT Number is
                                                                                             mentioned</span>
                                                                                         <span
                                                                                             class="paymentMaltaVATInfo hide">(even
                                                                                             if a valid VAT is mentioned
                                                                                             as
                                                                                             UptimeRobot is based in
                                                                                             Malta)</span>.
                                                                                     </p>
                                                                                 </div>
                                                                                 <br />
                                                                                 <p id="billingError"
                                                                                     class="alert alert-danger no-margin hide">
                                                                                     Something went wrong when trying to
                                                                                     save your billing information. Please
                                                                                     try again.
                                                                                 </p>
                                                                             </div>
                                                                         </div>
                                                                     </ul>
                                                                 </fieldset>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div id="paymentFormStep4Wrapper" class="hide">
                                                         <input name="paymentFormStep4WrapperIsOpen"
                                                             id="paymentFormStep4WrapperIsOpen" type="hidden" value="0" />
                                                         <input name="paymentFormStep4WrapperIsOpen"
                                                             id="paymentFormStep4WrapperIsOpenFirstTime" type="hidden"
                                                             value="1" />
                                                         <div id="stripePayment" class="widget well">
                                                             <div class="widget-header">
                                                                 <h4>Enter the Card Details</h4>
                                                                 <div class="card-images-header">
                                                                     <img
                                                                         src="userside/assets/img/icon/payment-icons/visa_icon.png" />
                                                                     <img
                                                                         src="userside/assets/img/icon/payment-icons/mastercard_icon.png" />
                                                                     <img
                                                                         src="userside/assets/img/icon/payment-icons/amex_icon.png" />
                                                                     <img
                                                                         src="userside/assets/img/icon/payment-icons/dinersclub_icon.png" />

                                                                 </div>
                                                             </div>
                                                             <div class="widget-content">
                                                                 <div class="widget-body">
                                                                     <input type="hidden" name="setupIntentId"
                                                                         id="setupIntentId" val="" />
                                                                     <div id="card-element"></div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div id="paypalPayment" class="widget well hide">
                                                             <div class="widget-header">
                                                                 <h4>Paying with PayPal</h4>
                                                             </div>
                                                             <div class="widget-content">
                                                                 <div class="widget-body">
                                                                     <p>You will be redirected to the PayPal's payment page.
                                                                     </p>
                                                                     <input type="hidden" name="lc" value="US">
                                                                     <input type="hidden" name="image_url"
                                                                         value="https://uptimerobot.com/assets/img/uptimerobot-logo-paypal.png">
                                                                     <input type="hidden" name="business"
                                                                         value="paypalmt@uptimerobot.com">
                                                                     <input type="hidden" name="currency_code" value="USD">
                                                                     <input type="hidden" name="notify_url"
                                                                         value="https://uptimerobot.com/inc/dml/paymentDML.php?action=paypalPayment&userVerificationCode=u1612895-792c3d63db1ebe1297b57744eb989265">
                                                                     <input type="hidden" name="return"
                                                                         value="https://uptimerobot.com/dashboard?paymentSuccess=1#mySettings">
                                                                     <input type="hidden" name="rm" value="2">
                                                                     <input type="hidden" name="cancel_return"
                                                                         value="https://uptimerobot.com/dashboard#mySettings">
                                                                     <input type="hidden" name="no_shipping" value="1">

                                                                     <input type="hidden" id="paypalCMD" name="cmd"
                                                                         value="">

                                                                     <input type="hidden" id="paypalProductName"
                                                                         name="item_name" value="">
                                                                     <input type="hidden" id="paypalProductSKU"
                                                                         name="item_number" value="">
                                                                     <div id="paypalVariablesInsideForm">
                                                                         <div id="paypalSubscriptionVariables">

                                                                             <input type="hidden"
                                                                                 id="paypalProductDeductedValue" name="a1"
                                                                                 value="">
                                                                             <input type="hidden" name="p1" value="1">
                                                                             <input type="hidden"
                                                                                 id="paypalDeductionPeriodIdentifier"
                                                                                 name="t1" value="">

                                                                             <input type="hidden" id="paypalProductPrice"
                                                                                 name="a3" value="">
                                                                             <input type="hidden" name="p3" value="1">
                                                                             <input type="hidden"
                                                                                 id="paypalSubscriptionPeriodIdentifier"
                                                                                 name="t3" value="">
                                                                         </div>
                                                                         <div id="paypalOnetimeVariables">

                                                                             <input type="hidden" id="paypalAmount"
                                                                                 name="amount" value="">
                                                                         </div>
                                                                     </div>

                                                                     <input type="hidden" name="src" value="1">
                                                                     <input type="hidden" id="paypalNewUpgradeRenewalText"
                                                                         name="paypalNewUpgradeRenewalText" value="">
                                                                     <input type="submit" value=""
                                                                         style="width:200px; height:43px; background:url(userside/assets/img/paypal-checkout.png) no-repeat; border: 0px;; cursor:pointer;" />
                                                                 </div>
                                                             </div>
                                                         </div>

                                                     </div>
                                                     <div class="widget well hide">
                                                         <div class="widget-header">
                                                             <h4>Success!</h4>
                                                         </div>
                                                         <div class="widget-content">
                                                             <div class="widget-body">
                                                                 <p><i class="fontello-icon-ok-4"></i> The payment is
                                                                     completed successfully (and the account is updated
                                                                     accordingly).
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <div id="paymentSuccessNotification"
                                                         class="hide alert alert-success no-margin">
                                                         <p><strong class="alert-success">Success!</strong></p>
                                                         <p>The payment is completed successfully (and the account is
                                                             updated accordingly).
                                                         </p>
                                                         <p>For an updated view: <a
                                                                 href="https://uptimerobot.com/dashboard?refresh=1#mySettings"
                                                                 class="btn btn-primary refreshMySettingsPage">Refresh
                                                                 the
                                                                 page</a></p>
                                                     </div>
                                                     <div id="stripeErrorNotification"
                                                         class="hide alert alert-error no-margin">
                                                         <p><strong class="alert-error">Payment failed!</strong></p>
                                                         <p class="error-msg"></p>
                                                         <p>Try another card or <button type="button" id="switchToPayPal"
                                                                 class="btn btn-green">Use PayPal</button></p>
                                                     </div>
                                                     <div id="downgradeDaysNotification"
                                                         class="widget alert alert-error no-margin hide">
                                                         <p><strong class="alert-error">Info</strong></p>
                                                         <p>The account currently has a bigger limit that can be used until
                                                             <span class="proPlanExpiryDate"></span>.
                                                         </p>
                                                         <p>It <b>can be downgraded by <span
                                                                     class="proPlanDowngradeDate"></span> (<span
                                                                     class="proPlanDowngradeDateXDaysLater"></span>
                                                                 days
                                                                 later)</b> in order to prevent any double-payments.</p>
                                                     </div>
                                                     <div id="downgradeLimitNotification"
                                                         class="widget alert alert-error no-margin hide">
                                                         <p><strong class="alert-error">Info</strong></p>
                                                         <p>There are <span class="numberOfMonitorsInAccount"></span>
                                                             monitors in the account while the new plan can only handle
                                                             <span class="downgradeProPlanMonitorLimit"></span>.
                                                         </p>
                                                         <p><b><span class="numberOfMonitorsToRemoveForDowngrade"></span>
                                                                 monitors must be removed</b> for completing the downgrade.
                                                         </p>
                                                     </div>
                                                     <div id="pleskLicenceRemovalError"
                                                         class="hide alert alert-error no-margin">
                                                         <p><strong class="alert-error">Something wrong, please try
                                                                 again
                                                                 later!</strong></p>
                                                     </div>
                                                 </div>

                                             </div>

                                         </div>

                                         <div id="paypalVariablesOutsideForm">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="button"
                                 class="btn btn-primary showPaymentFormStep2 paymentFormStep1Buttons ">Next
                                 Step - Payment Details</button>
                             <button type="button"
                                 class="btn btn-primary hide showPaymentFormStep3 paymentFormStep2Buttons">Next Step -
                                 Billing</button>
                             <button type="submit"
                                 class="btn btn-primary hide showPaymentFormStep4 paymentFormStep3Buttons">Next Step -
                                 Payment</button>
                             <button type="submit" class="btn btn-primary hide paymentFormStep4Buttons">Complete the
                                 Payment</button>
                             <button type="button"
                                 class="btn btn-primary paymentFormStep4ProcessingButtons disabled">Please
                                 Wait..</button>
                         </div>
                     </form>
                 </div>
                 <div id="cancelProPlan" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="cancelProPlanForm" class="form-horizontal" method="POST"
                         action="inc/dml/paymentDML.php?action=cancelProPlan">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Cancel Auto-Renewal</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <div id="cancelProPlanThxText" class="hide">
                                                                     Thanks very much for being an awesome customer. You
                                                                     staying as a Free Plan user is still great and we are
                                                                     always here to help if more is needed.</div>
                                                                 <ul id="cancelProPlanInfoWrapper"
                                                                     class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Pro Plan Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <p>You are using the "<b>Free Plan (50 monitors,
                                                                                 5
                                                                                 minute intervals)</b>.</p>
                                                                         <p>Once canceled, the account will need to be
                                                                             renewed until 01.01.1970 or will be
                                                                             automatically downgraded to the Free Plan on
                                                                             01.01.1970.
                                                                         </p>
                                                                         <p><strong>Important!</strong> if more than 50
                                                                             monitors exist on this expiry date, they will
                                                                             be deleted automatically (with the order of
                                                                             &quot;latest added is deleted first&quot;).
                                                                         </p>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <div id="cpp-captcha_container"></div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <div class="alert alert-info no-margin">
                                                                             Please write <span
                                                                                 class="bold">CANCEL
                                                                                 AUTO-RENEW</span> to the field below to
                                                                             approve the action.
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label for="cancelProPlanApproveText"
                                                                             class="control-label">Approval Text <span
                                                                                 class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <input id="cancelProPlanApproveText"
                                                                                 class="span6" type="text"
                                                                                 value="" name="cancelProPlanApproveText">
                                                                             <input id="cancelProPlanApproveTextHidden"
                                                                                 class="span6" type="hidden"
                                                                                 value="CANCEL AUTO-RENEW"
                                                                                 name="cancelProPlanApproveTextHidden">
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="cancelProPlanSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Pro Plan auto-renewal is
                                                 cancelled!</strong>
                                         </div>
                                         <div id="cancelProPlanErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <span class="alert-error">Please make sure that the captcha is
                                                 verified.</span>
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="cancelProPlanFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="cancelProPlanFormSubmitButton">Cancel
                                 Pro
                                 Plan</button>
                         </div>
                     </form>
                 </div>
                 <div id="newMWindow" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form id="newMWindowForm" class="form-horizontal" method="POST"
                         action="inc/dml/userDML.php?action=newMWindow">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> New Maintenance Window</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Maintenance Window
                                                                             Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="newMWindowType"
                                                                             class="control-label">Maint. Window Type
                                                                             <span class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <select id="newMWindowType"
                                                                                 class="selecttwo span8"
                                                                                 name="newMWindowType" style="float:none;">
                                                                                 <option selected="selected" value="0">
                                                                                     Please
                                                                                     Select</option>
                                                                                 <option value="1">Once</option>
                                                                                 <option value="2">Daily</option>
                                                                                 <option value="3">Weekly</option>
                                                                                 <option value="4">Monthly</option>
                                                                             </select>
                                                                         </div>
                                                                     </li>

                                                                     <div class="hide" id="newOnceMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>only
                                                                                 once</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="newOnceMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newOnceMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newOnceMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newOnceMWindowStartDateTime"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newOnceMWindowStartDateTime"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newOnceMWindowStartDateTime">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newOnceMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newOnceMWindowDuration"
                                                                                     class="span2" type="text"
                                                                                     value="" name="newOnceMWindowDuration">
                                                                                 mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                     <div class="hide" id="newDailyMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>every
                                                                                 day</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="newDailyMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newDailyMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newDailyMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newDailyMWindowStartTime"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newDailyMWindowStartHour"
                                                                                     class="span2" type="text"
                                                                                     value=""
                                                                                     name="newDailyMWindowStartHour"
                                                                                     placeholder="18"> : <input
                                                                                     id="newDailyMWindowStartMinute"
                                                                                     class="span2" type="text"
                                                                                     value=""
                                                                                     name="newDailyMWindowStartMinute"
                                                                                     placeholder="30">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newDailyMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newDailyMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newDailyMWindowDuration"> mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                     <div class="hide" id="newWeeklyMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>every
                                                                                 week</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="newWeeklyMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newWeeklyMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newWeeklyMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newWeeklyMWindowDays"
                                                                                 class="control-label">Maintenance
                                                                                 Days
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls alignCheckboxes">
                                                                                 <div class="errorsAfterThis">
                                                                                     <input type="checkbox" value="1"
                                                                                         name="newWeeklyMWindowDays[]"> Mon
                                                                                     <input type="checkbox" value="2"
                                                                                         name="newWeeklyMWindowDays[]"> Tue
                                                                                     <input type="checkbox" value="3"
                                                                                         name="newWeeklyMWindowDays[]"> Wed
                                                                                     <input type="checkbox" value="4"
                                                                                         name="newWeeklyMWindowDays[]"> Thu
                                                                                     <input type="checkbox" value="5"
                                                                                         name="newWeeklyMWindowDays[]"> Fri
                                                                                     <input type="checkbox" value="6"
                                                                                         name="newWeeklyMWindowDays[]"> Sat
                                                                                     <input type="checkbox" value="7"
                                                                                         name="newWeeklyMWindowDays[]"> Sun
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newWeeklyMWindowStartHour"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <div class="errorsAfterThis">
                                                                                     <input id="newWeeklyMWindowStartHour"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="newWeeklyMWindowStartHour"
                                                                                         placeholder="18"> : <input
                                                                                         id="newWeeklyMWindowStartMinute"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="newWeeklyMWindowStartMinute"
                                                                                         placeholder="30">
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newWeeklyMWindowDuration"
                                                                                 class="control-label">Maintenance End
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newWeeklyMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newWeeklyMWindowDuration"> mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                     <div class="hide" id="newMonthlyMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>every
                                                                                 month</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="newMonthlyMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newMonthlyMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newMonthlyMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newMonthlyMWindowDays"
                                                                                 class="control-label">Maintenance
                                                                                 Days
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls alignCheckboxes span6">
                                                                                 <div class="errorsAfterThis">
                                                                                     <table width="100%"
                                                                                         style="max-width:200px; margin-left:3px;">
                                                                                         <tr>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="1"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 1
                                                                                             </td>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="2"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 2
                                                                                             </td>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="3"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 3
                                                                                             </td>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="4"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 4
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="5"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 5
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="6"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 6
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="7"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 7
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="8"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 8
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="9"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 9
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="10"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 10
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="11"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 11
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="12"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 12
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="13"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 13
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="14"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 14
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="15"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 15
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="16"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 16
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="17"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 17
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="18"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 18
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="19"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 19
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="20"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 20
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="21"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 21
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="22"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 22
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="23"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 23
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="24"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 24
                                                                                             </td>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="25"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 25
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="26"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 26
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="27"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 27
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="28"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 28
                                                                                             </td>
                                                                                         </tr>
                                                                                         <td><input type="checkbox"
                                                                                                 value="29"
                                                                                                 name="newMonthlyMWindowDays[]">
                                                                                             29
                                                                                         </td>
                                                                                         <td><input type="checkbox"
                                                                                                 value="30"
                                                                                                 name="newMonthlyMWindowDays[]">
                                                                                             30
                                                                                         </td>
                                                                                         <td><input type="checkbox"
                                                                                                 value="31"
                                                                                                 name="newMonthlyMWindowDays[]">
                                                                                             31
                                                                                         </td>
                                                                                         <td></td>
                                                                                         <tr>
                                                                                             <td colspan="4"><input
                                                                                                     type="checkbox"
                                                                                                     value="99"
                                                                                                     name="newMonthlyMWindowDays[]">
                                                                                                 Last day of month</td>
                                                                                         </tr>
                                                                                     </table>
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newMonthlyMWindowStartTime"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <div class="errorsAfterThis">
                                                                                     <input id="newMonthlyMWindowStartHour"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="newMonthlyMWindowStartHour"
                                                                                         placeholder="18"> : <input
                                                                                         id="newMonthlyMWindowStartMinute"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="newMonthlyMWindowStartMinute"
                                                                                         placeholder="30">
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="newMonthlyMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="newMonthlyMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="newMonthlyMWindowDuration"> mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="newMWindowSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Maintenance window created!</strong> You can
                                             keep adding new maintenance windows.
                                         </div>
                                         <div id="newMWindowErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                         </div>
                                         <div id="newMWindowExistsErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">Ooops!</strong> This maintenance window
                                             already exists under your account.
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Create Maintenance Window</button>
                         </div>
                     </form>
                 </div>
                 <div id="editMWindow" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form id="editMWindowForm" class="form-horizontal" method="POST"
                         action="inc/dml/userDML.php?action=editMWindow">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Edit Maintenance Window</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Maintenance Window
                                                                             Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="editMWindowType"
                                                                             class="control-label">Maint. Window Type
                                                                             <span class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="editMWindowTypeTitle"></span>
                                                                             <input id="editMWindowType"
                                                                                 class="span6" type="hidden"
                                                                                 value="" name="editMWindowType">
                                                                         </div>
                                                                     </li>

                                                                     <div class="hide" id="editOnceMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>only
                                                                                 once</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="editOnceMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editOnceMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editOnceMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editOnceMWindowStartDateTime"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editOnceMWindowStartDateTime"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editOnceMWindowStartDateTime">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editOnceMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editOnceMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editOnceMWindowDuration"> mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                     <div class="hide" id="editDailyMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>every
                                                                                 day</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="editDailyMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editDailyMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editDailyMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editDailyMWindowStartTime"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editDailyMWindowStartHour"
                                                                                     class="span2" type="text"
                                                                                     value=""
                                                                                     name="editDailyMWindowStartHour"
                                                                                     placeholder="18"> : <input
                                                                                     id="editDailyMWindowStartMinute"
                                                                                     class="span2" type="text"
                                                                                     value=""
                                                                                     name="editDailyMWindowStartMinute"
                                                                                     placeholder="30">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editDailyMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editDailyMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editDailyMWindowDuration"> mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                     <div class="hide" id="editWeeklyMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>every
                                                                                 week</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="editWeeklyMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editWeeklyMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editWeeklyMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editWeeklyMWindowDays"
                                                                                 class="control-label">Maintenance
                                                                                 Days
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls alignCheckboxes">
                                                                                 <div class="errorsAfterThis">
                                                                                     <input type="checkbox" value="1"
                                                                                         name="editWeeklyMWindowDays[]"> Mon
                                                                                     <input type="checkbox" value="2"
                                                                                         name="editWeeklyMWindowDays[]"> Tue
                                                                                     <input type="checkbox" value="3"
                                                                                         name="editWeeklyMWindowDays[]"> Wed
                                                                                     <input type="checkbox" value="4"
                                                                                         name="editWeeklyMWindowDays[]"> Thu
                                                                                     <input type="checkbox" value="5"
                                                                                         name="editWeeklyMWindowDays[]"> Fri
                                                                                     <input type="checkbox" value="6"
                                                                                         name="editWeeklyMWindowDays[]"> Sat
                                                                                     <input type="checkbox" value="7"
                                                                                         name="editWeeklyMWindowDays[]"> Sun
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editWeeklyMWindowStartHour"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <div class="errorsAfterThis">
                                                                                     <input id="editWeeklyMWindowStartHour"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="editWeeklyMWindowStartHour"
                                                                                         placeholder="18"> : <input
                                                                                         id="editWeeklyMWindowStartMinute"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="editWeeklyMWindowStartMinute"
                                                                                         placeholder="30">
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editWeeklyMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editWeeklyMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editWeeklyMWindowDuration"> mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                     <div class="hide" id="editMonthlyMWindow">
                                                                         <div class="alert alert-info no-margin">
                                                                             <strong class="alert-info">Info:
                                                                             </strong> The maintenance windows will be
                                                                             active
                                                                             <strong>every
                                                                                 month</strong> for the mentioned period (in
                                                                             the account's timezone).
                                                                         </div>
                                                                         <li class="control-group">
                                                                             <label for="editMonthlyMWindowFriendlyName"
                                                                                 class="control-label">Friendly Name
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editMonthlyMWindowFriendlyName"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editMonthlyMWindowFriendlyName">
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editMonthlyMWindowDays"
                                                                                 class="control-label">Maintenance
                                                                                 Days
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls alignCheckboxes span6">
                                                                                 <div class="errorsAfterThis">
                                                                                     <table width="100%"
                                                                                         style="max-width:200px; margin-left:3px;">
                                                                                         <tr>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="1"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 1
                                                                                             </td>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="2"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 2
                                                                                             </td>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="3"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 3
                                                                                             </td>
                                                                                             <td width="25%"><input
                                                                                                     type="checkbox"
                                                                                                     value="4"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 4
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="5"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 5
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="6"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 6
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="7"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 7
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="8"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 8
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="9"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 9
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="10"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 10
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="11"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 11
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="12"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 12
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="13"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 13
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="14"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 14
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="15"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 15
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="16"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 16
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="17"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 17
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="18"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 18
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="19"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 19
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="20"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 20
                                                                                             </td>
                                                                                         </tr>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="21"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 21
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="22"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 22
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="23"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 23
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="24"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 24
                                                                                             </td>
                                                                                         <tr>
                                                                                             <td><input type="checkbox"
                                                                                                     value="25"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 25
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="26"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 26
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="27"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 27
                                                                                             </td>
                                                                                             <td><input type="checkbox"
                                                                                                     value="28"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 28
                                                                                             </td>
                                                                                         </tr>
                                                                                         <td><input type="checkbox"
                                                                                                 value="29"
                                                                                                 name="editMonthlyMWindowDays[]">
                                                                                             29
                                                                                         </td>
                                                                                         <td><input type="checkbox"
                                                                                                 value="30"
                                                                                                 name="editMonthlyMWindowDays[]">
                                                                                             30
                                                                                         </td>
                                                                                         <td><input type="checkbox"
                                                                                                 value="31"
                                                                                                 name="editMonthlyMWindowDays[]">
                                                                                             31
                                                                                         </td>
                                                                                         <td></td>
                                                                                         <tr>
                                                                                             <td colspan="4"><input
                                                                                                     type="checkbox"
                                                                                                     value="99"
                                                                                                     name="editMonthlyMWindowDays[]">
                                                                                                 Last day of month</td>
                                                                                         </tr>
                                                                                     </table>
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editMonthlyMWindowStartTime"
                                                                                 class="control-label">Maintenance
                                                                                 Start
                                                                                 Time
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <div class="errorsAfterThis">
                                                                                     <input id="editMonthlyMWindowStartHour"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="editMonthlyMWindowStartHour"
                                                                                         placeholder="18"> : <input
                                                                                         id="editMonthlyMWindowStartMinute"
                                                                                         class="span2"
                                                                                         type="text" value=""
                                                                                         name="editMonthlyMWindowStartMinute"
                                                                                         placeholder="30">
                                                                                 </div>
                                                                             </div>
                                                                         </li>
                                                                         <li class="control-group">
                                                                             <label for="editMonthlyMWindowDuration"
                                                                                 class="control-label">Maintenance
                                                                                 Duration
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <input id="editMonthlyMWindowDuration"
                                                                                     class="span6" type="text"
                                                                                     value=""
                                                                                     name="editMonthlyMWindowDuration">
                                                                                 mins.
                                                                             </div>
                                                                         </li>

                                                                     </div>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="editMWindowSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Maintenance window saved!</strong> You can
                                             keep editing the maintenance window.
                                         </div>
                                         <div id="editMWindowErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Save Maintenance Window</button>
                         </div>
                     </form>
                 </div>
                 <div id="deleteMWindow" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="deleteMWindowForm" class="form-horizontal" method="POST"
                         action="inc/dml/userDML.php?action=deleteMWindow">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Delete Maintenance Window</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Maintenance Window
                                                                             Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteMWindowType"
                                                                             class="control-label">Maintenance Window
                                                                             Type</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteMWindowTypeTitle"></span>
                                                                         </div>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deleteMWindowValue"
                                                                             class="control-label">Maintenance
                                                                             Window</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deleteMWindowFriendlyNameTitle"></span>
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="deleteMWindowSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Maintenance window deleted!</strong>.
                                         </div>
                                         <div id="deleteMWindowInfoNotification"
                                             class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-warning">Warning!</strong> You are about to delete this
                                             maintenance window and it will be removed from any monitors it is attached to
                                             (monitors will not be deleted).
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="deleteMWindowFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="deleteMWindowFormSubmitButton">Delete
                                 Maintenance Window</button>
                         </div>
                     </form>
                 </div>
                 <div id="newPsp" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form enctype="multipart/form-data" id="newPspForm" class="form-horizontal" method="POST"
                         action="inc/dml/userDML.php?action=newPsp" autocomplete="off">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> New Public Status Page</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Public Status Page
                                                                             Information
                                                                         </h4>
                                                                         </span>

                                                                     <li class="control-group">
                                                                         <label for="newPspFriendlyName"
                                                                             class="control-label">Friendly Name <span
                                                                                 class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <input id="newPspFriendlyName"
                                                                                 class="span6" type="text"
                                                                                 value="" name="newPspFriendlyName">
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label for="newPspLogo"
                                                                             class="control-label">Logo</label>
                                                                         <div class="controls">
                                                                             <input id="newPspLogo" type="file"
                                                                                 name="newPspLogo" accept=".jpg,.png">
                                                                         </div>
                                                                         <span class="help-block">Can be .jpg,
                                                                             .jpeg or
                                                                             .png
                                                                             and no bigger than 400x200px and
                                                                             150kb.<br />
                                                                             You can change this later in "Appereance"
                                                                             section of Status page dashboard.
                                                                         </span>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label for="newPspCustomDomain"
                                                                             class="control-label">Custom
                                                                             Domain</label>
                                                                         <div class="controls">
                                                                             <input id="newPspCustomDomain"
                                                                                 class="span6" type="text"
                                                                                 value="" placeholder="status.site.com"
                                                                                 name="newPspCustomDomain" disabled>
                                                                         </div>
                                                                         <div style="margin-top: 10px;">
                                                                             <span class="label label-warning">PRO</span>
                                                                             Available only in the PRO plan.
                                                                             <a href="#upgradeAccount"
                                                                                 class="upgradeProAccount"
                                                                                 data-dismiss="modal" data-toggle="modal"
                                                                                 data-cta-source="new_psp-custom_domain">Upgrade</a>
                                                                         </div>
                                                                         <span class="help-block">Host status page
                                                                             on
                                                                             your
                                                                             own domain! Make sure you <strong>create a
                                                                                 CNAME
                                                                                 DNS record</strong> for your domain to
                                                                             <code>stats.uptimerobot.com</code>. It can
                                                                             take
                                                                             up to 24 hours for the custom domain to be
                                                                             activated.
                                                                         </span>
                                                                     <li class="control-group">
                                                                         <label for="newPspPassword"
                                                                             class="control-label">Password</label>
                                                                         <div class="controls">
                                                                             <input id="newPspPassword"
                                                                                 class="span6" type="password"
                                                                                 value="" name="newPspPassword"
                                                                                 autocomplete="new-password">
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label for="newPspHideURLogo"
                                                                             class="control-label">Hide UptimeRobot
                                                                             Logo</label>
                                                                         <div class="controls">
                                                                             <span class="label label-warning">PRO</span>
                                                                             Available only in the PRO plan.
                                                                             <a href="#upgradeAccount"
                                                                                 class="upgradeProAccount"
                                                                                 data-dismiss="modal" data-toggle="modal"
                                                                                 data-cta-source="new_psp-hide_ur_logo">Upgrade</a>
                                                                         </div>
                                                                     </li>
                                                                     <li class="control-group">
                                                                         <label for="newPspSEONoIndex"
                                                                             class="control-label">Robots meta
                                                                             tag</label>
                                                                         <div class="controls">
                                                                             <select id="newPspSEONoIndex"
                                                                                 name="newPspSEONoIndex">
                                                                                 <option value="1">noindex</option>
                                                                                 <option value="0" selected>index
                                                                                 </option>
                                                                             </select>
                                                                         </div>
                                                                         <span class="help-block">Meta robots
                                                                             "index"
                                                                             means
                                                                             your website will be visible in search
                                                                             engines.
                                                                             Setting value to "noindex" will hide your
                                                                             Status
                                                                             page in search engines.</span>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="newPspSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Public status page created!</strong> It can be
                                             reached from: <a id="newPspCustomURL" class="hide" href="">here</a>
                                             <span class="hide" id="newPspCustomURLInfo">(once a CNAME record
                                                 for the
                                                 hostname
                                                 to stats.uptimerobot.com is created)</span>
                                             <a id="newPspURLBig" href="">here</a>.</p>
                                             <p id="newPspURLSmallWrapper" class="hide"> <small>(or always
                                                     from <a id="newPspURLSmall" href="">here</a>)</small> .
                                         </div>
                                         <div id="newPspErrorNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn">Close</button>
                             <button type="submit" class="btn btn-primary">Create Public Status Page</button>
                         </div>
                     </form>
                 </div>
                 <style>
                     .select2-container-multi .select2-choices .select2-search-field input {
                         background: none !important;
                         background-color: #F5F6F9;
                     }

                     .select2-container-multi .select2-choices {
                         background-color: #F5F6F9;
                         border: 0;
                     }

                     .select2-container-multi.select2-container-active .select2-choice {
                         border: 0;
                     }

                 </style>
                 <div id="deletePsp" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="deletePspForm" class="form-horizontal" method="POST"
                         action="inc/dml/userDML.php?action=deletePsp">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Delete Public Status Page</h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Public Status Page
                                                                             Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deletePspFriendlyName"
                                                                             class="control-label">Friendly
                                                                             Name</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deletePspFriendlyName"></span>
                                                                         </div>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deletePspMonitors"
                                                                             class="control-label">Monitors</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deletePspMonitors"></span>
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="deletePspInfoNotification"
                                             class="alert alert-warning no-margin-right no-margin-left margin-top20">
                                             <strong class="alert-warning">Warning!</strong> You are about to delete this
                                             public status page.
                                         </div>
                                         <div class="alert alert-warning no-margin-right no-margin-left margin-top20">
                                             <strong class="alert-warning">Warning!</strong> If there are any Status page
                                             subscribers they will be removed (this can't be undone).
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="deletePspFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="deletePspFormSubmitButton">Delete Public
                                 Status Page</button>
                         </div>
                     </form>
                 </div>
                 <div id="deletePspAnnouncement" class="modal hide fade" tabindex="-1" data-width="35%">
                     <div class="modal-header"> </div>
                     <form id="deletePspAnnouncementForm" class="form-horizontal" method="POST"
                         action="inc/dml/userDML.php?action=deletePspAnnouncement">
                         <div class="modal-body">
                             <input type="hidden" id="deletePspAnnouncementPspID" name="pspID" value="">
                             <input type="hidden" id="deletePspAnnouncementID" name="pspAnnouncementID" value="">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="spa12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Delete Public Status Page
                                                     Announcement
                                                 </h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Public Status Page
                                                                             Announcement Information
                                                                         </h4>
                                                                     </li>

                                                                     <li class="control-group">
                                                                         <label for="deletePspAnnouncementFriendlyName"
                                                                             class="control-label">Announcement
                                                                             Title</label>
                                                                         <div class="controls">
                                                                             <span class="bold"
                                                                                 id="deletePspAnnouncementFriendlyName"></span>
                                                                         </div>
                                                                     </li>

                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="deletePspAnnouncementSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Public status announcement page
                                                 deleted!</strong>.
                                         </div>
                                         <div id="deletePspAnnouncementInfoNotification"
                                             class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-warning">Warning!</strong> You are about to delete this
                                             public status page announcement.
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="deletePspAnnouncementFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary"
                                 id="deletePspAnnouncementFormSubmitButton">Delete
                                 Announcement</button>
                         </div>
                     </form>
                 </div>
                 <div id="editProPlanBilling" class="modal hide fade" tabindex="-1" data-width="40%">
                     <div class="modal-header"> </div>
                     <form id="editProPlanBillingForm" method="POST"
                         action="inc/dml/paymentDML.php?action=editProPlanBilling">
                         <div class="modal-body">
                             <div class="tab-pane active fade in">
                                 <div class="row-fluid">
                                     <div class="span12 grider">
                                         <div class="widget widget-simple">
                                             <div class="widget-header">
                                                 <h4><i class="fontello-icon-edit"></i> Edit "Pro Plan" Billing Details
                                                 </h4>
                                             </div>
                                             <div class="widget-content">
                                                 <div class="widget-body">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">

                                                                     <div class="row-fluid">
                                                                         <div class="span6 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingName"
                                                                                     class="control-label">Full name
                                                                                     or
                                                                                     company name <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingName"
                                                                                         id="editProPlanBillingName"
                                                                                         class="span10"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                         <div class="span6 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingAddress"
                                                                                     class="control-label">Billing
                                                                                     Address
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingAddress"
                                                                                         id="editProPlanBillingAddress"
                                                                                         class="span12"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                     </div>
                                                                     <div class="row-fluid">
                                                                         <div class="span3 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingZipCode"
                                                                                     class="control-label">Billing Zip
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingZipCode"
                                                                                         id="editProPlanBillingZipCode"
                                                                                         class="span12"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                         <div class="span3 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingState"
                                                                                     class="control-label">Billing
                                                                                     State</label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingState"
                                                                                         id="editProPlanBillingState"
                                                                                         class="span9"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                         <div class="span3 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingCity"
                                                                                     class="control-label">Billing
                                                                                     City
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingCity"
                                                                                         id="editProPlanBillingCity"
                                                                                         class="span12"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                         <div class="span3 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingPhoneNumber"
                                                                                     class="control-label">Billing
                                                                                     Phone
                                                                                     #
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingPhoneNumber"
                                                                                         id="editProPlanBillingPhoneNumber"
                                                                                         class="span12"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                     </div>
                                                                     <div class="row-fluid">
                                                                         <div class="span6 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingCountry"
                                                                                     class="control-label">Billing
                                                                                     Country
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <select id="editProPlanBillingCountry"
                                                                                         class="span10 darkSelect"
                                                                                         name="editProPlanBillingCountry">
                                                                                         <option value="">Please Select
                                                                                         </option>
                                                                                         <option value="AFG">Afghanistan
                                                                                         </option>
                                                                                         <option value="ALB">Albania
                                                                                         </option>
                                                                                         <option value="DZA">Algeria
                                                                                         </option>
                                                                                         <option value="AND">Andorra
                                                                                         </option>
                                                                                         <option value="AGO">Angola
                                                                                         </option>
                                                                                         <option value="AIA">Anguilla
                                                                                         </option>
                                                                                         <option value="ATG">Antigua &
                                                                                             Barbuda</option>
                                                                                         <option value="ARG">Argentina
                                                                                         </option>
                                                                                         <option value="ARM">Armenia
                                                                                         </option>
                                                                                         <option value="ABW">Aruba
                                                                                         </option>
                                                                                         <option value="AUS">Australia
                                                                                         </option>
                                                                                         <option value="AUT">Austria
                                                                                         </option>
                                                                                         <option value="AZE">Azerbaijan
                                                                                         </option>
                                                                                         <option value="BHS">Bahamas
                                                                                         </option>
                                                                                         <option value="BHR">Bahrain
                                                                                         </option>
                                                                                         <option value="BGD">Bangladesh
                                                                                         </option>
                                                                                         <option value="BRB">Barbados
                                                                                         </option>
                                                                                         <option value="BLR">Belarus
                                                                                         </option>
                                                                                         <option value="BEL">Belgium
                                                                                         </option>
                                                                                         <option value="BLZ">Belize
                                                                                         </option>
                                                                                         <option value="BEN">Benin
                                                                                         </option>
                                                                                         <option value="BMU">Bermuda
                                                                                         </option>
                                                                                         <option value="BTN">Bhutan
                                                                                         </option>
                                                                                         <option value="BOL">Bolivia
                                                                                         </option>
                                                                                         <option value="BIH">Bosnia &
                                                                                             Herzegovina</option>
                                                                                         <option value="BWA">Botswana
                                                                                         </option>
                                                                                         <option value="BRA">Brazil
                                                                                         </option>
                                                                                         <option value="BRN">Brunei
                                                                                             Darussalam</option>
                                                                                         <option value="BGR">Bulgaria
                                                                                         </option>
                                                                                         <option value="BFA">Burkina Faso
                                                                                         </option>
                                                                                         <option value="BDI">Burundi
                                                                                         </option>
                                                                                         <option value="KHM">Cambodia
                                                                                         </option>
                                                                                         <option value="CMR">Cameroon
                                                                                         </option>
                                                                                         <option value="CAN">Canada
                                                                                         </option>
                                                                                         <option value="CPV">Cape Verde
                                                                                         </option>
                                                                                         <option value="CYM">Cayman
                                                                                             Islands
                                                                                         </option>
                                                                                         <option value="CAF">Central
                                                                                             African
                                                                                             Republic</option>
                                                                                         <option value="TCD">Chad
                                                                                         </option>
                                                                                         <option value="CHL">Chile
                                                                                         </option>
                                                                                         <option value="CHN">China
                                                                                         </option>
                                                                                         <option value="COL">Colombia
                                                                                         </option>
                                                                                         <option value="COM">Comoros
                                                                                         </option>
                                                                                         <option value="COG">Congo
                                                                                         </option>
                                                                                         <option value="COD">Congo, D.R.
                                                                                         </option>
                                                                                         <option value="COK">Cook Islands
                                                                                         </option>
                                                                                         <option value="CRI">Costa Rica
                                                                                         </option>
                                                                                         <option value="CIV">Cote dIvoire
                                                                                         </option>
                                                                                         <option value="HRV">Croatia
                                                                                         </option>
                                                                                         <option value="CYP">Cyprus
                                                                                         </option>
                                                                                         <option value="CZE">Czech
                                                                                             Republic
                                                                                         </option>
                                                                                         <option value="DNK">Denmark
                                                                                         </option>
                                                                                         <option value="DJI">Djibouti
                                                                                         </option>
                                                                                         <option value="DMA">Dominica
                                                                                         </option>
                                                                                         <option value="DOM">Dominican
                                                                                             Republic</option>
                                                                                         <option value="ECU">Ecuador
                                                                                         </option>
                                                                                         <option value="EGY">Egypt
                                                                                         </option>
                                                                                         <option value="SLV">El Salvador
                                                                                         </option>
                                                                                         <option value="GNQ">Equatorial
                                                                                             Guinea</option>
                                                                                         <option value="EST">Estonia
                                                                                         </option>
                                                                                         <option value="ETH">Ethiopia
                                                                                         </option>
                                                                                         <option value="FRO">Faroe
                                                                                             Islands
                                                                                         </option>
                                                                                         <option value="FJI">Fiji
                                                                                         </option>
                                                                                         <option value="FIN">Finland
                                                                                         </option>
                                                                                         <option value="FRA">France
                                                                                         </option>
                                                                                         <option value="GUF">French
                                                                                             Guiana
                                                                                         </option>
                                                                                         <option value="PYF">French
                                                                                             Polynesia
                                                                                         </option>
                                                                                         <option value="GAB">Gabon
                                                                                         </option>
                                                                                         <option value="GMB">Gambia
                                                                                         </option>
                                                                                         <option value="GEO">Georgia
                                                                                         </option>
                                                                                         <option value="DEU">Germany
                                                                                         </option>
                                                                                         <option value="GHA">Ghana
                                                                                         </option>
                                                                                         <option value="GIB">Gibraltar
                                                                                         </option>
                                                                                         <option value="GRC">Greece
                                                                                         </option>
                                                                                         <option value="GRL">Greenland
                                                                                         </option>
                                                                                         <option value="GRD">Grenada
                                                                                         </option>
                                                                                         <option value="GLP">Guadeloupe
                                                                                         </option>
                                                                                         <option value="GUM">Guam
                                                                                         </option>
                                                                                         <option value="GTM">Guatemala
                                                                                         </option>
                                                                                         <option value="GGY">Guernsey
                                                                                         </option>
                                                                                         <option value="GIN">Guinea
                                                                                         </option>
                                                                                         <option value="GNB">
                                                                                             Guinea-Bissau
                                                                                         </option>
                                                                                         <option value="GUY">Guyana
                                                                                         </option>
                                                                                         <option value="HTI">Haiti
                                                                                         </option>
                                                                                         <option value="HND">Honduras
                                                                                         </option>
                                                                                         <option value="HKG">Hong Kong
                                                                                         </option>
                                                                                         <option value="HUN">Hungary
                                                                                         </option>
                                                                                         <option value="ISL">Iceland
                                                                                         </option>
                                                                                         <option value="IND">India
                                                                                         </option>
                                                                                         <option value="IDN">Indonesia
                                                                                         </option>
                                                                                         <option value="IRQ">Iraq
                                                                                         </option>
                                                                                         <option value="IRL">Ireland
                                                                                         </option>
                                                                                         <option value="IMN">Isle of Man
                                                                                         </option>
                                                                                         <option value="ISR">Israel
                                                                                         </option>
                                                                                         <option value="ITA">Italy
                                                                                         </option>
                                                                                         <option value="JAM">Jamaica
                                                                                         </option>
                                                                                         <option value="JPN">Japan
                                                                                         </option>
                                                                                         <option value="JOR">Jordan
                                                                                         </option>
                                                                                         <option value="KAZ">Kazakhstan
                                                                                         </option>
                                                                                         <option value="KEN">Kenya
                                                                                         </option>
                                                                                         <option value="PRK">Korea South
                                                                                         </option>
                                                                                         <option value="XKX">Kosovo
                                                                                         </option>
                                                                                         <option value="KWT">Kuwait
                                                                                         </option>
                                                                                         <option value="KGZ">Kyrgyzstan
                                                                                         </option>
                                                                                         <option value="LAO">Laos
                                                                                         </option>
                                                                                         <option value="LVA">Latvia
                                                                                         </option>
                                                                                         <option value="LBN">Lebanon
                                                                                         </option>
                                                                                         <option value="LSO">Lesotho
                                                                                         </option>
                                                                                         <option value="LBR">Liberia
                                                                                         </option>
                                                                                         <option value="LIE">
                                                                                             Liechtenstein
                                                                                         </option>
                                                                                         <option value="LTU">Lithuania
                                                                                         </option>
                                                                                         <option value="LUX">Luxembourg
                                                                                         </option>
                                                                                         <option value="MAC">Macau
                                                                                         </option>
                                                                                         <option value="MKD">Macedonia
                                                                                         </option>
                                                                                         <option value="MDG">Madagascar
                                                                                         </option>
                                                                                         <option value="MWI">Malawi
                                                                                         </option>
                                                                                         <option value="MYS">Malaysia
                                                                                         </option>
                                                                                         <option value="MDV">Maldives
                                                                                         </option>
                                                                                         <option value="MLI">Mali
                                                                                         </option>
                                                                                         <option value="MLT">Malta
                                                                                         </option>
                                                                                         <option value="MTQ">Martinique
                                                                                         </option>
                                                                                         <option value="MRT">Mauritania
                                                                                         </option>
                                                                                         <option value="MUS">Mauritius
                                                                                         </option>
                                                                                         <option value="MYT">Mayotte
                                                                                         </option>
                                                                                         <option value="MEX">Mexico
                                                                                         </option>
                                                                                         <option value="MDA">Moldova
                                                                                         </option>
                                                                                         <option value="MCO">Monaco
                                                                                         </option>
                                                                                         <option value="MNG">Mongolia
                                                                                         </option>
                                                                                         <option value="MNE">Montenegro
                                                                                         </option>
                                                                                         <option value="MSR">Montserrat
                                                                                         </option>
                                                                                         <option value="MAR">Morocco
                                                                                         </option>
                                                                                         <option value="MOZ">Mozambique
                                                                                         </option>
                                                                                         <option value="MMR">Myanmar
                                                                                         </option>
                                                                                         <option value="NAM">Namibia
                                                                                         </option>
                                                                                         <option value="NPL">Nepal
                                                                                         </option>
                                                                                         <option value="NLD">Netherlands
                                                                                         </option>
                                                                                         <option value="ANT">Netherlands
                                                                                             Antilles</option>
                                                                                         <option value="NCL">New
                                                                                             Caledonia
                                                                                         </option>
                                                                                         <option value="NZL">New Zealand
                                                                                         </option>
                                                                                         <option value="NIC">Nicaragua
                                                                                         </option>
                                                                                         <option value="NER">Niger
                                                                                         </option>
                                                                                         <option value="NGA">Nigeria
                                                                                         </option>
                                                                                         <option value="NOR">Norway
                                                                                         </option>
                                                                                         <option value="OMN">Oman
                                                                                         </option>
                                                                                         <option value="PAK">Pakistan
                                                                                         </option>
                                                                                         <option value="PSE">Palestinian
                                                                                             Territory</option>
                                                                                         <option value="PAN">Panama
                                                                                         </option>
                                                                                         <option value="PNG">Papua New
                                                                                             Guinea
                                                                                         </option>
                                                                                         <option value="PRY">Paraguay
                                                                                         </option>
                                                                                         <option value="PER">Peru
                                                                                         </option>
                                                                                         <option value="PHL">Philippines
                                                                                         </option>
                                                                                         <option value="POL">Poland
                                                                                         </option>
                                                                                         <option value="PRT">Portugal
                                                                                         </option>
                                                                                         <option value="PRI">Puerto Rico
                                                                                         </option>
                                                                                         <option value="QAT">Qatar
                                                                                         </option>
                                                                                         <option value="REU">Reunion
                                                                                         </option>
                                                                                         <option value="ROU">Romania
                                                                                         </option>
                                                                                         <option value="RUS">Russia
                                                                                         </option>
                                                                                         <option value="RWA">Rwanda
                                                                                         </option>
                                                                                         <option value="KNA">Saint Kitts
                                                                                             and
                                                                                             Nevis</option>
                                                                                         <option value="WSM">Samoa
                                                                                         </option>
                                                                                         <option value="SMR">San Marino
                                                                                         </option>
                                                                                         <option value="STP">Sao Tome &
                                                                                             Principe</option>
                                                                                         <option value="SAU">Saudi Arabia
                                                                                         </option>
                                                                                         <option value="SEN">Senegal
                                                                                         </option>
                                                                                         <option value="SRB">Serbia
                                                                                         </option>
                                                                                         <option value="SYC">Seychelles
                                                                                         </option>
                                                                                         <option value="SLE">Sierra Leone
                                                                                         </option>
                                                                                         <option value="SGP">Singapore
                                                                                         </option>
                                                                                         <option value="SVK">Slovakia
                                                                                         </option>
                                                                                         <option value="SVN">Slovenia
                                                                                         </option>
                                                                                         <option value="ZAF">South Africa
                                                                                         </option>
                                                                                         <option value="ESP">Spain
                                                                                         </option>
                                                                                         <option value="LKA">Sri Lanka
                                                                                         </option>
                                                                                         <option value="VCT">St Vincent
                                                                                             and
                                                                                             the Grenadines</option>
                                                                                         <option value="SUR">Suriname
                                                                                         </option>
                                                                                         <option value="SWZ">Swaziland
                                                                                         </option>
                                                                                         <option value="SWE">Sweden
                                                                                         </option>
                                                                                         <option value="CHE">Switzerland
                                                                                         </option>
                                                                                         <option value="TWN">Taiwan
                                                                                         </option>
                                                                                         <option value="TJK">Tajikistan
                                                                                         </option>
                                                                                         <option value="TZA">Tanzania
                                                                                         </option>
                                                                                         <option value="THA">Thailand
                                                                                         </option>
                                                                                         <option value="TGO">Togo
                                                                                         </option>
                                                                                         <option value="TON">Tonga
                                                                                         </option>
                                                                                         <option value="TTO">Trinidad &
                                                                                             Tobago</option>
                                                                                         <option value="TUN">Tunisia
                                                                                         </option>
                                                                                         <option value="TUR">Turkey
                                                                                         </option>
                                                                                         <option value="TKM">Turkmenistan
                                                                                         </option>
                                                                                         <option value="TCA">Turks &
                                                                                             Caicos
                                                                                             Islands</option>
                                                                                         <option value="UGA">Uganda
                                                                                         </option>
                                                                                         <option value="UKR">Ukraine
                                                                                         </option>
                                                                                         <option value="ARE">United Arab
                                                                                             Emirates</option>
                                                                                         <option value="GBR">United
                                                                                             Kingdom
                                                                                         </option>
                                                                                         <option value="USA"
                                                                                             selected="selected">United
                                                                                             States</option>
                                                                                         <option value="URY">Uruguay
                                                                                         </option>
                                                                                         <option value="UZB">Uzbekistan
                                                                                         </option>
                                                                                         <option value="VUT">Vanuatu
                                                                                         </option>
                                                                                         <option value="VEN">Venezuela
                                                                                         </option>
                                                                                         <option value="VNM">Vietnam
                                                                                         </option>
                                                                                         <option value="VGB">Virgin
                                                                                             Islands,
                                                                                             British</option>
                                                                                         <option value="VIR">Virgin
                                                                                             Islands,
                                                                                             U.S.</option>
                                                                                         <option value="YEM">Yemen
                                                                                         </option>
                                                                                         <option value="ZMB">Zambia
                                                                                         </option>
                                                                                         <option value="ZWE">Zimbabwe
                                                                                         </option>
                                                                                     </select>
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                         <div class="span6 form-dark">
                                                                             <li class="control-group">
                                                                                 <label for="editProPlanBillingVAT"
                                                                                     class="control-label">Billing
                                                                                     VAT</label>
                                                                                 <div class="controls">
                                                                                     <input type="text"
                                                                                         name="editProPlanBillingVAT"
                                                                                         id="editProPlanBillingVAT"
                                                                                         class="span12"
                                                                                         value="" />
                                                                                 </div>
                                                                             </li>
                                                                         </div>
                                                                     </div>
                                                                     <div id="editProPlanBillingVATInfoWrapper"
                                                                         class="row-fluid hide">
                                                                         <div class="span12 form-dark">
                                                                             <div id="editProPlanBillingVATInfo"
                                                                                 class="alert alert-info no-margin">
                                                                                 <p><b>VAT Information: </b>An additional
                                                                                     <span
                                                                                         class="editProPlanBillingVATInfoRatio"></span>%
                                                                                     EU VAT will be added to the purchase
                                                                                     <span
                                                                                         class="editProPlanBillingNonMaltaVATInfo">if
                                                                                         no valid VAT Number is
                                                                                         mentioned</span>
                                                                                     <span
                                                                                         class="editProPlanBillingMaltaVATInfo hide">(even
                                                                                         if a valid VAT is mentioned as
                                                                                         UptimeRobot is based in
                                                                                         Malta)</span>.
                                                                                 </p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </ul>
                                                             </fieldset>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div id="editProPlanBillingSuccessNotification"
                                             class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-success">Pro Plan billing details are
                                                 saved!</strong>
                                         </div>
                                         <div id="editProPlanBillingVatDifferenceNotification"
                                             class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                             <strong class="alert-error">The action couldn't be performed as this
                                                 update
                                                 causes a change in VAT rates (and the subscription amount). Please
                                                 contact
                                                 <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                     data-cfemail="">[email&#160;protected]</a>
                                                 and we'd love to help.</strong>.
                                         </div>
                                     </div>

                                 </div>

                             </div>
                         </div>
                         <div class="modal-footer">
                             <button type="button" data-dismiss="modal" class="btn"
                                 id="editProPlanBillingFormCancelButton">Close</button>
                             <button type="submit" class="btn btn-primary" id="editProPlanBillingFormSubmitButton">Save
                                 "Pro
                                 Plan" Billing Details</button>
                         </div>
                     </form>
                 </div>
                 <div class="modal hide fade" data-width="40%" id="newCND" tabindex="-1">
                     <div class="modal-header"></div>
                     <div class="modal-body">
                         <div class="tab-pane active fade in">
                             <div class="row-fluid">
                                 <div class="span12 grider">
                                     <div class="widget widget-simple">
                                         <div class="widget-header">
                                             <h4>New Custom Notification Delivery</h4>
                                         </div>
                                         <div class="widget-content">
                                             <div class="widget-body">
                                                 <form
                                                     action="inc/dml/monitorDML.php?action=saveContentDeliveryNotification"
                                                     class="form-horizontal" id="newCNDEmailSMTPForm" method="post"
                                                     name="newCNDEmailSMTPForm">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Custom Notification
                                                                             Delivery Information
                                                                         </h4>
                                                                     </li>
                                                                     <li class="form-horizontal control-group">
                                                                         <label class="control-label"
                                                                             for="newCNDType">Delivery Type <span
                                                                                 class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <select class="selecttwo span8"
                                                                                 id="newCNDType" name="newCNDType"
                                                                                 style="float:none;">
                                                                                 <option selected="selected" value="0">
                                                                                     Please Select
                                                                                 </option>
                                                                                 <option value="1">
                                                                                     E-mail
                                                                                 </option>
                                                                             </select>
                                                                         </div>
                                                                     </li>
                                                                     <div class="hide" id="newCNDEmailType">
                                                                         <li class="form-horizontal control-group">
                                                                             <label class="form-horizontal control-label"
                                                                                 for="newCNDEmailSubType">E-mail provider
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <select class="selecttwo span8"
                                                                                     id="newCNDEmailSubType"
                                                                                     name="newCNDEmailSubType"
                                                                                     style="float:none;">
                                                                                     <option selected="selected" value="0">
                                                                                         Please Select
                                                                                     </option>
                                                                                     <option value="1">
                                                                                         SMTP
                                                                                     </option>
                                                                                 </select>
                                                                             </div>
                                                                         </li>
                                                                         <div class="hide"
                                                                             id="newCNDEmailSMTPSubType">
                                                                             <li class="section-form">
                                                                                 <h4 class="test">Server
                                                                                     Information
                                                                                 </h4>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="newCNDEmailTypeHost">Host <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="newCNDEmailTypeHost"
                                                                                         name="newCNDEmailTypeHost"
                                                                                         type="text"
                                                                                         placeholder="smtp.example.com"
                                                                                         value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="newCNDEmailTypeUsername">Username
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="newCNDEmailTypeUsername"
                                                                                         name="newCNDEmailTypeUsername"
                                                                                         type="text"
                                                                                         placeholder="username@example.com"
                                                                                         value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="newCNDEmailTypePassword">Password
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="newCNDEmailTypePassword"
                                                                                         name="newCNDEmailTypePassword"
                                                                                         type="password" value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="newCNDEmailTypePort">Port <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="newCNDEmailTypePort"
                                                                                         name="newCNDEmailTypePort"
                                                                                         type="text" placeholder="465"
                                                                                         value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="newCNDEmailTypeSecureConnection">TLS/SSL
                                                                                     required</label>
                                                                                 <div class="controls">
                                                                                     <input
                                                                                         id="newCNDEmailTypeSecureConnection"
                                                                                         type="checkbox" value="1"
                                                                                         name="newCNDEmailTypeSecureConnection">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <div id="smtpVerifyMessageHolder"></div>
                                                                                 <button type="button"
                                                                                     class="btn btn-blue pull-right addVerifySMTPConnection">Verify</button>
                                                                             </li>
                                                                             <div id="cndDetailsForm"
                                                                                 class="hide">
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">Custom
                                                                                         Notification Delivery Details
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDFriendlyName">Friendly
                                                                                         Name <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDFriendlyName"
                                                                                             name="newEmailCNDFriendlyName"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDSenderAddress">Sender
                                                                                         Address <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDSenderAddress"
                                                                                             name="newEmailCNDSenderAddress"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDSenderName">Sender
                                                                                         Name <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDSenderName"
                                                                                             name="newEmailCNDSenderName"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDActive">Enabled:</label>
                                                                                     <div class="controls">
                                                                                         <input id="newEmailCNDActive"
                                                                                             type="checkbox" value="1"
                                                                                             name="newEmailCNDActive">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">Up
                                                                                         Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeUpSubject">Up
                                                                                         Notification Subject
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDTypeUpSubject"
                                                                                             name="newEmailCNDTypeUpSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeUpMessage">Up
                                                                                         Notification Message<span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="newEmailCNDTypeUpMessage" name="newEmailCNDTypeUpMessage" rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">Down
                                                                                         Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeDownSubject">Down
                                                                                         Notification
                                                                                         Subject <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDTypeDownSubject"
                                                                                             name="newEmailCNDTypeDownSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeDownMessage">Down
                                                                                         Notification <br>Message
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="newEmailCNDTypeDownMessage" name="newEmailCNDTypeDownMessage" rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">SSL
                                                                                         Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeSSLSubject">SSL
                                                                                         Notification Subject
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDTypeSSLSubject"
                                                                                             name="newEmailCNDTypeSSLSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeSSLMessage">SSL
                                                                                         Notification Message
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="newEmailCNDTypeSSLMessage" name="newEmailCNDTypeSSLMessage" rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">SSL
                                                                                         Expired Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeSSLExpiredSubject">SSL
                                                                                         Expired
                                                                                         Notification Subject <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="newEmailCNDTypeSSLExpiredSubject"
                                                                                             name="newEmailCNDTypeSSLExpiredSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="newEmailCNDTypeSSLExpiredMessage">SSL
                                                                                         Expired
                                                                                         Notification Message<span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="newEmailCNDTypeSSLExpiredMessage" name="newEmailCNDTypeSSLExpiredMessage"
                                                                                             rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <div
                                                                                         class="alert alert-info no-margin">
                                                                                         <strong
                                                                                             class="alert-info">Important!</strong>
                                                                                         This is a information message
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                 </ul>
                                                             </fieldset>
                                                         </div>
                                                     </div>
                                                     <div id="newCNDMessageHolder"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button class="btn" data-dismiss="modal" type="button">Close</button>
                         <button id="cndSubmitButton" type="submit" class="btn btn-primary hide"
                             type="submit">Create</button>
                         </form>
                     </div>
                 </div>
                 <div class="modal hide fade" data-width="40%" id="editCND" tabindex="-1">
                     <div class="modal-header"></div>
                     <div class="modal-body">
                         <div class="tab-pane active fade in">
                             <div class="row-fluid">
                                 <div class="span12 grider">
                                     <div class="widget widget-simple">
                                         <div class="widget-header">
                                             <h4>New Custom Notification Delivery</h4>
                                         </div>
                                         <div class="widget-content">
                                             <div class="widget-body">
                                                 <form
                                                     action="inc/dml/monitorDML.php?action=editContentDeliveryNotification"
                                                     class="form-horizontal" id="editCNDEmailSMTPForm" method="post"
                                                     name="editCNDEmailSMTPForm">
                                                     <div class="row-fluid">
                                                         <div class="span12 form-dark">
                                                             <fieldset>
                                                                 <ul class="form-list label-left list-bordered dotted">
                                                                     <li class="section-form">
                                                                         <h4 class="test">Custom Notification
                                                                             Delivery Information
                                                                         </h4>
                                                                     </li>
                                                                     <li class="form-horizontal control-group">
                                                                         <label class="control-label"
                                                                             for="editCNDType">Delivery Type <span
                                                                                 class="required">*</span></label>
                                                                         <div class="controls">
                                                                             <select class="selecttwo span8"
                                                                                 id="editCNDType" name="editCNDType"
                                                                                 style="float:none;">
                                                                                 <option selected="selected" value="0">
                                                                                     Please Select
                                                                                 </option>
                                                                                 <option value="1">
                                                                                     E-mail
                                                                                 </option>
                                                                             </select>
                                                                         </div>
                                                                     </li>
                                                                     <div class="" id="editCNDEmailType">
                                                                         <li class="form-horizontal control-group">
                                                                             <label class="form-horizontal control-label"
                                                                                 for="editCNDEmailSubType">E-mail
                                                                                 provider
                                                                                 <span
                                                                                     class="required">*</span></label>
                                                                             <div class="controls">
                                                                                 <select class="selecttwo span8"
                                                                                     id="editCNDEmailSubType"
                                                                                     name="editCNDEmailSubType"
                                                                                     style="float:none;">
                                                                                     <option selected="selected" value="0">
                                                                                         Please Select
                                                                                     </option>
                                                                                     <option value="1">
                                                                                         SMTP
                                                                                     </option>
                                                                                 </select>
                                                                             </div>
                                                                         </li>
                                                                         <div class=""
                                                                             id="editCNDEmailSMTPSubType">
                                                                             <li class="section-form">
                                                                                 <h4 class="test">Server
                                                                                     Information
                                                                                 </h4>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="editCNDEmailTypeHost">Host
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="editCNDEmailTypeHost"
                                                                                         name="editCNDEmailTypeHost"
                                                                                         type="text"
                                                                                         placeholder="smtp.example.com"
                                                                                         value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="editCNDEmailTypeUsername">Username
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="editCNDEmailTypeUsername"
                                                                                         name="editCNDEmailTypeUsername"
                                                                                         type="text"
                                                                                         placeholder="username@example.com"
                                                                                         value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="editCNDEmailTypePassword">Password
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="editCNDEmailTypePassword"
                                                                                         name="editCNDEmailTypePassword"
                                                                                         type="password" value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="editCNDEmailTypePort">Port
                                                                                     <span
                                                                                         class="required">*</span></label>
                                                                                 <div class="controls">
                                                                                     <input class="span6"
                                                                                         id="editCNDEmailTypePort"
                                                                                         name="editCNDEmailTypePort"
                                                                                         type="text" placeholder="465"
                                                                                         value="">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <label class="control-label"
                                                                                     for="editCNDEmailTypeSecureConnection">TLS/SSL
                                                                                     required</label>
                                                                                 <div class="controls">
                                                                                     <input
                                                                                         id="editCNDEmailTypeSecureConnection"
                                                                                         type="checkbox" value="1"
                                                                                         name="editCNDEmailTypeSecureConnection">
                                                                                 </div>
                                                                             </li>
                                                                             <li class="control-group">
                                                                                 <div id="editSmtpVerifyMessageHolder">
                                                                                 </div>
                                                                                 <button type="button"
                                                                                     class="btn btn-blue pull-right">Verify</button>
                                                                             </li>
                                                                             <div>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">Custom
                                                                                         Notification Delivery Details
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDFriendlyName">Friendly
                                                                                         Name <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDFriendlyName"
                                                                                             name="editEmailCNDFriendlyName"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDSenderAddress">Sender
                                                                                         Address <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDSenderAddress"
                                                                                             name="editEmailCNDSenderAddress"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDSenderName">Sender
                                                                                         Name <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDSenderName"
                                                                                             name="editEmailCNDSenderName"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDActive">Enabled:</label>
                                                                                     <div class="controls">
                                                                                         <input id="editEmailCNDActive"
                                                                                             type="checkbox" value="1"
                                                                                             name="editEmailCNDActive">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">Up
                                                                                         Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeUpSubject">Up
                                                                                         Notification Subject
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDTypeUpSubject"
                                                                                             name="editEmailCNDTypeUpSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeUpMessage">Up
                                                                                         Notification Message<span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="editEmailCNDTypeUpMessage" name="editEmailCNDTypeUpMessage" rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">Down
                                                                                         Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeDownSubject">Down
                                                                                         Notification
                                                                                         Subject <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDTypeDownSubject"
                                                                                             name="editEmailCNDTypeDownSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeDownMessage">Down
                                                                                         Notification <br>Message
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="editEmailCNDTypeDownMessage" name="editEmailCNDTypeDownMessage" rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">SSL
                                                                                         Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeSSLSubject">SSL
                                                                                         Notification Subject
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDTypeSSLSubject"
                                                                                             name="editEmailCNDTypeSSLSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeSSLMessage">SSL
                                                                                         Notification Message
                                                                                         <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="editEmailCNDTypeSSLMessage" name="editEmailCNDTypeSSLMessage" rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li class="section-form">
                                                                                     <h4 class="test">SSL
                                                                                         Expired Notification
                                                                                     </h4>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeSSLExpiredSubject">SSL
                                                                                         Expired
                                                                                         Notification Subject <span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <input class="span6"
                                                                                             id="editEmailCNDTypeSSLExpiredSubject"
                                                                                             name="editEmailCNDTypeSSLExpiredSubject"
                                                                                             type="text" value="">
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <label class="control-label"
                                                                                         for="editEmailCNDTypeSSLExpiredMessage">SSL
                                                                                         Expired
                                                                                         Notification Message<span
                                                                                             class="required">*</span></label>
                                                                                     <div class="controls">
                                                                                         <textarea class="span6" id="editEmailCNDTypeSSLExpiredMessage" name="editEmailCNDTypeSSLExpiredMessage"
                                                                                             rows="3"
                                                                                             type="text"></textarea>
                                                                                     </div>
                                                                                 </li>
                                                                                 <li
                                                                                     class="form-horizontal control-group">
                                                                                     <div
                                                                                         class="alert alert-info no-margin">
                                                                                         <strong
                                                                                             class="alert-info">Important!</strong>
                                                                                         This is a information message
                                                                                     </div>
                                                                                 </li>
                                                                             </div>
                                                                 </ul>
                                                             </fieldset>
                                                         </div>
                                                     </div>
                                                     <div id="editCNDMessageHolder"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button class="btn" data-dismiss="modal" type="button">Close</button>
                         <button type="submit" class="btn btn-primary" type="submit">Update</button>
                         </form>
                     </div>
                 </div>
             </div>

         </div>

     </div>
 @endsection
