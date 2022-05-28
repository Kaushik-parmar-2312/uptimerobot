<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard | UptimeRobot</title>
    <meta name="description" content="Free Website Uptime Monitoring">

    <meta property="og:title" content="Dashboard | UptimeRobot" />
    <meta property="og:site_name" content="UptimeRobot" />
    <meta property="og:description" content="Free Website Uptime Monitoring" />
    <meta property="og:image" content="https://www.uptimerobot.com/facebook.jpg?v=1645174022" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="author" content="">

    <link href="{{ asset('userside/assets/css/lib/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/lib/bootstrap-3-3-7-grid.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/lib/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/ur-extension.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/ur.css?v1.189')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/style2.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/ur-coloring.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/ur-utility.css')}}" rel="stylesheet">
    <link href="{{ asset('userside/assets/css/lib/ladda-themeless.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('userside/assets/css/lib/cookieconsent.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('userside/assets/plugins/pl-form/noUiSlider/nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('userside/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('userside/assets/css/lib/spectrum.min.css')}}" />
    <link href="{{ asset('userside/assets/img/apple-touch-icon-152.png')}}" rel="apple-touch-icon" sizes="152x152" />


    <link rel="shortcut icon" href="{{ asset('userside/assets/ico/favicon.ico')}}">


</head>

<body>

    <a class="sessionWarning hide" href="#sessionWarning" data-toggle="modal">.</a>
    <a class="accountPausedNotification hide" href="#accountPausedNotification" data-toggle="modal">.</a>
    <div class="page-container">
        <div id="header-container">
            <div id="header">
                <div id="logo" style="margin: 24px 0 0 15px;">
                    <a href="/">
                        <img class="normal-logo" src="{{ asset('userside/assets/img/uptimerobot-logo-dark.svg')}}" alt="UptimeRobot logo" width="180" />
                        <img class="tvmode-logo" src="{{ asset('userside/assets/img/uptimerobot-logo.svg')}}" alt="UptimeRobot logo" width="180" style="display:none" />
                    </a>
                </div>
                <div id="logoMiniWrap" class="margin-top5 hide">
                    <div style="float: left;">
                        <div id="logo-mini" style="margin: 5px 0 0 15px;">
                            <a href="/">
                                <img class="normal-logo" src="{{ asset('userside/assets/img/uptimerobot-logo-dark.svg')}}" alt="UptimeRobot logo" width="150" />
                                <img class="tvmode-logo" src="{{ asset('userside/assets/img/uptimerobot-logo.svg')}}" alt="UptimeRobot logo" width="150" style="display:none" />
                            </a>
                        </div>
                    </div>
                    <div style="float: right; margin-right:10px;">
                        <div class="btn-group pull-right">
                            <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="fontello-icon-menu"></i></a>
                            <ul class="dropdown-menu dropdown-menu-arrow" style="min-width: 100px;">
                                <li style="padding: 0 10px;"><a href="dashboard#mainDashboard" class="mainDashboard mainDashboardMobile">Dashboard</a></li>
                                <li style="padding: 0 10px;"><a href="{{ url('/statuspage') }}" class="mySettings mySettingsMobile">Status pages</a></li>
                                <li style="padding: 0 10px;"><a href="dashboard#mySettings" class="mySettings mySettingsMobile">My Settings</a></li>
                                <li style="padding: 0 10px;"><a href="inc/dml/userDML.php?action=logoutUser">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-container">
            <a href="#upgradeAccount" class="upgradeProAccount hide" data-toggle="modal">.</a>
            <div id="main-content" class="main-content psp">
                <div id="headerMenuWrap" class="row-fluid">
                    <ul id="headerMenu" class="unstyled inline f16">
                        <li class="margin-right20 standardHeaderItem" style="position: relative;">
                            <a href="#upgradeAccount" class="upgradeProAccount btn btn-green btn-large" data-toggle="modal" style="margin-top: -10px;" data-cta-source="main_header-cta">Upgrade</a>
                        </li>
                        <li class="margin-right20 standardHeaderItem"><a href="dashboard#mainDashboard" class="mainDashboard text-color">Dashboard</a></li>
                        <li class="margin-right20 standardHeaderItem"><a href="{{ url('/statuspage') }}" class="mySettings text-color">Status
pages</a></li>
                        <li class="margin-right20 standardHeaderItem"><a href="dashboard#mySettings" class="mySettings text-color">My
Settings</a></li>
                        <li class="standardHeaderItem" style="float: right;">
                            <a href="inc/dml/userDML.php?action=logoutUser" class="text-dirtyred">Logout</a>
                        </li>
                        <li class="margin-right20 standardHeaderItem" style="float: right;">
                            <img src="userside/assets/img/icon/user-icon.svg" width="24" alt="user icon" class="margin-right10" /><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e9839c87888e888d81989c8c8c87d8dddaa98e84888085c78a8684">[email&#160;protected]</a>
                        </li>
                    </ul>
                </div>

                <div id="psp-placeholder" style="min-height: 70vh"></div>
                <div id="psp-dashboard" class="hidden row-fluid" style="margin-bottom: 30px;">
                    <div class="span4">
                        <div class="sidebar-item" style="width: 100%; position: static;">
                            <div class="profile">
                                <a class="btn btn-green btn-large btn-glyp addPsp" href="#newPsp" data-toggle="modal">
                                    <i class="fontello-icon-plus-1"></i> Add Status Page
                                </a>
                            </div>
                        </div>
                        <div class="pspContainerList">
                            <div id="startStopPspSuccessNotification" class="alert alert-success hide">
                            </div>
                            <div class="pspTableShowHideList ">
                                <div class="pspTableList" id="pspListBoxMainContainer">
                                    <div class="pspTableHeaderContainer">
                                        <span class="pspTitleName header">Public Status Pages</span>
                                        <span class="pspTitleActions">Actions</span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="5" class="pspLimitList">
                            <input type="hidden" value="0" id="pspCount">
                            <input type="hidden" value="0" id="pspActiveCount">
                        </div>
                    </div>
                    <div class="span8 margin-remove" style="margin-left: 0">
                        <div class="page-head psp">
                            <h3 id="displayPspFriendlyName">Loading...</h3>
                        </div>
                        <ul class="nav nav-tabs" id="psp-settings-nav">
                            <li class="active"><a href="#psp-monitors">Monitors</a></li>
                            <li><a href="#psp-appearance">Appearance</a></li>
                            <li><a href="#psp-settings">Global settings</a></li>
                            <li><a href="#psp-annoucements">Announcements</a></li>
                        </ul>
                        <div class="widget-simple" style="border: 1px solid transparent;">
                            <div class="tab-content" style="overflow: hidden">
                                <div class="tab-pane active" id="psp-monitors" style="position: relative;">
                                    <form id="editPspMonitorsForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPspMonitors" autocomplete="off">
                                        <fieldset>
                                            <ul class="form-list label-left" id="editPsp">
                                                <li id="editPspMonitorsSelectedWrap" class="control-group">
                                                    <div class="row-fluid">
                                                        <div class="span6">
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <h4>Add monitors</h4>
                                                                </div>
                                                                <div class="span6" style="margin-top: 5px;">
                                                                    <span class="input-prepend pull-right">
<span class="add-on"><i class="fontello-icon-search"></i></span>
                                                                    <input id="monitor-search" type="text" placeholder="Search for a monitor...">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="m-table-container">
                                                                <table class="table table-striped table-bordered boo-table" id="editPspMonitorsTable">
                                                                    <tbody>
                                                                    </tbody>
                                                                </table>
                                                                <input type="hidden" id="monitors-page-psp" value="1" />
                                                                <input type="hidden" id="monitorsLastRowReached" value="0" />
                                                            </div>
                                                            <div style="margin-top: 15px;">
                                                                <button type="button" class="add-all btn btn-inverse psp-type-chooser span12">
Add all monitors
</button>
                                                            </div>
                                                        </div>
                                                        <div class="span6">
                                                            <div class="row-fluid">
                                                                <div class="span6">
                                                                    <h4>Selected monitors</h4>
                                                                </div>
                                                                <div class="span6">
                                                                    <select id="editPspSort" class="selecttwo span8" name="editPspSort" style="float:right;">
<option value="1">Friendly Name (a-z)</option>
<option value="2">Friendly Name (z-a)</option>
<option value="3">Status (up-down-paused)</option>
<option value="4">Status (down-up-paused)</option>
</select>
                                                                </div>
                                                            </div>
                                                            <div id="edit-psp-select-monitors" class="hidden">
                                                                <div class="m-table-container">
                                                                    <table class="table table-striped table-bordered boo-table" id="editPspMonitorsTableSelected">
                                                                        <tbody>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div id="edit-psp-all-monitors" class="alert alert-info alert-block hidden text-center" style="padding: 30px 0; max-height: calc(100vh - 450px)">
                                                                <h4>All 0 monitors added.</h4>
                                                                <p style="margin: 10px 0;">Monitors created in the future will be auto-added.</p>
                                                                <button type="button" class="remove-all btn btn-inverse psp-type-chooser" disabled>
Remove all
</button>
                                                            </div>
                                                            <div class="edit-psp-monitors-no-monitors alert alert-block hidden" style="padding: 30px 0; max-height: calc(100vh - 450px)">
                                                                <h4>
                                                                    <i class="fontello-icon-warning-empty" style="font-size: 40px;"></i><br /><br /> This status page has no monitors!
                                                                </h4>
                                                                <p>
                                                                    Select some monitors in the left table, or add all at once.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <input type="hidden" name="editPspMonitorsSelected" />
                                        </fieldset>

                                        <div class="clearfix">
                                            <button type="submit" class="btn btn-success span12" style="margin-bottom: 15px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="psp-appearance">
                                    <form enctype="multipart/form-data" id="editPspAppearanceForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPspAppearance" autocomplete="off">
                                        <fieldset>
                                            <ul class="form-list label-left list-bordered dotted" id="editPsp">
                                                <li class="section-form">
                                                    <h4>Page settings</h4>
                                                </li>
                                                <li class="control-group">
                                                    <label class="control-label">Layout</label>
                                                    <div class="controls">
                                                        <div class="row-fluid text-center">
                                                            <div class="span6">
                                                                <label>
<img src="assets/img/psp-layout-1.png" alt="layout 1" style="width: 80%" /><br /><br />
<input id="editPspPageLayout1" type="radio" value="0" name="editPspPageLayout" checked style="margin-top: 0;">
<span style="margin-left: 5px; display: inline-block;">Layout 1 - logo on left</span>
</label>
                                                            </div>
                                                            <div class="span6">
                                                                <label>
<img src="assets/img/psp-layout-2.png" alt="layout 2" style="width: 80%" /><br /><br />
<input id="editPspPageLayout2" type="radio" value="1" name="editPspPageLayout" style="margin-top: 0;">
<span style="margin-left: 5px; display: inline-block;">Layout 2 - logo on center</span>
</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label class="control-label">Theme</label>
                                                    <div class="controls">
                                                        <div class="row-fluid text-center">
                                                            <div class="span6">
                                                                <label>
<img src="assets/img/psp-layout-1.png" alt="Light theme" style="width: 80%" /><br /><br />
<input id="editPspPageTheme1" type="radio" value="light" name="editPspPageTheme" checked style="margin-top: 0;">
<span style="margin-left: 5px; display: inline-block;">Light</span>
</label>
                                                            </div>
                                                            <div class="span6">
                                                                <label>
<img src="assets/img/psp-layout-dark.png" alt="Dark theme" style="width: 80%" /><br /><br />
<input id="editPspPageTheme2" type="radio" value="dark" name="editPspPageTheme" style="margin-top: 0;">
<span style="margin-left: 5px; display: inline-block;">Dark</span>
</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label class="control-label">Density</label>
                                                    <div class="controls">
                                                        <div class="row-fluid text-center">
                                                            <div class="span6">
                                                                <label>
<img src="assets/img/psp-layout-1.png" alt="Light theme" style="width: 80%" /><br /><br />
<input id="editPspPageDensity1" type="radio" value="normal" name="editPspPageDensity" checked style="margin-top: 0;">
<span style="margin-left: 5px; display: inline-block;">Normal</span>
</label>
                                                            </div>
                                                            <div class="span6">
                                                                <label>
<img src="assets/img/psp-layout-compact.png" alt="Compact mode" style="width: 80%" /><br /><br />
<input id="editPspPageDensity2" type="radio" value="compact" name="editPspPageDensity" style="margin-top: 0;">
<span style="margin-left: 5px; display: inline-block;">Compact</span>
</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="section-form">
                                                    <h4>Branding</h4>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspLogo" class="control-label">Logo</label>
                                                    <div class="controls">
                                                        <p id="editPspLogoImage" class="hide" style="max-width: 240px; padding: 30px;"></p>
                                                        <input id="editPspLogo" type="file" name="editPspLogo" accept=".jpg,.png">
                                                        <input id="editPspLogoNoChange" type="hidden" name="editPspLogoNoChange" value="1">
                                                        <p id="editPspLogoActionsWrapper" class="help-block hide"><a href="#no" id="editPspLogoActionsNewLogo">Change logo</a> or <a href="#no" id="editPspLogoActionsRemoveLogo"><span id="editPspLogoActionsRemoveLogoText">remove a
logo</span></a></p>
                                                    </div>
                                                    <span id="editPspLogoHelp" class="help-block">(can be .jpg, .jpeg or .png and no bigger than
400x200px and 150kb.)</span>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPsp" class="control-label">Favicon</label>
                                                    <div class="controls">
                                                        <p id="editPspIconImage" class="hide"></p>
                                                        <input id="editPspIcon" type="file" name="editPspIcon" accept=".ico,.png,.svg">
                                                        <input id="editPspIconNoChange" type="hidden" name="editPspIconNoChange" value="1">
                                                        <p id="editPspIconActionsWrapper" class="help-block hide"><a href="#no" id="editPspIconActionsNewIcon">Change favicon</a> or <a href="#no" id="editPspIconActionsRemoveIcon"><span id="editPspIconActionsRemoveIconText">remove a favicon</span></a></p>
                                                    </div>
                                                    <span id="editPspIconHelp" class="help-block">(can be .png, .gif or .ico and no bigger than
96x96px and 150kb.)</span>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspHideURLogo" class="control-label">Remove UptimeRobot logo</label>
                                                    <div class="controls">
                                                        <span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-hide_ur_logo">Upgrade</a>
                                                    </div>
                                                </li>
                                                <li class="section-form">
                                                    <h4>Colors</h4>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspMainColor" class="control-label">Header background color</label>
                                                    <div class="controls">
                                                        <input id="editPspMainColor" name="editPspMainColor" value='#131a26' type="text" maxlength="7" disabled />
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-custom_design">Upgrade</a>
                                                        </div>
                                                    </div>
                                                    <span class="help-block" style="margin-top: 1px;">Color used in header.</span>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspTextColor" class="control-label">Header text color</label>
                                                    <div class="controls">
                                                        <input id="editPspTextColor" name="editPspTextColor" value='#ffffff' type="text" maxlength="7" disabled />
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-custom_design">Upgrade</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspLinkColor" class="control-label">Link color</label>
                                                    <div class="controls">
                                                        <input id="editPspLinkColor" name="editPspLinkColor" value='#3bd671' type="text" maxlength="7" disabled />
                                                        <div style="margin-top: 10px; margin-bottom: 15px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-custom_design">Upgrade</a>
                                                        </div>
                                                        <div style="margin-top: 15px"><a href="#" id="resetColor">Reset to default colors</a></div>
                                                    </div>
                                                </li>
                                                <li class="section-form">
                                                    <h4>Font</h4>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspFontFamily" class="control-label">Font family</label>
                                                    <div class="controls">
                                                        <div id="font-picker" class="disabled"></div>
                                                        <input type="hidden" id="editPspFontFamily" name="editPspFontFamily" value="Roboto" />
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-custom_design">Upgrade</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="section-form">
                                                    <h4>Features</h4>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspShowBars" class="control-label">Show bar charts</label>
                                                    <div class="controls">
                                                        <input id="editPspShowBars" type="checkbox" value="true" name="editPspShowBars" checked disabled>
                                                        <span class="help-block">Show or hide the bar charts for uptime of a monitor <strong>on a status page home screen.</strong></span>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspShowUptimePercentage" class="control-label">Show uptime percentage</label>
                                                    <div class="controls">
                                                        <input id="editPspShowUptimePercentage" type="checkbox" value="true" name="editPspShowUptimePercentage" checked disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Show or hide the uptime percentage of a monitor near the monitor
name <strong>on a status page home screen.</strong></span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspEnableFloatingStatus" class="control-label">Enable floating status bar</label>
                                                    <div class="controls">
                                                        <input id="editPspEnableFloatingStatus" type="checkbox" value="true" name="editPspEnableFloatingStatus" disabled>
                                                        <span class="help-block">Enable or disable the floating bar sticked to the bottom with the overall count of up and down monitors.</span>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspShowOverallUptime" class="control-label">Show overall percentage</label>
                                                    <div class="controls">
                                                        <input id="editPspShowOverallUptime" type="checkbox" value="true" name="editPspShowOverallUptime" checked disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Show or hide the overall uptime (last 24 h, last 7 and 30 days) section
below monitors list <strong>on a status page home screen.</strong></span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspShowOutageUpdates" class="control-label">Show outage updates and the latest downtime</label>
                                                    <div class="controls">
                                                        <input id="editPspShowOutageUpdates" type="checkbox" value="true" name="editPspShowOutageUpdates" disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Show or hide downtimes grouped by day for a specific monitor in the Announcement feed. The latest downtime will be visible in header. This won't hide the events on a details page.</span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspShowOutageDetails" class="control-label">Show outage details</label>
                                                    <div class="controls">
                                                        <input id="editPspShowOutageDetails" type="checkbox" value="true" name="editPspShowOutageDetails" checked disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Show outage reason details (like status code) to give more explanation for your status page users.</span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspEnableDetailsPage" class="control-label">Enable details page</label>
                                                    <div class="controls">
                                                        <input id="editPspEnableDetailsPage" type="checkbox" value="true" name="editPspEnableDetailsPage" checked disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Details page contains uptime, response times and up/down event
history.</span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspShowMonitorURL" class="control-label">Show the monitor URL</label>
                                                    <div class="controls">
                                                        <input id="editPspShowMonitorURL" type="checkbox" value="true" name="editPspShowMonitorURL" disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Show monitor URL and type to give your users more details on your Status page.</span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspHidePausedMonitors" class="control-label">Hide paused monitors</label>
                                                    <div class="controls">
                                                        <input id="editPspHidePausedMonitors" type="checkbox" value="true" name="editPspHidePausedMonitors" disabled>
                                                        <div style="margin-top: 10px;">
                                                            <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                            <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-adv_features">Upgrade</a>
                                                        </div>
                                                        <span class="help-block">Don't display paused monitors on your Status page.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </fieldset>

                                        <div id="editPspAppereanceErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
                                        <div>
                                            <button type="submit" class="btn btn-success span12" style="margin-bottom: 15px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="psp-settings">
                                    <form id="editPspForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPsp" autocomplete="off">
                                        <fieldset>
                                            <ul class="form-list label-left list-bordered dotted" id="editPsp">
                                                <li class="control-group">
                                                    <label for="editPspURLOptions" class="control-label">URL</label>
                                                    <div class="controls">
                                                        <span id="editPspCustomURLWrapper" class="hide"><a id="editPspCustomURL" href="">Custom URL</a>
and </span><a id="editPspURL" href="">Standard URL</a>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                    <div class="controls">
                                                        <input id="editPspFriendlyName" class="span6" type="text" value="" name="editPspFriendlyName">
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspHomepageLink" class="control-label">Homepage URL</label>
                                                    <div class="controls">
                                                        <input id="editPspHomepageLink" class="span6" type="url" value="" placeholder="https://yoursite.com" maxlength="255" name="editPspHomepageLink">
                                                    </div>
                                                    <span class="help-block">Set up the URL for a linkable logo / status page name in the header of the Status page.</span>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspCustomDomain" class="control-label">Custom Domain</label>
                                                    <div class="controls">
                                                        <input id="editPspCustomDomain" class="span6" type="text" value="" placeholder="status.site.com" name="editPspCustomDomain" disabled>
                                                    </div>
                                                    <div style="margin-top: 10px;">
                                                        <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-custom_domain">Upgrade</a>
                                                    </div>
                                                    <span class="help-block" style="margin-top: 5px">Host status page on your own domain! Make sure you <strong>create a CNAME DNS record</strong> for your domain to
<code>stats.uptimerobot.com</code>. It can take up to 24 hours for the custom domain to be
activated.</span>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspPassword" class="control-label">Password</label>
                                                    <div class="controls">
                                                        <div>
                                                            <input id="editPspPassword" class="span6" type="password" value="" checked="" name="editPspPassword" autocomplete="new-password">
                                                        </div>
                                                        <a href="#" id="editPasswordToggle" class="hidden" style="margin-top: 5px; display: inline-block;">Change password</a>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspSEOGACode" class="control-label">Google Analytics code</label>
                                                    <div class="controls">
                                                        <input id="editPspSEOGACode" class="span6" type="text" value="" placeholder="UA-xxxxxxxxx-x" name="editPspSEOGACode" maxlength="16" disabled>
                                                    </div>
                                                    <div style="margin-top: 10px;">
                                                        <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_psp-analytics">Upgrade</a>
                                                    </div>
                                                    <span class="help-block" style="margin-top: 5px;">It works only if you have set up a Custom Domain for status page. Please use format like <code>UA-xxxxxxxxx-x</code> or <code>G-xxxxxxxxxx</code>.
We are using <a href="https://developers.google.com/analytics/devguides/collection/gtagjs" target="_blank" rel="noopener nofollow">Global site tag (gtag.js) - Google Analytics" implementation</a>.</span>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspDisplayCKBar" class="control-label">Display cookie bar</label>
                                                    <div class="controls">
                                                        <input id="editPspDisplayCKBar" type="checkbox" value="true" name="editPspDisplayCKBar">
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspSEONoIndex" class="control-label">Robots meta tag</label>
                                                    <div class="controls">
                                                        <select id="editPspSEONoIndex" name="editPspSEONoIndex">
<option value="1">noindex</option>
<option value="0">index</option>
</select>
                                                        <span class="help-block">Meta robots "index" means your website will be visible in search engines. Setting value to "noindex" will hide your Status page in search engines.</span>
                                                    </div>
                                                </li>
                                                <li class="control-group">
                                                    <label for="editPspAllowSharing" class="control-label">Help us improve</label>
                                                    <div class="controls">
                                                        <input id="editPspAllowSharing" type="checkbox" value="true" name="editPspAllowSharing" checked>
                                                        <span class="help-block">Help us improve the Status Pages by sharing the analytics data.</span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </fieldset>

                                        <div id="editPspErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
                                        <div>
                                            <button type="submit" class="btn btn-success span12" style="margin-bottom: 15px;">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="psp-annoucements">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="psp-new-container" class="hidden text-center">
                    <h2 style="margin-top: 0">
                        Create your first status page!
                    </h2>
                    <p>
                        Showcase your service uptime with a beautiful status page. Communicate incidents and maintenances to your users with status pages and decent e-mails.
                    </p>
                    <div class="margin-bottom30 margin-top30">
                        <img src="assets/img/psp-layout-1.png" alt="status apge example" width="500">
                    </div>
                    <a class="btn btn-green btn-large btn-glyp addPsp" href="#newPsp" data-toggle="modal">
                        <i class="fontello-icon-plus-1"></i> Add Status Page
                    </a>
                    <span style="padding: 0 10px">or</span>
                    <a class="btn btn-ghost btn-large" href="https://uptimerobot.com/status-page" target="_blank" rel="noopener">
Learn more
</a>
                </div>

                <div id="footer" class="row-fluid text-color" style="background:#dfdfdf; padding: 10px 10px 0 10px; font-size: 11px; height:40px;">
                    <div class="span12">
                        <a href="privacyPolicy">Privacy Policy</a> /
                        <a href="termsOfService">Terms</a> /
                        <a href="locations">Locations & IPs</a> --- <a href="faq">FAQ</a> /
                        <a href="support">Contact Us</a> --- <a href="api">API</a>
                    </div>
                </div>
                <div id="preview-email" class="modal hide fade" role="dialog">
                    <div style="font-family: 'Roboto', Arial, sans-serif; color: #131a26; background: #fefefe; min-height: 500px;">
                        <div class="pspPreviewMailBg" style="background: #131a26; padding: 30px 10px;">
                            <div style="max-width: 600px; margin: 0 auto;">
                                <table style="width: 100%; color: #ffffff" class="pspPreviewMailColor">
                                    <tr>
                                        <td>
                                            <h1 class="pspPreviewMailTitle" style="color: #fff; margin: 0;">UptimeRobot</h1>


                                        </td>
                                        <td style="text-align: right;">
                                            Status update
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div style="max-width: 600px; margin: 30px auto 0 auto; padding: 0 10px;">
                            <div style="background: #ffffff; border-radius: 6px; box-shadow: 0 20px 40px 0 rgba(0,0,0,0.1); padding: 15px; border: 1px solid #efefef">
                                <h2 style="margin-top: 0; font-size: 16px;">New info on <span class="pspPreviewMailTitle">UptimeRobot</span></h2>
                                <div style="background: #f2fafd; padding: 30px; color: #131a26; border-radius: 6px;">
                                    <h4 style="font-size: 24px; color: #131a26; margin-top: 0; margin-bottom: 10px;">Planned outage</h4>
                                    <div>
                                        <span style="color:#687790; font-size: 12px; background: #e6e7e8; padding: 3px 10px; display: inline-block; border-radius: 4px;">July 11, 2020, 08:07</span>
                                    </div>
                                    <p style="color: #687790; margin-bottom: 0; margin-top: 15px;">All systems will be unavailable on Thursday midnight UTC.</p>
                                </div>
                            </div>
                            <div style="font-size: 12px; color: #687790; text-align: center; padding: 15px 0;">
                                This email was sent by <a href="#" style="color:#3bd671">UptimeRobot</a>.<br /> You can unsubscribe from these emails <a href="#" style="color:#3bd671">here</a>.
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="upp" value="" />
                <input type="hidden" id="monitor-count" value="0" />
                <div id="newMonitor" class="modal hide fade" tabindex="-1" data-width="60%">
                    <div class="modal-header"> </div>
                    <form id="newMonitorForm" class="form-horizontal" method="POST" action="inc/dml/monitorDML.php?action=newMonitor" autocomplete="off">
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
                                                                        <h4 class="test">Monitor Information</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <input type="hidden" id="userMonitorLimit" value="5" />
                                                                        <label for="newMonitorType" class="control-label">Monitor Type</label>
                                                                        <div class="controls">
                                                                            <select id="newMonitorType" class="selecttwo span6" name="newMonitorType">
<option selected="selected" value="0">Please Select</option>
<option value="1">HTTP(s)</option>
<option value="2">Keyword</option>
<option value="3">Ping</option>
<option value="4">Port</option>
<option value="5" disabled="disabled" class="newMonitorType is-pro">Heartbeat</option>
</select>
                                                                        </div>
                                                                    </li>

                                                                    <div class="hide" id="newHTTPMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newHTTPMonitorFriendlyName" class="span6" type="text" value="" name="newHTTPMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorURL" class="control-label">URL (or IP)</label>
                                                                            <div class="controls">
                                                                                <input id="newHTTPMonitorURL" class="span8" type="text" name="newHTTPMonitorURL" value="https://">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="newHTTPMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="newHTTPMonitorInterval" name="newHTTPMonitorInterval" value="300" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newHTTPMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <div id="newHTTPMonitorAdvancedSettingsIgnoreSSLErrors" style="margin-bottom: 15px;">
                                                                            <li class="control-group">
                                                                                <label for="newHTTPMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
                                                                                <div class="controls">
                                                                                    <input id="newHTTPMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="newHTTPMonitorIgnoreSSLErrors" value="1" disabled="disabled">
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newHTTPMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
                                                                                <div class="controls">
                                                                                    <input id="newHTTPMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="newHTTPMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <div class="sslHttpsWarning">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
                                                                        </div>
                                                                        <li class="section-form">
                                                                            <h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#newHTTPMonitorAdvancedSettings">show/hide</a></small></h4>
                                                                        </li>
                                                                        <div class="collapse" id="newHTTPMonitorAdvancedSettings">
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newHTTPMonitorAdvancedSettingsAuthentication">
                                                                                    <li class="control-group">
                                                                                        <label for="newHTTPMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input id="newHTTPMonitorHTTPUsername" class="span6" type="text" name="newHTTPMonitorHTTPUsername" value="" autocomplete="off">
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="control-group">
                                                                                        <label for="newHTTPMonitorHTTPPassword" class="control-label">Password</label>
                                                                                        <div class="controls">
                                                                                            <input id="newHTTPMonitorHTTPPassword" class="span6" type="text" name="newHTTPMonitorHTTPPassword" value="" autocomplete="new-password">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newHTTPMonitorAuthType" class="control-label">Authentication Type</label>
                                                                                        <div class="controls">
                                                                                            <div data-toggle="buttons-radio" class="btn-group">
                                                                                                <button onclick="javascript:document.getElementById('newHTTPMonitorAuthType').value='1';" class="btn btn-green active" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
                                                                                                <button onclick="javascript:document.getElementById('newHTTPMonitorAuthType').value='2';" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
                                                                                            </div>
                                                                                            <input type="hidden" id="newHTTPMonitorAuthType" value="1" name="newHTTPMonitorAuthType" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Http Statuses <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsCustomHttpStatuses">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newHTTPMonitorAdvancedSettingsCustomHttpStatuses">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal"
                                                                                            data-cta-source="new_monitor-adv_monitor_settings-http_statuses">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="opaci15 blur disableTouch noSelect">
                                                                                        <div class="row-fluid">
                                                                                            <div class="statusCodesBlock upstatuses">
                                                                                                <li class="control-group">
                                                                                                    <label for="editHTTPStatusCodesUpValues" class="control-label">Up Status Codes: </label>
                                                                                                </li>
                                                                                                <li class="control-group upStatusesBlock"></li>
                                                                                            </div>
                                                                                            <div class="statusCodesBlock downstatuses">
                                                                                                <li class="control-group">
                                                                                                    <label for="editHTTPStatusCodesUpValues" class="control-label">Down Status Codes: </label>
                                                                                                </li>
                                                                                                <li class="control-group downStatusesBlock"></li>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row-fluid">
                                                                                            <button type="button" class="httpStatusCodesResetBtn btn btn-grey btn-mini pull-right" disabled>
Reset HTTP Statuses
</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newHTTPMonitorAdvancedSettingsCustomHeaders">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal"
                                                                                            data-cta-source="new_monitor-adv_monitor_settings-custom_headers">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <li class="control-group opaci15 blur">
                                                                                        <label for="newHTTPMonitorCustomHeaders" class="control-label">Custom Headers</label>
                                                                                        <div class="newHTTPMonitorCustomHeadersContainer monitorCustomHeadersContainer">
                                                                                        </div>
                                                                                        <div class="controls">
                                                                                            <button type="button" class="monitorCustomHeaderBtn newHTTPMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="newHTTPMonitorCustomHeaders" disabled>
Add Custom Header</button>
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hide" id="newKeywordMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordMonitorFriendlyName" class="span6" type="text" value="" name="newKeywordMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorURL" class="control-label">URL (or IP)</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordMonitorURL" class="span8" type="text" name="newKeywordMonitorURL" value="https://">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorKeywordValue" class="control-label">Keyword</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordMonitorKeywordValue" class="span6" type="text" value="" name="newKeywordMonitorKeywordValue">
                                                                                <span class="help-block">(the keyword must be present in the HTML source)</span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordCaseType" class="control-label">Case-insensitive</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordCaseType" class="leftFloat" type="checkbox" name="newKeywordCaseType" value="1">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorKeywordType" class="control-label">Alert When</label>
                                                                            <div class="controls">
                                                                                <div data-toggle="buttons-radio" class="btn-group">
                                                                                    <button onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">Keyword Exists</button>
                                                                                    <button onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Keyword Not Exists</button>
                                                                                </div>
                                                                                <input type="hidden" id="newKeywordMonitorKeywordType" value="" name="newKeywordMonitorKeywordType" />
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="newKeywordMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="newKeywordMonitorInterval" name="newKeywordMonitorInterval" value="300" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newKeywordMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <div id="newKeywordMonitorAdvancedSettingsIgnoreSSLErrors">
                                                                            <li class="control-group">
                                                                                <label for="newKeywordMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
                                                                                <div class="controls">
                                                                                    <input id="newKeywordMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="newKeywordMonitorIgnoreSSLErrors" value="1" disabled="disabled">
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newKeywordMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
                                                                                <div class="controls">
                                                                                    <input id="newKeywordMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="newKeywordMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <div class="sslHttpsWarning">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
                                                                        </div>
                                                                        <li class="section-form">
                                                                            <h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#newKeywordMonitorAdvancedSettings">show/hide</a></small></h4>
                                                                        </li>
                                                                        <div class="collapse" id="newKeywordMonitorAdvancedSettings">
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#newKeywordMonitorAdvancedSettings" data-target="#newKeywordMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newKeywordMonitorAdvancedSettingsAuthentication">
                                                                                    <li class="control-group">
                                                                                        <label for="newKeywordMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input id="newKeywordMonitorHTTPUsername" class="span6" type="text" name="newKeywordMonitorHTTPUsername" value="" autocomplete="off">
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="control-group">
                                                                                        <label for="newKeywordMonitorHTTPPassword" class="control-label">Password</label>
                                                                                        <div class="controls">
                                                                                            <input id="newKeywordMonitorHTTPPassword" class="span6" type="text" name="newKeywordMonitorHTTPPassword" value="" autocomplete="new-password">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newKeywordMonitorAuthType" class="control-label">Authentication Type</label>
                                                                                        <div class="controls">
                                                                                            <div data-toggle="buttons-radio" class="btn-group">
                                                                                                <button onclick="javascript:document.getElementById('newKeywordMonitorAuthType').value='1';" class="btn btn-green active" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
                                                                                                <button onclick="javascript:document.getElementById('newKeywordMonitorAuthType').value='2';" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
                                                                                            </div>
                                                                                            <input type="hidden" id="newKeywordMonitorAuthType" value="1" name="newKeywordMonitorAuthType" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#newKeywordMonitorAdvancedSettings" data-target="#newKeywordMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newKeywordMonitorAdvancedSettingsCustomHeaders">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal"
                                                                                            data-cta-source="new_monitor-adv_monitor_settings-custom_headers">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="opaci15 blur">
                                                                                        <li class="control-group">
                                                                                            <label for="newKeywordMonitorCustomHeaders" class="control-label">Custom Headers</label>
                                                                                            <div class="newKeywordMonitorCustomHeadersContainer monitorCustomHeadersContainer">
                                                                                            </div>
                                                                                            <div class="controls">
                                                                                                <button type="button" class="monitorCustomHeaderBtn newKeywordMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="newKeywordMonitorCustomHeaders">Add Custom Header</button>
                                                                                            </div>
                                                                                        </li>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hide" id="newPingMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newPingMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newPingMonitorFriendlyName" class="span6" type="text" value="" name="newPingMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPingMonitorURL" class="control-label">IP (or Host)</label>
                                                                            <div class="controls">
                                                                                <input id="newPingMonitorURL" class="span8" type="text" name="newPingMonitorURL" value="">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newPingMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="newPingMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="newPingMonitorInterval" name="newPingMonitorInterval" value="300" class="hide">
                                                                            </div>
                                                                        </li>

                                                                    </div>
                                                                    <div class="hide" id="newPortMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newPortMonitorFriendlyName" class="span6" type="text" value="" name="newPortMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorURL" class="control-label">IP (or URL or Host)</label>
                                                                            <div class="controls">
                                                                                <input id="newPortMonitorURL" class="span8" type="text" name="newPortMonitorURL" value="">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorPort" class="control-label">Port</label>
                                                                            <div class="controls">
                                                                                <select id="newPortMonitorPort" class="selecttwo span6" name="newPortMonitorPort" style="float:none;">
<option value="0" selected="selected">Please select</option>
 <optgroup label="Popular Ports">
<option value="1">HTTP (80)</option>
<option value="2">HTTPS (443)</option>
<option value="3">FTP (21)</option>
<option value="4">SMTP (25)</option>
<option value="5">POP3 (110)</option>
<option value="6">IMAP (143)</option>
</optgroup>
<optgroup label="Custom Port">
<option value="99">Custom Port</option>
</optgroup>
</select>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group hide" id="newPortMonitorCustomPortWrapper">
                                                                            <label for="newPortMonitorCustomPort" class="control-label">Custom Port</label>
                                                                            <div class="controls">
                                                                                <input id="newPortMonitorCustomPort" class="span6" type="text" value="" name="newPortMonitorCustomPort">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="newPortMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="newPortMonitorInterval" name="newPortMonitorInterval" value="300" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newPortMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="hide" id="newHBMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newHBMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newHBMonitorFriendlyName" class="span6" type="text" value="" name="newHBMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newHBMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">

                                                                                <input type="number" id="newHBMonitorIntervalInput" name="newHBMonitorIntervalInput" value="5" min="5" class="span3" style="float: left !important" max="44640">
                                                                                <div class="span3">
                                                                                    <select name="newHBMonitorIntervalType" id="newHBMonitorIntervalType" style="width: 100%;">
<option value="1" selected="selected" data-text="minute">minute</option>
<option value="60" data-text="hour">hours</option>
<option value="1440" data-text="day">days</option>
</select>
                                                                                </div>
                                                                                <input type="text" id="newHBMonitorInterval" name="newHBMonitorInterval" value="300" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newHBMonitorGracePeriodInput" class="control-label">Grace Period</label>
                                                                            <div class="controls" style="position: relative;">

                                                                                <input type="number" id="newHBMonitorGracePeriodInput" name="newHBMonitorGracePeriodInput" value="30" class="span3" style="float: left !important" min="0" max="86400">
                                                                                <div class="span3">
                                                                                    <select name="newHBMonitorGracePeriodType" id="newHBMonitorGracePeriodType" style="width: 100%;">
<option value="1" selected="selected" data-text="second">seconds</option>
<option value="60" data-text="minute">minutes</option>
<option value="3600" data-text="hour">hours</option>
</select>
                                                                                </div>
                                                                                <div class="clearfix span12">
                                                                                    <input type="text" name="newHBMonitorGracePeriod" value="0" id="newHBMonitorGracePeriod" class="hide">
                                                                                </div>
                                                                                <p style="margin-top: 15px; clear: both;" class="help-block">
                                                                                    <i class="fontello-icon-help-circled"></i> Useful for jobs with varying runtime to prevent false positives. If set to 1 hour, monitor will add a 1-hour buffer to the monitoring
                                                                                    interval.
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <div class="alert alert-info no-margin">
                                                                                <p class="">
                                                                                    Heartbeat monitor generates a unique URL you send requests to. UptimeRobot then expects your request in a selected interval. Accepted methods are <strong>POST and GET</strong>.
                                                                                    You can <a href="https://blog.uptimerobot.com/new-feature-heartbeat-monitoring/">read more about Heartbeat monitoring on our blog.</a>
                                                                                </p>
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

                                        <div id="newHBMonitorSuccessNotification" class="alert alert-info no-margin-right no-margin-left margin-top20 hide">
                                            <h4 style="margin-bottom: 15px">Copy &amp; set up</h4>
                                            <p>
                                                The URL for the heartbeat monitor:
                                            </p>
                                            <div class="input-append" style="margin: 15px 0; width: 90%">
                                                <input type="url" id="newHBMonitorSuccessNotificationMonitorURL" class="span12" />
                                                <button type="button" class="btn btn-primary copy-input">Copy</button>
                                            </div>
                                            <p style="margin-top: 15px">
                                                <i class="fontello-icon-help-circled"></i> <a href="https://uptimerobot.com/help/heartbeat-monitoring/" target="_blank">How to send requests to heartbeat monitor from Cron or Task scheduler</a>
                                            </p>
                                        </div>
                                        <div id="newMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-success">Monitor created!</strong> You can keep creating new monitors.
                                        </div>
                                        <div id="newMonitorSuccessNotificationTestInfo" class="alert alert-info no-margin-right no-margin-left margin-top20 hide" style="min-height: 30px;">
                                            Go ahead and test notification setup to see if everything works.
                                            <button type="button" class="btn btn-primary pull-right" id="show-monitor-detail">
Go to monitor detail
</button>
                                        </div>
                                        <div id="newMonitorErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor already exists in the list</strong>.
                                        </div>
                                        <div id="newMonitorBlacklistErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor URL/IP is in blacklist, please try with another URL/IP</strong>.
                                        </div>
                                        <div id="newMonitorInvalidUrlErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor URL/IP is invalid, please try with another URL/IP</strong>.
                                        </div>
                                    </div>

                                    <div class="span5 grider">
                                        <input type="hidden" name="alertContactsInputNew" class="alertContactsInputNew" />
                                        <input type="hidden" name="alertContactsSettingsStatus" class="alertContactsSettingsStatus" value="0" />
                                        <div id="newMonitorAlertContacts" class="alertContactsContainerNew">
                                        </div>
                                        <input type="hidden" class="getAlertContactsEditOrListDetector" value="0" />
                                        <input type="hidden" name="mWindowsInputNew" class="mWindowsInputNew" />
                                        <input type="hidden" class="getMWindowsEditOrListDetector" value="0" />
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn">Close</button>
                            <button type="submit" class="btn btn-primary">Create Monitor</button>
                        </div>
                    </form>
                </div>
                <div id="editMonitor" class="modal hide fade" tabindex="-1" data-width="60%">
                    <div class="modal-header"> </div>
                    <form id="editMonitorForm" class="form-horizontal" method="POST" action="" autocomplete="off">
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
                                                                        <h4 class="test">Monitor Information</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="editMonitorType" class="control-label">Monitor Type</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="editMonitorTypeTitle"></span>
                                                                            <input id="editMonitorType" class="span6" type="hidden" value="" name="editMonitorType">
                                                                        </div>
                                                                    </li>

                                                                    <div class="hide" id="editHTTPMonitor">
                                                                        <li class="control-group">
                                                                            <label for="editHTTPMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="editHTTPMonitorFriendlyName" class="span6" type="text" value="" name="editHTTPMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editHTTPMonitorURL" class="control-label">URL (or IP)</label>
                                                                            <div class="controls">
                                                                                <input id="editHTTPMonitorURL" class="span8" type="text" name="editHTTPMonitorURL" value="">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editHTTPMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="editHTTPMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="editHTTPMonitorInterval" name="editHTTPMonitorInterval" value="5" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"></span>
                                                                                <input type="text" name="editHTTPMonitorTimeout" value="1" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editHTTPMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
                                                                            <div class="controls">
                                                                                <input id="editHTTPMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="editHTTPMonitorIgnoreSSLErrors" value="1" disabled="disabled">
                                                                                <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                    <span class="label label-warning">PRO</span><br />
                                                                                    <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                    <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editHTTPMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
                                                                            <div class="controls">
                                                                                <input id="editHTTPMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="editHTTPMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
                                                                                <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                    <span class="label label-warning">PRO</span><br />
                                                                                    <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                    <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <div class="sslHttpsWarning">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
                                                                        <li class="section-form">
                                                                            <h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#editHTTPMonitorAdvancedSettings">show/hide</a></small></h4>
                                                                        </li>
                                                                        <div class="collapse" id="editHTTPMonitorAdvancedSettings">
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#editHTTPMonitorAdvancedSettings" data-target="#editHTTPMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="editHTTPMonitorAdvancedSettingsAuthentication">
                                                                                    <li class="control-group">
                                                                                        <label for="editHTTPMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input id="editHTTPMonitorHTTPUsername" class="span6" type="text" name="editHTTPMonitorHTTPUsername" value="" autocomplete="off">
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="control-group">
                                                                                        <label for="editHTTPMonitorHTTPPassword" class="control-label">Password</label>
                                                                                        <div class="controls">
                                                                                            <div class="input-append">
                                                                                                <input id="editHTTPMonitorHTTPPassword" class="span8 passwordHolder" type="password" name="editHTTPMonitorHTTPPassword" value="" autocomplete="new-password">
                                                                                                <span class="add-on"><i class="glyphicon fontello-icon-eye reveal"></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="editHTTPMonitorAuthType" class="control-label">Authentication Type</label>
                                                                                        <div class="controls">
                                                                                            <div data-toggle="buttons-radio" class="btn-group">
                                                                                                <button id="editHTTPMonitorAuthTypeBasic" onclick="javascript:document.getElementById('editHTTPMonitorAuthType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
                                                                                                <button id="editHTTPMonitorAuthTypeRealm" onclick="javascript:document.getElementById('editHTTPMonitorAuthType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
                                                                                            </div>
                                                                                            <input type="hidden" id="editHTTPMonitorAuthType" value="" name="editHTTPMonitorAuthType" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Http Statuses <small><a href="#" data-toggle="collapse" data-parent="#editHTTPMonitorAdvancedSettings" data-target="#editHTTPMonitorAdvancedSettingsCustomHttpStatuses">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="editHTTPMonitorAdvancedSettingsCustomHttpStatuses">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="opaci15 blur disableTouch noSelect">
                                                                                        <div class="row-fluid">
                                                                                            <div class="statusCodesBlock upstatuses">
                                                                                                <li class="control-group">
                                                                                                    <label for="editHTTPStatusCodesUpValues" class="control-label">Up Status Codes: </label>
                                                                                                </li>
                                                                                                <li class="control-group upStatusesBlock">
                                                                                                </li>
                                                                                            </div>
                                                                                            <div class="statusCodesBlock downstatuses">
                                                                                                <li class="control-group">
                                                                                                    <label for="editHTTPStatusCodesUpValues" class="control-label">Down Status Codes: </label>
                                                                                                </li>
                                                                                                <li class="control-group downStatusesBlock">
                                                                                                </li>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row-fluid">
                                                                                            <button type="button" class="httpStatusCodesResetBtn btn btn-grey btn-mini pull-right">Reset HTTP Statuses</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#editHTTPMonitorAdvancedSettings" data-target="#editHTTPMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="editHTTPMonitorAdvancedSettingsCustomHeaders">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="opaci15 blur">
                                                                                        <li class="control-group">
                                                                                            <label for="editHTTPMonitorCustomHeaders" class="control-label">Custom Headers</label>
                                                                                            <div class="editHTTPMonitorCustomHeadersContainer monitorCustomHeadersContainer">
                                                                                            </div>
                                                                                            <div class="controls">
                                                                                                <button type="button" class="monitorCustomHeaderBtn editHTTPMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="editHTTPMonitorCustomHeaders" disabled>Add Custom Header</button>
                                                                                            </div>
                                                                                        </li>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hide" id="editKeywordMonitor">
                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="editKeywordMonitorFriendlyName" class="span6" type="text" value="" name="editKeywordMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorURL" class="control-label">URL (or IP)</label>
                                                                            <div class="controls">
                                                                                <input id="editKeywordMonitorURL" class="span8" type="text" name="editKeywordMonitorURL" value="">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorKeywordValue" class="control-label">Keyword</label>
                                                                            <div class="controls">
                                                                                <input id="editKeywordMonitorKeywordValue" class="span6" type="text" value="" name="editKeywordMonitorKeywordValue">
                                                                                <span class="help-block">(the keyword must be present in the HTML source)</span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editKeywordCaseType" class="control-label">Case-insensitive</label>
                                                                            <div class="controls">
                                                                                <input id="editKeywordCaseType" class="leftFloat" type="checkbox" name="editKeywordCaseType" value="1">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorKeywordType" class="control-label">Alert When</label>
                                                                            <div class="controls">
                                                                                <div data-toggle="buttons-radio" class="btn-group">
                                                                                    <button id="editKeywordMonitorKeywordTypeExists" onclick="javascript:document.getElementById('editKeywordMonitorKeywordType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">Keyword Exists</button>
                                                                                    <button id="editKeywordMonitorKeywordTypeNotExists" onclick="javascript:document.getElementById('editKeywordMonitorKeywordType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Keyword Not Exists</button>
                                                                                </div>
                                                                                <span class="help-block">(the event log will be erased when you change this setting)</span>
                                                                                <input type="hidden" id="editKeywordMonitorKeywordType" value="" name="editKeywordMonitorKeywordType" />
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="editKeywordMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="editKeywordMonitorInterval" name="editKeywordMonitorInterval" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"></span>
                                                                                <input type="text" name="editKeywordMonitorTimeout" value="1" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label>
                                                                            <div class="controls">
                                                                                <input id="editKeywordMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="editKeywordMonitorIgnoreSSLErrors" value="1" disabled="disabled">
                                                                                <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                    <span class="label label-warning">PRO</span><br />
                                                                                    <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                    <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editKeywordMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label>
                                                                            <div class="controls">
                                                                                <input id="editKeywordMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="editKeywordMonitorSSLCheckDisableStatus" value="1" disabled="disabled">
                                                                                <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                    <span class="label label-warning">PRO</span><br />
                                                                                    <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                    <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <div class="sslHttpsWarning">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
                                                                        <li class="section-form">
                                                                            <h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#editKeywordMonitorAdvancedSettings">show/hide</a></small></h4>
                                                                        </li>
                                                                        <div class="collapse" id="editKeywordMonitorAdvancedSettings">
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#editKeywordMonitorAdvancedSettings" data-target="#editKeywordMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="editKeywordMonitorAdvancedSettingsAuthentication">
                                                                                    <li class="control-group">
                                                                                        <label for="editKeywordMonitorHTTPUsername" class="control-label">Username</label>
                                                                                        <div class="controls">
                                                                                            <input id="editKeywordMonitorHTTPUsername" class="span6" type="text" name="editKeywordMonitorHTTPUsername" value="" autocomplete="off">
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="control-group">
                                                                                        <label for="editKeywordMonitorHTTPPassword" class="control-label">Password</label>
                                                                                        <div class="controls">
                                                                                            <div class="input-append">
                                                                                                <input id="editKeywordMonitorHTTPPassword" class="span8 passwordHolder" type="password" name="editKeywordMonitorHTTPPassword" value="" autocomplete="new-password">
                                                                                                <span class="add-on"><i class="glyphicon fontello-icon-eye reveal"></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="editKeywordMonitorAuthType" class="control-label">Authentication Type</label>
                                                                                        <div class="controls">
                                                                                            <div data-toggle="buttons-radio" class="btn-group">
                                                                                                <button id="editKeywordMonitorAuthTypeBasic" onclick="javascript:document.getElementById('editKeywordMonitorAuthType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
                                                                                                <button id="editKeywordMonitorAuthTypeRealm" onclick="javascript:document.getElementById('editKeywordMonitorAuthType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
                                                                                            </div>
                                                                                            <input type="hidden" id="editKeywordMonitorAuthType" value="" name="editKeywordMonitorAuthType" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#editKeywordMonitorAdvancedSettings" data-target="#editKeywordMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="editKeywordMonitorAdvancedSettingsCustomHeaders">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="opaci15 blur">
                                                                                        <li class="control-group">
                                                                                            <label for="editKeywordMonitorCustomHeaders" class="control-label">Custom Headers</label>
                                                                                            <div class="editKeywordMonitorCustomHeadersContainer monitorCustomHeadersContainer">
                                                                                            </div>
                                                                                            <div class="controls">
                                                                                                <button type="button" class="monitorCustomHeaderBtn editKeywordMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="editKeywordMonitorCustomHeaders">Add Custom Header</button>
                                                                                            </div>
                                                                                        </li>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hide" id="editPingMonitor">
                                                                        <li class="control-group">
                                                                            <label for="editPingMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="editPingMonitorFriendlyName" class="span6" type="text" value="" name="editPingMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editPingMonitorURL" class="control-label">IP (or Host)</label>
                                                                            <div class="controls">
                                                                                <input id="editPingMonitorURL" class="span8" type="text" name="editPingMonitorURL" value="">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editPingMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="editPingMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="editPingMonitorInterval" name="editPingMonitorInterval" class="hide">
                                                                            </div>
                                                                        </li>

                                                                    </div>
                                                                    <div class="hide" id="editPortMonitor">
                                                                        <li class="control-group">
                                                                            <label for="editPortMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="editPortMonitorFriendlyName" class="span6" type="text" value="" name="editPortMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editPortMonitorURL" class="control-label">IP (or URL or Host)</label>
                                                                            <div class="controls">
                                                                                <input id="editPortMonitorURL" class="span8" type="text" name="editPortMonitorURL" value="">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editPortMonitorPort" class="control-label">Port</label>
                                                                            <div class="controls">
                                                                                <select id="editPortMonitorPort" class="selecttwo span6" name="editPortMonitorPort">
<option value="" selected="selected">Please select</option>
<optgroup label="Popular Ports">
<option value="1">HTTP (80)</option>
<option value="2">HTTPS (443)</option>
<option value="3">FTP (21)</option>
<option value="4">SMTP (25)</option>
<option value="5">POP3 (110)</option>
<option value="6">IMAP (143)</option>
 </optgroup>
<optgroup label="Custom Port">
<option value="99">Custom Port</option>
</optgroup>
</select>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group hide" id="editPortMonitorCustomPortWrapper">
                                                                            <label for="editPortMonitorCustomPort" class="control-label">Custom Port</label>
                                                                            <div class="controls">
                                                                                <input id="editPortMonitorCustomPort" class="span6" type="text" value="" name="editPortMonitorCustomPort">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editPortMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                <span class="help-inline span5">every <b id="editPortMonitorIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                <input type="text" id="editPortMonitorInterval" name="editPortMonitorInterval" class="hide">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editPortMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"> seconds</span>
                                                                                <input type="text" name="editPortMonitorTimeout" value="1" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    <div class="hide" id="editHBMonitor">
                                                                        <li class="control-group">
                                                                            <label for="editHBMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="editHBMonitorFriendlyName" class="span6" type="text" value="" name="editHBMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editHBMonitorURL" class="control-label">IP (or Host)</label>
                                                                            <div class="controls">
                                                                                <span id="editHBMonitorURL" style="word-break:break-all;"></span>
                                                                                <span class="help-block">
(<a href="https://uptimerobot.com/heartbeatMonitoring" target="_blank">How to send regular HTTP requests in Unix/Linux and Windows?</a>)</p>
</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="editHBMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">

                                                                                <input type="number" id="editHBMonitorIntervalInput" name="editHBMonitorIntervalInput" value="5" min="5" class="span3" style="float: left !important" max="44640">
                                                                                <div class="span3">
                                                                                    <select name="editHBMonitorIntervalType" id="editHBMonitorIntervalType" style="width: 100%;">
<option value="1" selected="selected" data-text="minute">minute</option>
<option value="60" data-text="hour">hours</option>
<option value="1440" data-text="day">days</option>
</select>
                                                                                </div>
                                                                                <input type="text" id="editHBMonitorInterval" name="editHBMonitorInterval" class="hide">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editHBMonitorGracePeriodInput" class="control-label">Grace Period</label>
                                                                            <div class="controls" style="position: relative;">

                                                                                <input type="number" id="editHBMonitorGracePeriodInput" name="editHBMonitorGracePeriodInput" value="30" class="span3" style="float: left !important" min="0" max="86400">
                                                                                <div class="span3">
                                                                                    <select name="editHBMonitorGracePeriodType" id="editHBMonitorGracePeriodType" style="width: 100%;">
<option value="1" selected data-text="second">seconds</option>
<option value="60" data-text="minute">minutes</option>
<option value="3600" data-text="hour">hours</option>
</select>
                                                                                </div>
                                                                                <div class="clearfix span12">
                                                                                    <input type="hidden" name="editHBMonitorGracePeriod" value="0" id="editHBMonitorGracePeriod" class="editHBMonitorGracePeriod">
                                                                                </div>
                                                                                <p style="margin-top: 15px; clear: both;" class="help-block">
                                                                                    <i class="fontello-icon-help-circled"></i> Useful for jobs with varying runtime to prevent false positives. If set to 1 hour, monitor will add a 1-hour buffer to the monitoring
                                                                                    interval.
                                                                                </p>
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

                                        <div id="editMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-success">Monitor edited!</strong> You can keep editing it.
                                        </div>
                                        <div id="editMonitorErrorNotificationExist" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">This monitor url is already in the list.</strong>.
                                        </div>
                                        <div id="editMonitorBlacklistErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor URL/IP is in blacklist, please try with another URL/IP</strong>.
                                        </div>
                                        <div id="editMonitorInvalidUrlErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor URL/IP is invalid, please try with another URL/IP</strong>.
                                        </div>
                                    </div>

                                    <div class="span5 grider">
                                        <input type="hidden" name="alertContactsInputEdit" class="alertContactsInputEdit" />
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
                                                                        <h4 class="test">Monitor Information</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="deleteMonitorType" class="control-label">Monitor Type</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="deleteMonitorTypeTitle"></span>
                                                                        </div>
                                                                        <input type="hidden" name="deleteMonitorID" id="deleteMonitorID" />
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="deleteMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="deleteMonitorFriendlyNameTitle" style="word-break:break-all;"></span>
                                                                        </div>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="deleteMonitorURL" class="control-label">URL (or IP)</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="deleteMonitorURLTitle" style="word-break:break-all;"></span>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="deleteMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-success">Monitor deleted!</strong>
                                        </div>
                                        <div id="deleteMonitorInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-warning">Warning!</strong> You are about to delete this monitor and any logs related to it.
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn" id="deleteMonitorFormCancelButton">Close</button>
                            <button type="submit" class="btn btn-primary" id="deleteMonitorFormSubmitButton">Delete Monitor</button>
                        </div>
                    </form>
                </div>
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
                                                                        <h4 class="test">Monitor Information</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="resetMonitorType" class="control-label">Monitor Type</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="resetMonitorTypeTitle"></span>
                                                                        </div>
                                                                        <input type="hidden" name="resetMonitorID" id="resetMonitorID" />
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="resetMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="resetMonitorFriendlyNameTitle" style="word-break:break-all;"></span>
                                                                        </div>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="resetMonitorURL" class="control-label">URL (or IP)</label>
                                                                        <div class="controls">
                                                                            <span class="bold" id="resetMonitorURLTitle" style="word-break:break-all;"></span>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="resetMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-success">Monitor is reset!</strong>.
                                        </div>
                                        <div id="resetMonitorInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-warning">Warning!</strong> You are about to delete any logs and reset the stats of this monitor.
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn" id="resetMonitorFormCancelButton">Close</button>
                            <button type="submit" class="btn btn-primary" id="resetMonitorFormSubmitButton">Reset Monitor</button>
                        </div>
                    </form>
                </div>
                <div id="newAlertContact" class="modal hide fade" tabindex="-1" data-width="40%">
                    <div class="modal-header"> </div>
                    <form id="newAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=newAlertContact">
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
                                                                        <h4 class="test">Alert Contact Information</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="newAlertContactType" class="control-label">Alert Contact Type <span class="required">*</span></label>
                                                                        <div class="controls">
                                                                            <select id="newAlertContactType" class="selecttwo span8" name="newAlertContactType" style="float:none;">
<option selected="selected" value="0">Please Select</option>
<optgroup label="Standard Methods">
<option value="2">E-mail</option>
<option value="8">Pro SMS</option>
<option value="14">Voice Call</option>
<option value="5">Webhook</option>
<option value="1">Email-to-SMS</option>
</optgroup>
<optgroup label="3rd Party Apps/Services">
 <option value="3">Twitter</option>
<option value="18">Telegram</option>
<option value="11">Slack</option>
<option value="20">Microsoft Teams</option>
<option value="21">Google Chat</option>
<option value="23">Discord</option>
<option value="10">HipChat</option>
<option value="16">PagerDuty</option>
<option value="6">Pushbullet (Push for Android & Browsers)</option>
<option value="9">Pushover (Push for Android, iOS, Browsers & Desktop)</option>
<option value="15">Splunk</option>
<option value="7">Zapier</option>
</optgroup>
</select>
                                                                        </div>
                                                                    </li>

                                                                    <div class="hide" id="newMobileFreeAlertContact">
                                                                        <li class="control-group">
                                                                            <label for="newMobileFreeAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <input id="newMobileFreeAlertContactFriendlyName" class="span6" type="text" value="" name="newMobileFreeAlertContactFriendlyName">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newMobileFreeProviderID" class="control-label">Mobile Provider <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <select id="newMobileFreeProviderID" class="selecttwo span6" name="newMobileFreeProviderID" style="float:none;">
</select>
                                                                                <span class="help-block">If your mobile network doesn't provide free email-to-SMS, you can always use Pro SMS.</span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newMobileFreeAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <span id="newMobileFreeAlertContactPrefix"></span>
                                                                                <input id="newMobileFreeAlertContactValue" class="span6" type="text" value="" name="newMobileFreeAlertContactValue">
                                                                                <span id="newMobileFreeAlertContactSuffix"></span>
                                                                                <span class="hide" id="newMobileFreeAlertContactNumberLimit"></span>
                                                                                <span class="hide" id="newMobileFreeAlertContactNumberLimitUp"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newMobileFreeAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                            <div class="controls">
                                                                                <div class="span8">
                                                                                    <select id="newMobileFreeAlertContactExcludeNotifications" class="selecttwo span6" name="newMobileFreeAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                    <div>
                                                                                    </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newMobileFreeAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                            <div class="controls">
                                                                                <input type="checkbox" name="newMobileFreeAlertContactSSLExpirationReminder" id="newMobileFreeAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Important!</strong> UptimeRobot uses free e-mail to SMS gateways of the providers that support it. These gateways are not always stable and such
                                                                                free SMS notifications may not always work as expected.
                                                                            </div>
                                                                        </li>

                                                                        </div>
                                                                        <div class="hide" id="newEmailAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="newEmailAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newEmailAlertContactFriendlyName" class="span6" type="text" value="" name="newEmailAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newEmailAlertContactValue" class="control-label">E-mail <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newEmailAlertContactValue" class="span6" type="text" value="" name="newEmailAlertContactValue">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newEmailAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <div class="span8">
                                                                                        <select id="newEmailAlertContactExcludeNotifications" class="selecttwo span6" name="newEmailAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                        <div>
                                                                                        </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newEmailAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="newEmailAlertContactSSLExpirationReminder" id="newEmailAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>

                                                                            </div>
                                                                            <div class="hide" id="newTwitterAlertContact">
                                                                                <li class="control-group">
                                                                                    <label for="newTwitterAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input id="newTwitterAlertContactFriendlyName" class="span6" type="text" value="" name="newTwitterAlertContactFriendlyName">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label for="newTwitterAlertContactValue" class="control-label">Twitter User <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        @ <input id="newTwitterAlertContactValue" class="span5" type="text" value="" name="newTwitterAlertContactValue">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label for="newTwitterAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                    <div class="controls">
                                                                                        <div class="span8">
                                                                                            <select id="newTwitterAlertContactExcludeNotifications" class="selecttwo span6" name="newTwitterAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                            <div>
                                                                                            </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label for="newTwitterAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                    <div class="controls">
                                                                                        <input type="checkbox" name="newTwitterAlertContactSSLExpirationReminder" id="newTwitterAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                        <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <div class="alert alert-info no-margin">
                                                                                        <strong class="alert-info">Important!</strong> Please make sure that you follow the <a href="http://twitter.com/uptimerobot">@uptimerobot</a> Twitter user (as notification
                                                                                        direct messages are sent from this address) before adding the alert contact.
                                                                                    </div>
                                                                                </li>


                                                                                </div>
                                                                                <div class="hide" id="newWebHookAlertContact">
                                                                                    <li class="control-group">
                                                                                        <label for="newWebHookAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input id="newWebHookAlertContactFriendlyName" class="span6" type="text" value="" name="newWebHookAlertContactFriendlyName">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newWebHookAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <textarea id="newWebHookAlertContactValue" class="span6" type="text" name="newWebHookAlertContactValue" rows="3">http://</textarea>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newWebHookAlertContactPOSTValue" class="control-label">POST Value (JSON Format)</label>
                                                                                        <div class="controls">
                                                                                            <textarea id="newWebHookAlertContactPOSTValue" class="span6" type="text" name="newWebHookAlertContactPOSTValue" rows="4" placeholder="{&quot;sampleParameter&quot;: &quot;Message from UptimeRobot&quot;,&quot;website&quot;: &quot;*monitorURL*&quot;}"></textarea>
                                                                                            <span class="help-block"><input type="checkbox" name="newWebHookAlertContactPOSTValueSendJSON" value="1" /> Send as JSON (application/json). If not selected, the data will be sent as a standard POST (application/x-www-form-urlencoded).</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newWebHookAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                        <div class="controls">
                                                                                            <div class="span8">
                                                                                                <select id="newWebHookAlertContactExcludeNotifications" class="selecttwo span6" name="newWebHookAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                <div>
                                                                                                </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newWebHookAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                        <div class="controls">
                                                                                            <input type="checkbox" name="newWebHookAlertContactSSLExpirationReminder" id="newWebHookAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                            <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <div class="alert alert-info no-margin">
                                                                                            <p>UptimeRobot will add the below querystring to the end of the requests sent for <b>up-down events</b>:</p>
                                                                                            <code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;alertDuration=*alertDuration*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
                                                                                            <p>And. it will add the below querystring to the end of the requests sent for <b>SSL expiry notifications</b>:</p>
                                                                                            <code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;sslExpiryDate=*sslExpiryDate&amp;sslExpiryDaysLeft=*sslExpiryDaysLeft*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
                                                                                            <p>Or, you can create a totally custom webhook URL by using the variables.</p>
                                                                                            <p><a class="btn btn-primary newWebHookAlertContactDetailsButton">Show/Hide Details &amp; Variables</a></p>
                                                                                            <div class="newWebHookAlertContactDetails hide">
                                                                                                <p>If the default webhook structure mentioned above is not a good fit for you, feel free to use the variables below in the webhook URLs:</p>
                                                                                                <ul>
                                                                                                    <li><code>*monitorID*</code> (the ID of the monitor)</li>
                                                                                                    <li><code>*monitorURL*</code> (the URL of the monitor)</li>
                                                                                                    <li><code>*monitorFriendlyName*</code> (the friendly name of the monitor)</li>
                                                                                                    <li><code>*alertType*</code> (1: down, 2: up, 3: SSL expiry notification)</li>
                                                                                                    <li><code>*alertTypeFriendlyName*</code> (Down or Up)</li>
                                                                                                    <li><code>*alertDetails*</code> (any info regarding the alert -if exists-)</li>
                                                                                                    <li><code>*alertDuration*</code> (in seconds and only for up events)</li>
                                                                                                    <li><code>*alertDateTime*</code> (in Unix timestamp)</li>
                                                                                                    <li><code>*monitorAlertContacts*</code> (the alert contacts associated with the alert in the format of 457;2;<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                                                            data-cfemail="ddb7b2b5b39db9b2b8f3beb2b0">[email&#160;protected]</a> -alertContactID;alertContactType, alertContactValue)</li>
                                                                                                    <li><code>*sslExpiryDate*</code> (only for SSL expiry notifications)</li>
                                                                                                    <li><code>*sslExpiryDaysLeft*</code> (only for SSL expiry notifications)</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>

                                                                                    </div>
                                                                                    <div class="hide" id="newPushbulletAlertContact">
                                                                                        <li class="control-group">
                                                                                            <label for="newPushbulletAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                            <div class="controls">
                                                                                                <input id="newPushbulletAlertContactFriendlyName" class="span6" type="text" value="" name="newPushbulletAlertContactFriendlyName">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label for="newPushbulletAlertContactValue" class="control-label">Pushbullet Access Token <span class="required">*</span></label>
                                                                                            <div class="controls">
                                                                                                <input id="newPushbulletAlertContactValue" class="span6" type="text" value="" name="newPushbulletAlertContactValue">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label for="newPushbulletAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                            <div class="controls">
                                                                                                <div class="span8">
                                                                                                    <select id="newPushbulletAlertContactExcludeNotifications" class="selecttwo span6" name="newPushbulletAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                    <div>
                                                                                                    </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label for="newPushbulletAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                            <div class="controls">
                                                                                                <input type="checkbox" name="newPushbulletAlertContactSSLExpirationReminder" id="newPushbulletAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <div class="alert alert-info no-margin">
                                                                                                <strong class="alert-info">Important!</strong> Push notifications (for Android, iOS and Chrome) are sent using the free-to-use <a href="https://www.pushbullet.com/">Pushbullet app/service</a>.
                                                                                                <p>The Access Token can be found inside the "Account Settings" menu of <a href="https://www.pushbullet.com/">Pushbullet's website</a>. The service has apps for
                                                                                                    <a href="https://play.google.com/store/apps/details?id=com.pushbullet.android">Android</a>, <a href="https://itunes.apple.com/us/app/pushbullet/id810352052?mt=8">iOS</a>                                                                                                    and extensions for <a href="https://chrome.google.com/webstore/detail/pushbullet/chlffgpmiacpedhhbkiomidkjlcfhogd?hl=en">Chrome</a> and <a href="https://addons.mozilla.org/en-US/firefox/addon/pushbullet/">Firefox</a>.</p>
                                                                                            </div>
                                                                                        </li>

                                                                                        </div>
                                                                                        <div class="hide" id="newZapierAlertContact">
                                                                                            <li class="control-group">
                                                                                                <label for="newZapierAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input id="newZapierAlertContactFriendlyName" class="span6" type="text" value="" name="newZapierAlertContactFriendlyName">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="control-group">
                                                                                                <label for="newZapierAlertContactValue" class="control-label">Zapier Hook URL <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input id="newZapierAlertContactValue" class="span6" type="text" value="" name="newZapierAlertContactValue">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="control-group">
                                                                                                <label for="newZapierAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                <div class="controls">
                                                                                                    <div class="span8">
                                                                                                        <select id="newZapierAlertContactExcludeNotifications" class="selecttwo span6" name="newZapierAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                        <div>
                                                                                                        </div>
                                                                                            </li>
                                                                                            <li class="control-group">
                                                                                                <label for="newZapierAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                <div class="controls">
                                                                                                    <input type="checkbox" name="newZapierAlertContactSSLExpirationReminder" id="newZapierAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="control-group">
                                                                                                <div class="alert alert-info no-margin">
                                                                                                    <strong class="alert-info">Important!</strong> Please, <a href="https://zapier.com/developer/invite/7929/34260862469ef61e98577e5e2234a539/" target
                                                                                                        "_blank">click this link</a> for using the UptimeRobot app on Zapier (as it is not public yet).
                                                                                                </div>
                                                                                            </li>

                                                                                            </div>
                                                                                            <div class="hide" id="newProSMSAlertContact">
                                                                                                <li class="control-group">
                                                                                                    <div class="alert alert-info no-margin">
                                                                                                        <strong class="alert-info">Info!</strong> Pro SMS (or voice calls) supports all international mobile network providers and requires a SMS (or voice
                                                                                                        calls) pack for usage. The packs are priced:
                                                                                                        <ul>
                                                                                                            <li>100 SMS (or voice calls) / $15</li>
                                                                                                            <li>200 SMS (or voice calls) / $25</li>
                                                                                                            <li>500 SMS (or voice calls) / $55</li>
                                                                                                            <li>1000 SMS (or voice calls) / $100</li>
                                                                                                        </ul>
                                                                                                        <p class="margin-top15"><a href="#upgradeAccount" class="upgradeSMS btn btn-success" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-create_new_sms_contact">Purchase SMS (or voice calls)</a></p>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </div>
                                                                                            <div class="hide" id="newProVoiceCallAlertContact">
                                                                                                <li class="control-group">
                                                                                                    <div class="alert alert-info no-margin">
                                                                                                        <strong class="alert-info">Info!</strong> Pro SMS (or voice calls) supports all international mobile network providers and requires a SMS (or voice
                                                                                                        calls) pack for usage. The packs are priced:
                                                                                                        <ul>
                                                                                                            <li>100 SMS (or voice calls) / $15</li>
                                                                                                            <li>200 SMS (or voice calls) / $25</li>
                                                                                                            <li>500 SMS (or voice calls) / $55</li>
                                                                                                            <li>1000 SMS (or voice calls) / $100</li>
                                                                                                        </ul>
                                                                                                        <p class="margin-top15"><a href="#upgradeAccount" class="upgradeSMS btn btn-success" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-create_new_voicecall_contact">Purchase SMS (or voice calls)</a></p>
                                                                                                    </div>
                                                                                                </li>

                                                                                            </div>
                                                                                            <div class="hide" id="newPushoverAlertContact">
                                                                                                <li class="control-group">
                                                                                                    <label for="newPushoverAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                    <div class="controls">
                                                                                                        <input id="newPushoverAlertContactFriendlyName" class="span6" type="text" value="" name="newPushoverAlertContactFriendlyName">
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="control-group">
                                                                                                    <label for="newPushoverAlertContactValue" class="control-label">Pushover User Key <span class="required">*</span></label>
                                                                                                    <div class="controls">
                                                                                                        <input id="newPushoverAlertContactValue" class="span6" type="text" value="" name="newPushoverAlertContactValue">
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="control-group">
                                                                                                    <label for="newPushoverAlertContactPriority" class="control-label">Pushover Priority</label>
                                                                                                    <div class="controls">
                                                                                                        <select id="newPushoverAlertContactPriority" class="selecttwo span6" name="newPushoverAlertContactPriority" style="float:none;">
<option value="-2">Lowest Priority</option>
<option value="-1">Low Priority</option>
<option selected="selected" value="0">Normal Priority</option>
<option value="1">High Priority</option>
<option value="2">Emergency Priority</option>
</select>
                                                                                                        <span class="help-block">Info about this setting can be found <a href="https://pushover.net/api#priority">here</a>.</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="control-group">
                                                                                                    <label for="newPushoverAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                    <div class="controls">
                                                                                                        <div class="span8">
                                                                                                            <select id="newPushoverAlertContactExcludeNotifications" class="selecttwo span6" name="newPushoverAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                            <div>
                                                                                                            </div>
                                                                                                </li>
                                                                                                <li class="control-group">
                                                                                                    <label for="newPushoverAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                    <div class="controls">
                                                                                                        <input type="checkbox" name="newPushoverAlertContactSSLExpirationReminder" id="newPushoverAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                        <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="control-group">
                                                                                                    <div class="alert alert-info no-margin">
                                                                                                        <strong class="alert-info">Important!</strong> Push notifications (for Android, iOS, Chrome, Firefox & Safari) are sent using the paid <a href="https://pushover.net/">Pushover app/service</a>.
                                                                                                        <p>The User Key can be found when logged into <a href="https://pushover.net/">Pushover's website</a>. The apps for the service are presented <a href="https://pushover.net/clients">here</a>.</p>
                                                                                                    </div>
                                                                                                </li>

                                                                                                </div>
                                                                                                <div class="hide" id="newHipchatAlertContact">
                                                                                                    <li class="control-group">
                                                                                                        <label for="newHipchatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                        <div class="controls">
                                                                                                            <input id="newHipchatAlertContactFriendlyName" class="span6" type="text" value="" name="newHipchatAlertContactFriendlyName">
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="control-group">
                                                                                                        <label for="newHipchatAlertContactValue" class="control-label">Hipchat Room ID <span class="required">*</span></label>
                                                                                                        <div class="controls">
                                                                                                            <input id="newHipchatAlertContactValue" class="span6" type="text" value="" name="newHipchatAlertContactValue">
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="control-group">
                                                                                                        <label for="newHipchatAlertContactToken" class="control-label">Hipchat Room Token <span class="required">*</span></label>
                                                                                                        <div class="controls">
                                                                                                            <input id="newHipchatAlertContactToken" class="span6" type="text" value="" name="newHipchatAlertContactToken">
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="control-group">
                                                                                                        <label for="newHipchatAlertContactCustomValue" class="control-label">Custom Value </label>
                                                                                                        <div class="controls">
                                                                                                            <input id="newHipchatAlertContactCustomValue" class="span6" type="text" value="" name="newHipchatAlertContactCustomValue">
                                                                                                            <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="control-group" style="border-bottom:none;">
                                                                                                        <small>I'm using self-hosted HipChat Server (<a href="#" data-toggle="collapse" data-target="#newHipchatAlertContactServerURLWrapper">show/hide settings</a>).</small>
                                                                                                    </li>
                                                                                                    <div id="newHipchatAlertContactServerURLWrapper" class="control-group collapse">
                                                                                                        <li class="control-group">
                                                                                                            <label for="newHipchatAlertContactServerURL" class="control-label">HipChat Server URL</label>
                                                                                                            <div class="controls">
                                                                                                                <input id="newHipchatAlertContactServerURL" class="span6" type="text" value="" name="newHipchatAlertContactServerURL">
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </div>
                                                                                                    <li class="control-group">
                                                                                                        <label for="newHipchatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                        <div class="controls">
                                                                                                            <div class="span8">
                                                                                                                <select id="newHipchatAlertContactExcludeNotifications" class="selecttwo span6" name="newHipchatAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                <div>
                                                                                                                </div>
                                                                                                    </li>
                                                                                                    <li class="control-group">
                                                                                                        <label for="newHipchatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                        <div class="controls">
                                                                                                            <input type="checkbox" name="newHipchatAlertContactSSLExpirationReminder" id="newHipchatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                            <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li class="control-group">
                                                                                                        <div class="alert alert-info no-margin">
                                                                                                            <strong class="alert-info">Important!</strong> The room token can be found in the <a href="http://hipchat.com/">HipChat.com</a>>My Account>Rooms>(Selected
                                                                                                            Room)>Tokens menu.
                                                                                                            <p>The Room ID can be found in the <a href="http://hipchat.com/">HipChat.com</a>>My Account>Rooms>(Selected Room)>API ID value.</p>
                                                                                                        </div>
                                                                                                    </li>

                                                                                                    </div>
                                                                                                    <div class="hide" id="newSlackAlertContact">
                                                                                                        <li class="control-group">
                                                                                                            <label for="newSlackAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                            <div class="controls">
                                                                                                                <input id="newSlackAlertContactFriendlyName" class="span6" type="text" value="" name="newSlackAlertContactFriendlyName">
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li class="control-group">
                                                                                                            <label for="newSlackAlertContactValue" class="control-label">Slack WebHook URL <span class="required">*</span></label>
                                                                                                            <div class="controls">
                                                                                                                <input id="newSlackAlertContactValue" class="span6" type="text" value="" name="newSlackAlertContactValue">
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li class="control-group">
                                                                                                            <label for="newSlackAlertContactCustomValue" class="control-label">Custom Value </label>
                                                                                                            <div class="controls">
                                                                                                                <input id="newSlackAlertContactCustomValue" class="span6" type="text" value="" name="newSlackAlertContactCustomValue">
                                                                                                                <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li class="control-group">
                                                                                                            <label for="newSlackAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                            <div class="controls">
                                                                                                                <div class="span8">
                                                                                                                    <select id="newSlackAlertContactExcludeNotifications" class="selecttwo span6" name="newSlackAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
 <option value="2">Only up events</option>
</select>
                                                                                                                    <div>
                                                                                                                    </div>
                                                                                                        </li>
                                                                                                        <li class="control-group">
                                                                                                            <label for="newSlackAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                            <div class="controls">
                                                                                                                <input type="checkbox" name="newSlackAlertContactSSLExpirationReminder" id="newSlackAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                                <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li class="control-group">
                                                                                                            <div class="alert alert-info no-margin">
                                                                                                                <strong class="alert-info">Important!</strong> The Slack Incoming Webhook URL can be created from Slack's <a href="https://slack.com/services/new/incoming-webhook">Channel Settings>Add an App>Incoming WebHooks</a>                                                                                                                menu.
                                                                                                            </div>
                                                                                                        </li>

                                                                                                        </div>
                                                                                                        <div class="hide" id="newSplunkAlertContact">
                                                                                                            <li class="control-group">
                                                                                                                <label for="newSplunkAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                <div class="controls">
                                                                                                                    <input id="newSplunkAlertContactFriendlyName" class="span6" type="text" value="" name="newSplunkAlertContactFriendlyName">
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li class="control-group">
                                                                                                                <label for="newSplunkAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
                                                                                                                <div class="controls">
                                                                                                                    <textarea id="newSplunkAlertContactValue" class="span6" type="text" name="newSplunkAlertContactValue" rows="3">https://</textarea>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li class="control-group">
                                                                                                                <label for="newSplunkAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                                <div class="controls">
                                                                                                                    <div class="span8">
                                                                                                                        <select id="newSplunkAlertContactExcludeNotifications" class="selecttwo span6" name="newSplunkAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                        <div>
                                                                                                                        </div>
                                                                                                            </li>
                                                                                                            <li class="control-group">
                                                                                                                <label for="newSplunkAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                                <div class="controls">
                                                                                                                    <input type="checkbox" name="newSplunkAlertContactSSLExpirationReminder" id="newSplunkAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                                </div>
                                                                                                            </li>

                                                                                                            </div>
                                                                                                            <div class="hide" id="newPagerDutyAlertContact">
                                                                                                                <li class="control-group">
                                                                                                                    <label for="newPagerDutyAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                    <div class="controls">
                                                                                                                        <input id="newPagerDutyAlertContactFriendlyName" class="span6" type="text" value="" name="newPagerDutyAlertContactFriendlyName">
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="control-group">
                                                                                                                    <label for="newPagerDutyAlertContactValue" class="control-label">Integration Key <span class="required">*</span></label>
                                                                                                                    <div class="controls">
                                                                                                                        <input id="newPagerDutyAlertContactValue" class="span6" type="text" value="" name="newPagerDutyAlertContactValue" />
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="control-group">
                                                                                                                    <label for="newPagerDutyAlertContactAutoResolve" class="control-label">Auto-Resolve</label>
                                                                                                                    <div class="controls">
                                                                                                                        <select id="newPagerDutyAlertContactAutoResolve" class="selecttwo span6" name="newPagerDutyAlertContactAutoResolveValue" style="float:none;">
<option value="1" selected>Resolve after up event</option>
<option value="0">Do not resolve after up event</option>
</select>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="control-group">
                                                                                                                    <label for="newPagerDutyAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                                    <div class="controls">
                                                                                                                        <div class="span8">
                                                                                                                            <select id="newPagerDutyAlertContactExcludeNotifications" class="selecttwo span6" name="newPagerDutyAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                            <div>
                                                                                                                            </div>
                                                                                                                </li>
                                                                                                                <li class="control-group">
                                                                                                                    <label for="newPagerDutyAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                                    <div class="controls">
                                                                                                                        <input type="checkbox" name="newPagerDutyAlertContactSSLExpirationReminder" id="newPagerDutyAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                                        <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                <li class="control-group">
                                                                                                                    <div class="alert alert-info no-margin">
                                                                                                                        We are using <strong class="alert-info">Events API v2</strong> for sending notifications.
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                                </div>
                                                                                                                <div class="hide" id="newTelegramAlertContact">
                                                                                                                    <li class="control-group">
                                                                                                                        <label for="newTelegramAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                        <div class="controls">
                                                                                                                            <input id="newTelegramAlertContactFriendlyName" class="span6" type="text" value="" name="newTelegramAlertContactFriendlyName">
                                                                                                                        </div>
                                                                                                                    </li>
                                                                                                                    <li class="control-group">
                                                                                                                        <label for="newTelegramAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                                        <div class="controls">
                                                                                                                            <div class="span8">
                                                                                                                                <select id="newTelegramAlertContactExcludeNotifications" class="selecttwo span6" name="newTelegramAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                                <div>
                                                                                                                                </div>
                                                                                                                    </li>
                                                                                                                    <li class="control-group">
                                                                                                                        <label for="newTelegramAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                                        <div class="controls">
                                                                                                                            <input type="checkbox" name="newTelegramAlertContactSSLExpirationReminder" id="newTelegramAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                                            <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                                        </div>
                                                                                                                    </li>
                                                                                                                    <li class="control-group">
                                                                                                                        <div class="alert alert-info no-margin">
                                                                                                                            <strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog
                                                                                                                            with the Telegram UptimeRobot Bot via clicking the custom link (the link will be generated <b>after the alert contact is created</b>).
                                                                                                                        </div>
                                                                                                                    </li>

                                                                                                                    </div>
                                                                                                                    <div class="hide" id="newGoogleAdWordsAlertContact">
                                                                                                                        <li class="control-group">
                                                                                                                            <label for="newGoogleAdWordsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                            <div class="controls">
                                                                                                                                <input id="newGoogleAdWordsAlertContactFriendlyName" class="span6" type="text" value="" name="newGoogleAdWordsAlertContactFriendlyName">
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li class="control-group">
                                                                                                                            <div class="alert alert-info no-margin">
                                                                                                                                <strong class="alert-info">Important!</strong> In order to manage Google AdWords Campaigns you have to <u>authenticate with the related Google account</u>                                                                                                                                and give permissions <b>after the alert contact is created</b>.
                                                                                                                            </div>
                                                                                                                        </li>

                                                                                                                    </div>
                                                                                                                    <div class="hide" id="newFacebookAdsAlertContact">
                                                                                                                        <li class="control-group">
                                                                                                                            <label for="newFacebookAdsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                            <div class="controls">
                                                                                                                                <input id="newFacebookAdsAlertContactFriendlyName" class="span6" type="text" value="" name="newFacebookAdsAlertContactFriendlyName">
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li class="control-group">
                                                                                                                            <div class="alert alert-info no-margin">
                                                                                                                                <strong class="alert-info">Important!</strong> In order to manage Facebook Ads Campaigns you have to <u>authenticate with the related Facebook account</u>                                                                                                                                and give permissions <b>after the alert contact is created</b>.
                                                                                                                            </div>
                                                                                                                        </li>

                                                                                                                    </div>
                                                                                                                    <div class="hide" id="newMSTeamsAlertContact">
                                                                                                                        <li class="control-group">
                                                                                                                            <label for="newMSTeamsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                            <div class="controls">
                                                                                                                                <input id="newMSTeamsAlertContactFriendlyName" class="span6" type="text" value="" name="newMSTeamsAlertContactFriendlyName">
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li class="control-group">
                                                                                                                            <label for="newMSTeamsAlertContactWebHookURL" class="control-label">MS Teams Webhook URL <span class="required">*</span></label>
                                                                                                                            <div class="controls">
                                                                                                                                <input id="newMSTeamsAlertContactWebHookURL" class="span6" type="text" value="" name="newMSTeamsAlertContactWebHookURL">
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li class="control-group">
                                                                                                                            <label for="newMSTeamsAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                                            <div class="controls">
                                                                                                                                <div class="span8">
                                                                                                                                    <select id="newMSTeamsAlertContactExcludeNotifications" class="selecttwo span6" name="newMSTeamsAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                                    <div>
                                                                                                                                    </div>
                                                                                                                        </li>
                                                                                                                        <li class="control-group">
                                                                                                                            <label for="newMSTeamsAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                                            <div class="controls">
                                                                                                                                <input type="checkbox" name="newMSTeamsAlertContactSSLExpirationReminder" id="newMSTeamsAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />
                                                                                                                                <span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                        <li class="control-group">
                                                                                                                            <div class="alert alert-info no-margin">
                                                                                                                                <strong class="alert-info">Important!</strong> The incoming webhook URL can be created from the <a href="https://teams.microsoft.com/_#/apps">Microsoft Teams Store</a>                                                                                                                                using the Connectors>Incoming WebHooks link (if you prefer to update the webhook's image to UptimeRobot's logo, <a href="https://uptimerobot.com/assets/img/logo-square.png"
                                                                                                                                    target="_blank">here it is</a>)
                                                                                                                            </div>
                                                                                                                        </li>

                                                                                                                        </div>
                                                                                                                        <div class="hide" id="newHangoutsChatAlertContact">
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newHangoutsChatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input id="newHangoutsChatAlertContactFriendlyName" class="span6" type="text" value="" name="newHangoutsChatAlertContactFriendlyName">
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newHangoutsChatAlertContactRoomURL" class="control-label">Room URL <span class="required">*</span></label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input id="newHangoutsChatAlertContactRoomURL" class="span6" type="text" value="" name="newHangoutsChatAlertContactRoomURL">
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newHangoutsChatAlertContactCustomValue" class="control-label">Custom Message </label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input id="newHangoutsChatAlertContactCustomValue" class="span6" type="text" value="" name="newHangoutsChatAlertContactCustomValue">
                                                                                                                                    <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newHangoutsChatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                                                <div class="controls">
                                                                                                                                    <div class="span8">
                                                                                                                                        <select id="newHangoutsChatAlertContactExcludeNotifications" class="selecttwo span6" name="newHangoutsChatAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newHangoutsChatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input type="checkbox" name="newHangoutsChatAlertContactSSLExpirationReminder" id="newHangoutsChatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />
                                                                                                                                    <span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <div class="alert alert-info no-margin">
                                                                                                                                    <strong class="alert-info">Important!</strong> The room url can be found in the <a href="https://chat.google.com/" target="_blank">chat.google.com</a>                                                                                                                                    > Room menu > Configure webhooks > Add new > Copy room url.
                                                                                                                                    <p>If you prefer to update the webhook's image to UptimeRobot's logo, <a href="https://uptimerobot.com/assets/img/logo-square.png"
                                                                                                                                            target="_blank">here it is</a>)</p>
                                                                                                                                </div>
                                                                                                                            </li>

                                                                                                                        </div>
                                                                                                                        <div class="hide" id="newDiscordAlertContact">
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newDiscordAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input id="newDiscordAlertContactFriendlyName" class="span6" type="text" value="" name="newDiscordAlertContactFriendlyName">
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newDiscordAlertContactValue" class="control-label">Discord WebHook URL <span class="required">*</span></label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input id="newDiscordAlertContactValue" class="span6" type="text" value="" name="newDiscordAlertContactValue">
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newDiscordAlertContactCustomValue" class="control-label">Custom Value </label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input id="newDiscordAlertContactCustomValue" class="span6" type="text" value="" name="newDiscordAlertContactCustomValue">
                                                                                                                                    <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newDiscordAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                                                                <div class="controls">
                                                                                                                                    <div class="span8">
                                                                                                                                        <select id="newDiscordAlertContactExcludeNotifications" class="selecttwo span6" name="newDiscordAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                                                                        <div>
                                                                                                                                        </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <label for="newDiscordAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                                                                <div class="controls">
                                                                                                                                    <input type="checkbox" name="newDiscordAlertContactSSLExpirationReminder" id="newDiscordAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                                                                </div>
                                                                                                                            </li>
                                                                                                                            <li class="control-group">
                                                                                                                                <div class="alert alert-info no-margin">
                                                                                                                                    <strong class="alert-info">Important!</strong> The Discord Webhook URL can be created from Discord's Channel Settings>Integrations>
                                                                                                                                    WebHooks menu.
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

                                                            <div id="newAlertContactAttachNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                                                <strong>Please, assign the alert contact</strong> to each monitor you would like to be notified of. Click on the "cogwheel" button next to your monitor and <code>"edit" > Select "Alert Contacts To Notify"</code>.
                                                            </div>
                                                            <div id="newAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                                <strong class="alert-success">Alert contact created!</strong> You can keep adding new alert contacts.
                                                            </div>
                                                            <div id="newAlertContactErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
                                                            <div id="newPushbulletAlertContactErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
                                                            <div id="newAlertContactExistsErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"><strong class="alert-error">Ooops!</strong> This alert contact already exists under your account.</div>
                                                            <div id="newTwitterAlertContactNoFollowNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"><strong class="alert-error">Ooops!</strong> Please make sure that you follow the <a href="http://twitter.com/uptimerobot">@uptimerobot</a> Twitter user (as notification direct messages are sent
                                                                from this address).</div>
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
                    <div id="deleteAlertContact" class="modal hide fade" tabindex="-1" data-width="35%">
                        <div class="modal-header"> </div>
                        <form id="deleteAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deleteAlertContact">
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
                                                                            <h4 class="test">Alert Contact Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deleteAlertContactType" class="control-label">Alert Contact Type</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deleteAlertContactTypeTitle"></span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deleteAlertContactValue" class="control-label">Alert Contact</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deleteAlertContactValueTitle"></span>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="deleteAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Alert contact deleted!</strong>.
                                            </div>
                                            <div id="deleteAlertContactInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-warning">Warning!</strong> You are about to delete this alert contact and it will be removed from any monitors it is attached to (monitors will not be deleted).
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn" id="deleteAlertContactFormCancelButton">Close</button>
                                <button type="submit" class="btn btn-primary" id="deleteAlertContactFormSubmitButton">Delete Alert Contact</button>
                            </div>
                        </form>
                    </div>
                    <div id="activateAlertContact" class="modal hide fade" tabindex="-1" data-width="35%">
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
                                                                            <h4 class="test">Alert Contact Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="activateAlertContactType" class="control-label">Alert Contact Type</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="activateAlertContactTypeTitle"></span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="activateAlertContactValue" class="control-label">Alert Contact</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="activateAlertContactValueTitle"></span>
                                                                            </div>
                                                                        </li>
                                                                        <li id="activateTelegramAlertNotStarted" class="control-group hide">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog with the Telegram UptimeRobot Bot. Please
                                                                                <a href="https://telegram.me/officialuptimerobot?start=">click this custom link and start the dialog on Telegram</a>, <b>for this alert contact to work</b>.
                                                                            </div>
                                                                        </li>
                                                                        <li id="activateGoogleAdWordsAlertNoAuth" class="control-group hide">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Important!</strong> Please <em>sign in with Google</em> to complete Google AdWords Authentication process. After Google AdWords authentication you
                                                                                have to edit alert contact to select which campaigns should be managed depending on your monitor.<br><a class="sign_in_with_google" href="inc/lib/GoogleAdWords/index.php?auth=1&dacid="
                                                                                    onclick="javascript:window.open('inc/lib/GoogleAdWords/index.php?auth=1&dacid=','google_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><b>Sign in with Google</b></a>.
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
                                                                                <strong class="alert-info">Important!</strong> Please <em>sign in with Facebook</em> to complete Facebook Ads Authentication process. After Facebook Ads authentication you
                                                                                have to edit alert contact to select which campaigns should be managed depending on your monitor.<br><a class="sign_in_with_facebook" href="inc/lib/FacebookAds/index.php?auth=1&dacid="
                                                                                    onclick="javascript:window.open('inc/lib/FacebookAds/index.php?auth=1&dacid=','facebook_auth_window','width=480,height=550,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><b>Sign in with Facebook</b></a>.
                                                                            </div>
                                                                        </li>
                                                                        <li id="activateFacebookAdsAlertYesAuthNoActive" class="control-group hide">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Important!</strong> You have already completed the Facebook Authentication process. To activate the monitor please edit this alert contact and choose
                                                                                related Ad Campaigns.
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group" id="activateAlertContactActivationCodeContainer">
                                                                            <label for="activateAlertContactActivationCode" class="control-label">Activation Code</label>
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
                                <button type="submit" class="btn btn-primary" id="activateAlertContactFormSubmitButton">Activate Alert Contact</button>
                            </div>
                        </form>
                    </div>
                    <div id="editAlertContact" class="modal hide fade" tabindex="-1" data-width="40%">
                        <div class="modal-header"> </div>
                        <form id="editAlertContactForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editAlertContact">
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
                                                                            <h4 class="test">Alert Contact Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editAlertContactType" class="control-label">Alert Contact Type <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="editAlertContactTypeTitle"></span>
                                                                                <input id="editAlertContactType" class="span6" type="hidden" value="" name="editAlertContactType">
                                                                            </div>
                                                                        </li>

                                                                        <div class="hide" id="editMobileFreeAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editMobileFreeAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editMobileFreeAlertContactFriendlyName" class="span6" type="text" value="" name="editMobileFreeAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMobileFreeAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editMobileFreeAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMobileFreeAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editMobileFreeAlertContactExcludeNotifications" class="selecttwo span6" name="editMobileFreeAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMobileFreeAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editMobileFreeAlertContactSSLExpirationReminder" id="editMobileFreeAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editEmailAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editEmailAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editEmailAlertContactFriendlyName" class="span6" type="text" value="" name="editEmailAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editEmailAlertContactValue" class="control-label">E-mail <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editEmailAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editEmailAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editEmailAlertContactExcludeNotifications" class="selecttwo span6" name="editEmailAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editEmailAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editEmailAlertContactSSLExpirationReminder" id="editEmailAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editTwitterAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editTwitterAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editTwitterAlertContactFriendlyName" class="span6" type="text" value="" name="editTwitterAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editTwitterAlertContactValue" class="control-label">Twitter User <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    @<span class="bold" id="editTwitterAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editTwitterAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editTwitterAlertContactExcludeNotifications" class="selecttwo span6" name="editTwitterAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editTwitterAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editTwitterAlertContactSSLExpirationReminder" id="editTwitterAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editBoxcarAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editBoxcarAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editBoxcarAlertContactFriendlyName" class="span6" type="text" value="" name="editBoxcarAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editBoxcarAlertContactValue" class="control-label">Boxcar Access Token <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editBoxcarAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editBoxcarAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editBoxcarAlertContactExcludeNotifications" class="selecttwo span6" name="editBoxcarAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editBoxcarAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editBoxcarAlertContactSSLExpirationReminder" id="editBoxcarAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editWebHookAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editWebHookAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editWebHookAlertContactFriendlyName" class="span6" type="text" value="" name="editWebHookAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWebHookAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <textarea id="editWebHookAlertContactValue" class="span6" type="text" name="editWebHookAlertContactValue" rows="4"></textarea>
                                                                                    <span class="help-block">
<input id="editWebHookAlertContactValueSendQueryString" type="checkbox" name="editWebHookAlertContactValueSendQueryString" value="1" /> Send default variables as a query string
</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWebHookAlertContactPOSTValue" class="control-label">POST Value (JSON Format)</label>
                                                                                <div class="controls">
                                                                                    <textarea id="editWebHookAlertContactPOSTValue" class="span6" type="text" name="editWebHookAlertContactPOSTValue" rows="4" placeholder="{&quot;sampleParameter&quot;: &quot;Message from UptimeRobot&quot;,&quot;website&quot;: &quot;*monitorURL*&quot;}"></textarea>
                                                                                    <span class="help-block"><input type="checkbox" id="editWebHookAlertContactPOSTValueSendJSON" name="editWebHookAlertContactPOSTValueSendJSON" value="1" /> Send as JSON (application/json). </span>
                                                                                    <span class="help-block"><input type="checkbox" id="editWebHookAlertContactPOSTValueSendPOST" name="editWebHookAlertContactPOSTValueSendPOST" value="1" /> Send default variables as POST parameters</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWebHookAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editWebHookAlertContactExcludeNotifications" class="selecttwo span6" name="editWebHookAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWebHookAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editWebHookAlertContactSSLExpirationReminder" id="editWebHookAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <div class="alert alert-info no-margin">
                                                                                    <p>UptimeRobot will add the below querystring to the end of the requests sent for <b>up-down events</b>:</p>
                                                                                    <code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;alertDuration=*alertDuration*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
                                                                                    <p>And. it will add the below querystring to the end of the requests sent for <b>SSL expiry notifications</b>:</p>
                                                                                    <code style="word-break:break-all;">monitorID=*monitorID*&amp;monitorURL=*monitorURL*&amp;monitorFriendlyName=*monitorFriendlyName*&amp;alertType=*alertType*&amp;alertTypeFriendlyName=*alertTypeFriendlyName*&amp;alertDetails=*alertDetails*&amp;sslExpiryDate=*sslExpiryDate&amp;sslExpiryDaysLeft=*sslExpiryDaysLeft*&amp;monitorAlertContacts=*monitorAlertContacts*</code>
                                                                                    <p>Or, you can create a totally custom web-hook URL by using the variables.</p>
                                                                                    <p><a class="btn btn-primary newWebHookAlertContactDetailsButton">Show/Hide Details &amp; Variables</a></p>
                                                                                    <div class="newWebHookAlertContactDetails hide">
                                                                                        <p>If the default web-hook structure mentioned above is not a good fit for you, feel free to use the variables below in the web-hook URLs:</p>
                                                                                        <ul>
                                                                                            <li><code>*monitorID*</code> (the ID of the monitor)</li>
                                                                                            <li><code>*monitorURL*</code> (the URL of the monitor)</li>
                                                                                            <li><code>*monitorFriendlyName*</code> (the friendly name of the monitor)</li>
                                                                                            <li><code>*alertType*</code> (1: down, 2: up, 3: SSL expiry notification)</li>
                                                                                            <li><code>*alertTypeFriendlyName*</code> (Down or Up)</li>
                                                                                            <li><code>*alertDetails*</code> (any info regarding the alert -if exists-)</li>
                                                                                            <li><code>*alertDuration*</code> (in seconds and only for up events)</li>
                                                                                            <li><code>*alertDateTime*</code> (in Unix timestamp)</li>
                                                                                            <li><code>*monitorAlertContacts*</code> (the alert contacts associated with the alert in the format of 457;2;<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                                                    data-cfemail="167c797e78567279733875797b">[email&#160;protected]</a> -alertContactID;alertContactType, alertContactValue)</li>
                                                                                            <li><code>*sslExpiryDate*</code> (only for SSL expiry notifications)</li>
                                                                                            <li><code>*sslExpiryDaysLeft*</code> (only for SSL expiry notifications)</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editPushbulletAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editPushbulletAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editPushbulletAlertContactFriendlyName" class="span6" type="text" value="" name="editPushbulletAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushbulletAlertContactValue" class="control-label">Pushbullet Access Token <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editPushbulletAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushbulletAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editPushbulletAlertContactExcludeNotifications" class="selecttwo span6" name="editPushbulletAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushbulletAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editPushbulletAlertContactSSLExpirationReminder" id="editPushbulletAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editZapierAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editZapierAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editZapierAlertContactFriendlyName" class="span6" type="text" value="" name="editZapierAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editZapierAlertContactValue" class="control-label">Zapier Hook URL <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editZapierAlertContactValue" class="span6" type="text" value="" name="editZapierAlertContactValue">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editZapierAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editZapierAlertContactExcludeNotifications" class="selecttwo span6" name="editZapierAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editZapierAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editZapierAlertContactSSLExpirationReminder" id="editZapierAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <div class="alert alert-info no-margin">
                                                                                    <strong class="alert-info">Important!</strong> Please, <a href="https://zapier.com/developer/invite/7929/34260862469ef61e98577e5e2234a539/" target "_blank">click this link</a>                                                                                    for using the UptimeRobot app on Zapier (as it is not public yet).
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editProSMSAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editProSMSAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editProSMSAlertContactFriendlyName" class="span6" type="text" value="" name="editProSMSAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editProSMSAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editProSMSAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editProSMSAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editProSMSAlertContactExcludeNotifications" class="selecttwo span6" name="editProSMSAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editProSMSAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editProSMSAlertContactSSLExpirationReminder" id="editProSMSAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editProVoiceCallAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editProVoiceCallAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editProVoiceCallAlertContactFriendlyName" class="span6" type="text" value="" name="editProVoiceCallAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editProVoiceCallAlertContactValue" class="control-label">Mobile No <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editProVoiceCallAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editProVoiceCallAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editProVoiceCallAlertContactExcludeNotifications" class="selecttwo span6" name="editProVoiceCallAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editProVoiceCallAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editProVoiceCallAlertContactSSLExpirationReminder" id="editProVoiceCallAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editPushoverAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editPushoverAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editPushoverAlertContactFriendlyName" class="span6" type="text" value="" name="editPushoverAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushoverAlertContactValue" class="control-label">Pushover User Key <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editPushoverAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushoverAlertContactPriority" class="control-label">Pushover Priority</label>
                                                                                <div class="controls">
                                                                                    <select id="editPushoverAlertContactPriority" class="selecttwo span6" name="editPushoverAlertContactPriority" style="float:none;">
<option value="-2">Lowest Priority</option>
<option value="-1">Low Priority</option>
<option value="0">Normal Priority</option>
<option value="1">High Priority</option>
<option value="2">Emergency Priority</option>
</select>
                                                                                    <span class="help-block">Info about this setting can be found <a href="https://pushover.net/api#priority">here</a>.</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushoverAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editPushoverAlertContactExcludeNotifications" class="selecttwo span6" name="editPushoverAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPushoverAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editPushoverAlertContactSSLExpirationReminder" id="editPushoverAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editHipchatAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editHipchatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editHipchatAlertContactFriendlyName" class="span6" type="text" value="" name="editHipchatAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHipchatAlertContactValue" class="control-label">Hipchat Room ID <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editHipchatAlertContactValue"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHipchatAlertContactToken" class="control-label">Hipchat Room Token <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editHipchatAlertContactToken" style="word-break: break-all;"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHipchatAlertContactCustomValue" class="control-label">Custom Value </label>
                                                                                <div class="controls">
                                                                                    <input id="editHipchatAlertContactCustomValue" class="span6" type="text" value="" name="editHipchatAlertContactCustomValue">
                                                                                    <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group" style="border-bottom:none;">
                                                                                <small>I'm using self-hosted HipChat Server (<a href="#" data-toggle="collapse" data-target="#editHipchatAlertContactServerURLWrapper">show/hide settings</a>).</small>
                                                                            </li>
                                                                            <div id="editHipchatAlertContactServerURLWrapper" class="control-group collapse">
                                                                                <li class="control-group">
                                                                                    <label for="editHipchatAlertContactServerURL" class="control-label">HipChat Server URL</label>
                                                                                    <div class="controls">
                                                                                        <span class="bold" id="editHipchatAlertContactServerURL" style="word-break: break-all;"></span>
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="editHipchatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editHipchatAlertContactExcludeNotifications" class="selecttwo span6" name="editHipchatAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHipchatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editHipchatAlertContactSSLExpirationReminder" id="editHipchatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editSlackAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editSlackAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editSlackAlertContactFriendlyName" class="span6" type="text" value="" name="editSlackAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSlackAlertContactValue" class="control-label">Slack WebHook URL <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editSlackAlertContactValue" style="word-break: break-all;"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSlackAlertContactCustomValue" class="control-label">Custom Value </label>
                                                                                <div class="controls">
                                                                                    <input id="editSlackAlertContactCustomValue" class="span6" type="text" value="" name="editSlackAlertContactCustomValue">
                                                                                    <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSlackAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editSlackAlertContactExcludeNotifications" class="selecttwo span6" name="editSlackAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSlackAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editSlackAlertContactSSLExpirationReminder" id="editSlackAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editSplunkAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editSplunkAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editSplunkAlertContactFriendlyName" class="span6" type="text" value="" name="editSplunkAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSplunkAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <textarea id="editSplunkAlertContactValue" class="span6" type="text" name="editSplunkAlertContactValue" rows="4"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSplunkAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editSplunkAlertContactExcludeNotifications" class="selecttwo span6" name="editSplunkAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editSplunkAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editSplunkAlertContactSSLExpirationReminder" id="editSplunkAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editPagerDutyAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editPagerDutyAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editPagerDutyAlertContactFriendlyName" class="span6" type="text" value="" name="editPagerDutyAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPagerDutyAlertContactValue" class="control-label">Integration Key <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editPagerDutyAlertContactValue" class="span6" type="text" value="" name="editPagerDutyAlertContactValue" />
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPagerDutyAlertContactAutoResolve" class="control-label">Auto-Resolve</label>
                                                                                <div class="controls">
                                                                                    <select id="editPagerDutyAlertContactAutoResolve" class="selecttwo span6" name="editPagerDutyAlertContactAutoResolve" style="float:none;">
<option value="1">Resolve after up event</option>
<option value="0">Do not resolve after up event</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPagerDutyAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editPagerDutyAlertContactExcludeNotifications" class="selecttwo span6" name="editPagerDutyAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editPagerDutyAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editPagerDutyAlertContactSSLExpirationReminder" id="editPagerDutyAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editOpsGenieAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editOpsGenieAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editOpsGenieAlertContactFriendlyName" class="span6" type="text" value="" name="editOpsGenieAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editOpsGenieAlertContactValue" class="control-label">URL to Notify <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <textarea id="editOpsGenieAlertContactValue" class="span6" type="text" name="editOpsGenieAlertContactValue" rows="4"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editOpsGenieAlertContactTeamsToNotify" class="control-label">Teams to notify</label>
                                                                                <div class="controls">
                                                                                    <input id="editOpsGenieAlertContactTeamsToNotify" class="span6" type="text" value="" name="editOpsGenieAlertContactTeamsToNotify" maxlength="200">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editOpsGenieAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editOpsGenieAlertContactExcludeNotifications" class="selecttwo span6" name="editOpsGenieAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editOpsGenieAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editOpsGenieAlertContactSSLExpirationReminder" id="editOpsGenieAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editTelegramAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editTelegramAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editTelegramAlertContactFriendlyName" class="span6" type="text" value="" name="editTelegramAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editTelegramAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editTelegramAlertContactExcludeNotifications" class="selecttwo span6" name="editTelegramAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editTelegramAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editTelegramAlertContactSSLExpirationReminder" id="editTelegramAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                            <li id="editTelegramAlertNotStarted" class="control-group hide">
                                                                                <div class="alert alert-info no-margin">
                                                                                    <strong class="alert-info">Important!</strong> In order to activate the Telegram alert contact, it is needed to /start a dialog with the Telegram UptimeRobot Bot. Please
                                                                                    <a href="https://telegram.me/officialuptimerobot?start=">click this custom link and start the dialog on Telegram</a>, <b>for this alert contact to work</b>.
                                                                                </div>
                                                                            </li>
                                                                            <li id="editTelegramAlertStarted" class="control-group hide">
                                                                                <div class="alert alert-success no-margin">
                                                                                    <strong class="alert-success">Great!</strong> You are connected to Telegram with this account:<br><span></span>.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editIosAppAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editIosAppAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editIosAppAlertContactFriendlyName" class="span6" type="text" value="" name="editIosAppAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editIosAppAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editIosAppAlertContactExcludeNotifications" class="selecttwo span6" name="editIosAppAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editIosAppAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editIosAppAlertContactSSLExpirationReminder" id="editIosAppAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editAndroidAppAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editAndroidAppAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editAndroidAppAlertContactFriendlyName" class="span6" type="text" value="" name="editAndroidAppAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editAndroidAppAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editAndroidAppAlertContactExcludeNotifications" class="selecttwo span6" name="editAndroidAppAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editAndroidAppAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editAndroidAppAlertContactSSLExpirationReminder" id="editAndroidAppAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editBaseAccountAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editBaseAccountAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span id="editBaseAccountAlertContactFriendlyName" class="span6"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f756a717e787e7b776e6a7a7a712e2b2c5f78727e7673317c7072">[email&#160;protected]</a></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editBaseAccountAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editBaseAccountAlertContactExcludeNotifications" class="selecttwo span6" name="editBaseAccountAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editBaseAccountAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editBaseAccountAlertContactSSLExpirationReminder" id="editBaseAccountAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
                                                                                    <input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJlZGl0QmFzZUFjY291bnRFbWFpbEFsZXJ0Q29udGFjdCIsInRpbWVzdGFtcCI6MTY0NTE3NDAyMn0.XmNLr_GISbxkNZTU0i47TG5un_9Ay2JshDklP23nEtEcn1nQcF5zwltSuOsEzncEA9lQRii5AJQRNR7kVMWZAw"
                                                                                        name="formToken" />
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editMSTeamsAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editMSTeamsAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editMSTeamsAlertContactFriendlyName" class="span6" type="text" value="" name="editMSTeamsAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMSTeamsAlertContactWebHookURL" class="control-label breakword">MS Teams Webhook URL <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold breakword" id="editMSTeamsAlertContactWebHookURL"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMSTeamsAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editMSTeamsAlertContactExcludeNotifications" class="selecttwo span6" name="editMSTeamsAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMSTeamsAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editMSTeamsAlertContactSSLExpirationReminder" id="editMSTeamsAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />
                                                                                    <span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="editHangoutsChatAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editHangoutsChatAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editHangoutsChatAlertContactFriendlyName" class="span6" type="text" value="" name="editHangoutsChatAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHangoutsChatAlertContactRoomURL" class="control-label">Room URL <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editHangoutsChatAlertContactRoomURL" class="span6" type="text" value="" name="editHangoutsChatAlertContactRoomURL">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHangoutsChatAlertContactCustomValue" class="control-label">Custom Message </label>
                                                                                <div class="controls">
                                                                                    <input id="editHangoutsChatAlertContactCustomValue" class="span6" type="text" value="" name="editHangoutsChatAlertContactCustomValue">
                                                                                    <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHangoutsChatAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <div class="span8">
                                                                                        <select id="editHangoutsChatAlertContactExcludeNotifications" class="selecttwo span8" name="editHangoutsChatAlertContactExcludeNotifications" style="float:none;">
<option selected="selected" value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editHangoutsChatAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editHangoutsChatAlertContactSSLExpirationReminder" id="editHangoutsChatAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />
                                                                                    <span class="proFeatureDisabledTextInherited">
(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)
</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <div class="alert alert-info no-margin">
                                                                                    <strong class="alert-info">Important!</strong> The room url can be found in the <a href="https://chat.google.com/" target="_blank">chat.google.com</a> > Room menu > Configure
                                                                                    webhooks > Add new > Copy room url.
                                                                                    <p>If you prefer to update the webhook's image to UptimeRobot's logo, <a href="https://uptimerobot.com/assets/img/logo-square.png" target="_blank">here it is</a>)</p>
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editDiscordAlertContact">
                                                                            <li class="control-group">
                                                                                <label for="editDiscordAlertContactFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editDiscordAlertContactFriendlyName" class="span6" type="text" value="" name="editDiscordAlertContactFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editDiscordAlertContactValue" class="control-label">Discord WebHook URL <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <span class="bold" id="editDiscordAlertContactValue" style="word-break: break-all;"></span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editDiscordAlertContactCustomValue" class="control-label">Custom Value </label>
                                                                                <div class="controls">
                                                                                    <input id="editDiscordAlertContactCustomValue" class="span6" type="text" value="" name="editDiscordAlertContactCustomValue">
                                                                                    <span class="help-block">An optional text that'll be added to each notification.</span>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editDiscordAlertContactExcludeNotifications" class="control-label">Enable notifications for: </label>
                                                                                <div class="controls">
                                                                                    <select id="editDiscordAlertContactExcludeNotifications" class="selecttwo span6" name="editDiscordAlertContactExcludeNotifications" style="float:none;">
<option value="0">Up & down events</option>
<option value="1">Only down events</option>
<option value="2">Only up events</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editDiscordAlertContactSSLExpirationReminder" class="control-label">Get SSL expiration reminder notifications</label>
                                                                                <div class="controls">
                                                                                    <input type="checkbox" name="editDiscordAlertContactSSLExpirationReminder" id="editDiscordAlertContactSSLExpirationReminder" value="1" class="leftFloat" disabled="disabled" />                                                                                    <span class="proFeatureDisabledTextInherited">(Pro Plan feature. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="edit_alert_contact-ssl_expiration-reminder">Upgrade</a>?)</span>
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

                                            <div id="editAlertContactSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Alert contact edited!</strong> You can keep editing alert contacts.
                                            </div>
                                            <div id="editAlertContactNoGoogleAdwordsCampaignNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-warning">Alert contact edited!</strong> But, alert contact will not be activated until you select Google AdWords campaigns to manage with this alert contact.
                                            </div>
                                            <div id="editAlertContactNoFacebookAdsCampaignNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-warning">Alert contact edited!</strong> But, alert contact will not be activated until you select Facebook Ads campaigns to manage with this alert contact.
                                            </div>
                                            <div id="editAlertContactExistsNotification" class="alert alert-danger no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-danger">Alert contact could not be saved!</strong> An alert contact with similar data exists.
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
                                                                            <button type="submit" class="btn btn-blue enableWidgetButton">Enable Widget</button>
                                                                            <br><br>
                                                                            <span class='f14'>Please click to enable widgets for this monitor.</span>
                                                                        </div>
                                                                        <div class='disableWidgetWrapper hide'>
                                                                            <button type="submit" class="btn btn-red disableWidgetButton">Disable Widget</button>
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
                                                                        <h4 class="test">Widget Generation Tool</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <label for="newMonitorWidgetType" class="control-label">Widget Type <span class="required">*</span></label>
                                                                        <div class="controls">
                                                                            <select id="newMonitorWidgetType" class="selecttwo span8" name="newMonitorWidgetType" style="float:none;">
<option selected="selected" value="0">Please Select</option>
<option value="1">Type1 - Detailed</option>
<option value="2">Type2 - Summary</option>
</select>
                                                                        </div>
                                                                    </li>

                                                                    <li class="control-group widgetColorStep hide">
                                                                        <label for="newMonitorWidgetColor" class="control-label">Widget Color <span class="required">*</span></label>
                                                                        <div class="controls">
                                                                            <select id="newMonitorWidgetColor" class="selecttwo span8" name="newMonitorWidgetColor" style="float:none;">
<option selected="selected" value="0">Please Select</option>
<option value="1">Black</option>
<option value="2">Green</option>
</select>
                                                                        </div>
                                                                    </li>

                                                                    <li class="control-group widgetPeriodStep hide">
                                                                        <label for="newMonitorWidgetPeriod" class="control-label">Widget Period <span class="required">*</span></label>
                                                                        <div class="controls">
                                                                            <select id="newMonitorWidgetPeriod" class="selecttwo span8" name="newMonitorWidgetPeriod" style="float:none;">
<option selected="selected" value="0">Please Select</option>
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
                                                                            <a href="" class="widgetLink" target='_blank'></a>
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
                                                    <h4 class="debugMonitorPanelTitle"><i class="fontello-icon-briefcase"></i> Debug Monitor (<label class="debugMonitorType label"></label><label class="debugMonitorName"></label><a href="" class="debugMonitorUrl" target="_blank"><i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.6em;"></i></a>)</h4>
                                                    <label class="debugMonitorID"></label>
                                                    <label class="debugMonitorIP"></label>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="widget-body">
                                                        <div class="row-fluid">
                                                            <div class="span6 form-dark" style="padding-right: 2.5%; border-right: 1px solid #ccc;">
                                                                <fieldset>
                                                                    <ul class="form-list label-left list-bordered dotted">
                                                                        <li class="section-form">
                                                                            <h4>Current Configuration</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="debugMonitorCurrentServer" class="control-label span6">Server :</label>
                                                                            <div class="controls">
                                                                                <select id="debugMonitorCurrentServer" class="selecttwo span10 debugMonitorCurrentServer" name="debugMonitorCurrentServer">
</select>
                                                                                <a href="javascript:" class="copyDebugServerBtn" data-copy-element="#debugMonitorCurrentServer">Copy</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group debugMonitorRequestTypeBlock">
                                                                            <label for="debugMonitorCurrentRequestType" class="control-label span6">Request Type :</label>
                                                                            <div class="controls">
                                                                                <select id="debugMonitorCurrentRequestType" class="selecttwo span10" name="debugMonitorCurrentRequestType">
<option value="HEAD">HEAD</option>
<option value="GET">GET</option>
</select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group debugMonitorUserAgentBlock">
                                                                            <label for="debugMonitorCurrentUserAgent" class="control-label span6">Custom User Agent :</label>
                                                                            <div class="controls">
                                                                                <input id="debugMonitorCurrentUserAgent" class="span6 validateIgnore" type="text" value="" name="debugMonitorCurrentUserAgent">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <div class="span4">
                                                                                <label for="debugMonitorCurrentIsTrace" class="control-label span4">TRACE</label>
                                                                                <input id="debugMonitorCurrentIsTrace" class="checkbox" type="checkbox" value="1" name="debugMonitorCurrentIsTrace">
                                                                            </div>
                                                                            <div class="span4">
                                                                                <label for="debugMonitorCurrentIsPing" class="control-label span4">PING</label>
                                                                                <input id="debugMonitorCurrentIsPing" class="checkbox" type="checkbox" value="1" name="debugMonitorCurrentIsPing">
                                                                            </div>
                                                                            <div class="span4 debugMonitorIsHttpBlock">
                                                                                <label for="debugMonitorCurrentIsHttp" class="control-label span4">HTTP</label>
                                                                                <input id="debugMonitorCurrentIsHttp" class="checkbox" type="checkbox" value="1" name="debugMonitorCurrentIsHttp">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <button type="submit" class="btn btn-primary debugCurrentSubmit">Debug</button>
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
                                                                            <label for="debugMonitorCustomServer" class="control-label span6">Server :</label>
                                                                            <div class="controls">
                                                                                <select id="debugMonitorCustomServer" class="selecttwo span10 debugMonitorCustomServer" name="debugMonitorCustomServer">
<option selected="selected" value="0">Please Select</option>
</select>
                                                                                <a href="javascript:" class="copyDebugServerBtn" data-copy-element="#debugMonitorCustomServer">Copy</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group debugMonitorRequestTypeBlock">
                                                                            <label for="debugMonitorCustomRequestType" class="control-label span6">Request Type :</label>
                                                                            <div class="controls">
                                                                                <select id="debugMonitorCustomRequestType" class="selecttwo span10" name="debugMonitorCustomRequestType">
<option value="HEAD">HEAD</option>
<option value="GET">GET</option>
</select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <div class="span4">
                                                                                <label for="debugMonitorCustomIsTrace" class="control-label span4">TRACE</label>
                                                                                <input id="debugMonitorCustomIsTrace" class="checkbox" type="checkbox" value="1" name="debugMonitorCustomIsTrace">
                                                                            </div>
                                                                            <div class="span4">
                                                                                <label for="debugMonitorCustomIsPing" class="control-label span4">PING</label>
                                                                                <input id="debugMonitorCustomIsPing" class="checkbox" type="checkbox" value="1" name="debugMonitorCustomIsPing">
                                                                            </div>
                                                                            <div class="span4 debugMonitorIsHttpBlock">
                                                                                <label for="debugMonitorCustomIsHttp" class="control-label span4">HTTP</label>
                                                                                <input id="debugMonitorCustomIsHttp" class="checkbox" type="checkbox" value="1" name="debugMonitorCustomIsHttp">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label style="color: red;" class="customDebugError hide">Please select a debug server.</label>
                                                                            <button type="submit" class="btn btn-primary debugCustomSubmit">Debug</button>
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
                                                                            <li class="active"><a href="javascript:" data-resulttype="ping">Ping</a></li>
                                                                            <li class="portResBlockBtn"><a href="javascript:" data-resulttype="port">Port</a></li>
                                                                            <li><a href="javascript:" data-resulttype="tracert">Tracert</a></li>
                                                                            <li class="headerResBlockBtn"><a href="javascript:" data-resulttype="headerResBlock">Header</a></li>
                                                                            <li class="httpResBtn"><a href="javascript:" data-resulttype="http">Http</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="debugResultTexts">
                                                                        <ul class="debugResultTextsContainer">
                                                                            <li class="ping active">
                                                                                <span><strong>Target:</strong> </span><span class="target"></span><br>
                                                                                <span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
                                                                                <span><strong>Result:</strong> </span><span class="stat"></span>
                                                                            </li>
                                                                            <li class="port">
                                                                                <span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
                                                                                <span><strong>Result:</strong> </span><span class="stat"></span>
                                                                            </li>
                                                                            <li class="tracert">
                                                                                <span><strong>Tracing route to</strong> </span><span class="target"></span><br><br>
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
                                                                            <li class="active"><a href="javascript:" data-resulttype="ping">Ping</a></li>
                                                                            <li class="portResBlockBtn"><a href="javascript:" data-resulttype="port">Port</a></li>
                                                                            <li><a href="javascript:" data-resulttype="tracert">Tracert</a></li>
                                                                            <li class="headerResBlockBtn"><a href="javascript:" data-resulttype="headerResBlock">Header</a></li>
                                                                            <li class="httpResBtn"><a href="javascript:" data-resulttype="http">Http</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="debugResultTexts">
                                                                        <ul class="debugResultTextsContainer">
                                                                            <li class="ping active">
                                                                                <span><strong>Target:</strong> </span><span class="target"></span><br>
                                                                                <span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
                                                                                <span><strong>Result:</strong> </span><span class="stat"></span>
                                                                            </li>
                                                                            <li class="port">
                                                                                <span><strong>Total Duration: </strong></span><span class="totalduration"></span><br>
                                                                                <span><strong>Result:</strong> </span><span class="stat"></span>
                                                                            </li>
                                                                            <li class="tracert">
                                                                                <span><strong>Tracing route to</strong> </span><span class="target"></span><br><br>
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

                                            <div id="debugMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
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
                    <div id="sessionWarning" class="modal hide fade" tabindex="-1" data-width="35%" data-keyboard="false" data-backdrop="static">
                        <div class="modal-header"> </div>
                        <div class="modal-body">
                            <div class="tab-pane padding-bottom30 active fade in">
                                <div class="row-fluid">
                                    <div class="spa12 grider">
                                        <div class="alert alert-warning no-margin">
                                            <strong class="alert-warning">Warning!</strong> The session has expired. Please <a href="/login" style="color:#c09853; text-decoration:underline;">click here</a> to login again.
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    <div id="intervalUpgrade" class="modal hide fade" tabindex="-1" data-width="35%" data-keyboard="false" data-backdrop="static">
                        <div class="modal-header"> </div>
                        <div class="modal-body">
                            <div class="tab-pane active fade in">
                                <div class="row-fluid">
                                    <div class="spa12 grider">
                                        <div class="alert alert-info no-margin">
                                            You can set 5 minutes as the lowest monitoring interval in the free plan. Upgrade to PRO plan and be notified 5x faster!
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn">Close</button>
                            <button type="submit" class="btn btn-primary upgradeProAccount" data-toggle="modal" data-target="#upgradeAccount" onclick="$('#intervalUpgrade').modal('hide');">Upgrade</button>
                        </div>
                    </div>
                    <div id="bulkActions" class="modal hide fade" tabindex="-1" data-width="40%">
                        <div class="modal-header"> </div>
                        <form id="bulkActionsForm" class="form-horizontal" method="POST" action="inc/dml/monitorDML.php?action=bulkAction">
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
                                                                            <label for="bulkActionType" class="control-label">I want to
<span class="required">*</span>
</label>
                                                                            <div class="controls">
                                                                                <select id="bulkActionType" class="selecttwo span10" name="bulkActionType">
<option selected="selected" data-approvetext="-" value="0">Please Select</option>
<option value="1" data-approvetext="PAUSE MONITORS">Pause Monitors</option>
<option value="2" data-approvetext="START MONITORS">Start Monitors</option>
<option value="6" data-approvetext="RESET MONITORS">Reset Monitors</option>
<option value="3" data-approvetext="DELETE MONITORS">Delete Monitors</option>
<option value="4" data-approvetext="CHANGE INTERVAL">Change Intervals Of Monitors</option>
<option value="5" data-approvetext="CHANGE ALERT CONTACTS">Change Alert Contacts Of Monitors</option>
<option value="9" data-approvetext="CHANGE TIMEOUT">Change Timeouts Of Monitors</option>
 <option value="7" disabled>Change SSL Settings Of Monitors (Pro Plan)</option>
<option value="8" disabled>Add Maintenance Window To Monitors (Pro Plan)</option>
</select>
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="bulkType" class="control-label">Applies to <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <select id="bulkType" class="selecttwo span10" name="bulkType" style="float:none;">
<option selected="selected" value="0">Please Select</option>
<option value="1">For all the monitors</option>
<option value="2">For selected monitors</option>
</select>
                                                                            </div>
                                                                        </li>
                                                                        <li id="bulkActionMonitorSelect" class="control-group hide">
                                                                            <label for="bulkActionMonitorList" class="control-label">Monitors</label>
                                                                            <div class="controls">
                                                                                <input type="hidden" id="bulkActionMonitorList" multiple="multiple" class="span10" />
                                                                            </div>
                                                                        </li>
                                                                        <li id="bulkEditSelectedMonitorsList" class="control-group hide">
                                                                            <select id="bulkEditSelectedMonitors" name="bulkEditSelectedMonitors[]" multiple="multiple">
<option value="0">0</option>
</select>
                                                                        </li>

                                                                        <div class="hide" id="bulkActionChangeIntervalsWrapper">
                                                                            <li class="control-group">
                                                                                <label for="bulkActionInterval" class="control-label">Monitoring Interval <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <div class="noUiSlider newEditMonitorSlider span6"></div>
                                                                                    <span class="help-inline span5">every <b id="bulkActionIntervalDisplay">5</b> <span class="intervalMinHourText">minutes</span></span>
                                                                                    <input type="text" id="bulkActionInterval" name="bulkActionInterval" value="300" class="hide">
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="bulkActionSSLSettingsWrapper">
                                                                            <li class="section-form">
                                                                                <h4 class="test">SSL Settings</h4>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="bulkActionIgnoreSSLErrors" class="control-label">Ignore SSL errors </label>
                                                                                <div class="controls">
                                                                                    <input id="bulkActionIgnoreSSLErrorsEnabled" class="leftFloat hide" type="hidden" name="bulkActionIgnoreSSLErrorsEnabled" value="1" disabled="disabled">
                                                                                    <input id="bulkActionIgnoreSSLErrors" class="leftFloat hide" type="checkbox" name="bulkActionIgnoreSSLErrors" value="1" disabled="disabled"> <a class="enableBulkIgnoreSSLErrorsEditing">(Click to enable for editing.)</a>                                                                                    <a class="disableBulkIgnoreSSLErrorsEditing hide">(Click to disable for editing.)</a>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="bulkActionSSLCheckDisableStatus" class="control-label">Disable SSL expiry reminders </label>
                                                                                <div class="controls">
                                                                                    <input id="bulkActionSSLCheckDisableStatusEnabled" class="leftFloat hide" type="hidden" name="bulkActionSSLCheckDisableStatusEnabled" value="1" disabled="disabled">
                                                                                    <input id="bulkActionSSLCheckDisableStatus" class="leftFloat hide" type="checkbox" name="bulkActionSSLCheckDisableStatus" value="1" disabled="disabled"> <a class="enableBulkSSLCheckDisableStatusEditing">(Click to enable for editing.)</a>                                                                                    <a class="disableBulkSSLCheckDisableStatusEditing hide">(Click to disable for editing.)</a>
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="bulkActionAlertContactsWrapper">
                                                                            <br />
                                                                            <input type="hidden" name="alertContactsInputBulk" class="alertContactsInputBulk" />
                                                                            <div id="bulkActionAlertContacts" class="alertContactsContainerBulk">
                                                                            </div>
                                                                            <input type="hidden" class="getAlertContactsEditOrListDetector" value="0" />
                                                                        </div>
                                                                        <div class="hide" id="bulkActionChangeTimeoutsWrapper">
                                                                            <li class="control-group">
                                                                                <label for="bulkActionTimeout" class="control-label">Monitoring Timeout <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <div class="noUiSlider timeoutSlider span6"></div>
                                                                                    <span class="help-inline span5">in <b id="bulkActionTimeoutDisplay"></b> <span class="timeoutInText"><b>30</b> seconds</span></span>
                                                                                    <input type="text" id="bulkActionTimeout" name="bulkActionTimeout" class="monitorTimeout hide" value="30" class="hide">
                                                                                </div>
                                                                            </li>
                                                                        </div>
                                                                        <div class="hide" id="bulkAddMaintenanceWindowWrapper"></div>
                                                                        <input type="hidden" name="mWindowsInputBulk" class="mWindowsInputBulk" />
                                                                    </ul>
                                                                    <ul class="form-list label-left list-bordered dotted hide" id="bulkActionApproveTextWrapper">
                                                                        <li class="section-form">
                                                                            <h4 class="test">Action Approval</h4>
                                                                        </li>

                                                                        <div>
                                                                            <li class="control-group">
                                                                                <div class="alert alert-info no-margin">
                                                                                    Please write <span id="bulkActionApproveTextInfo" class="bold"></span> to the field below to approve the action.
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="bulkActionApproveText" class="control-label">Approval Text <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="bulkActionApproveText" class="span6" type="text" value="" name="bulkActionApproveText">
                                                                                    <input id="bulkActionApproveTextHidden" class="span6" type="hidden" value="" name="bulkActionApproveTextHidden">
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

                                            <div id="bulkActionSuccessNotification" class="alert alert-success no-margin hide">
                                                <strong class="alert-success">Bulk Action Completed!</strong> You can apply new actions (or <a href="#no" onclick="window.location.reload();">refresh the page</a> to see an updated view).
                                            </div>
                                            <div id="bulkActionErrorNotification" class="alert alert-error no-margin hide"></div>
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
                    <div id="bulkImportUpload" class="modal hide fade in" tabindex="-1" data-width="70%" data-backdrop="static" data-keyboard="false">
                        <div class="modal-header"> </div>
                        <form id="bulkImportActionForm" class="form-horizontal" method="POST" action="inc/dml/monitorDML.php?action=validateBulkImportUpload">
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
                                                                            <p class="alert alert-info" style="margin: 0 0 8px 0;">This is a PRO feature. If you need to import large amount of monitors, upgrade to PRO plan first.</p>
                                                                        </li>
                                                                        <li style="border-bottom:none;">
                                                                            <p>
                                                                                Using this dialog, you can import any number of monitors (that fit to your accounts limit). Below is a guide on how to create a valid import file. After the import, monitors will be started automatically.
                                                                            </p>
                                                                        </li>
                                                                        <li class="section-form">
                                                                            <h3 class="test">Creating import file</h3>
                                                                        </li>
                                                                        <li>
                                                                            <ol>
                                                                                <li><a href="downloads/TemplateBulkImportFile.csv">Download file template</a></li>
                                                                                <li>Download <a href="inc/dml/monitorDML.php?action=exportAlertContacts">your alert contacts</a> (If you don't have any alert contacts, go create them first!)</li>
                                                                                <li>Fill the template with your specific monitor attributes (see below for explanation)</li>
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
                                                                                <li><strong>Type:</strong> Monitor type, possible values <code>HTTP, Ping, Port, Keyword</code></li>
                                                                                <li><strong>Friendly Name:</strong> name of your monitor as it will be displayed in UI and on Status pages</li>
                                                                                <li><strong>URL/IP:</strong> the monitored resource</li>
                                                                                <li><strong>Interval:</strong> monitoring interval, possible values <code>1-1440</code></li>
                                                                                <li><strong>Keyword type:</strong> for keyword monitor polarity (alert when), possible values: <code>1 (If exists) / 0 (If not exists)</code></li>
                                                                                <li><strong>Keyword value:</strong> the specific string value for keyword monitors, keep empty otherwise</li>
                                                                                <li><strong>Port:</strong> the port number in case of Port monitor, keep empty for otherwise</li>
                                                                                <li>
                                                                                    <strong>Alert Contacts:</strong> where to send notifications in case of an outage<br />
                                                                                    <p class="alert alert-warning" role="alert" style="margin: 10px 0;">We strongly recommend attaching alert contacts when importing monitors, if you don't have alert contacts yet, add them first.</p>
                                                                                    <p>
                                                                                        Use the <a href="inc/dml/monitorDML.php?action=exportAlertContacts">alert contacts file</a> to prepare your specific values for each monitor. Format: <code>{&lt;alertContactId&gt;;&lt;threshold&gt;;&lt;recurrence&gt;}</code>                                                                                        &rarr; separate multiple contacts with <code>|</code>. See explained threshold and recurrence attributes at example below.
                                                                                    </p>
                                                                                    <ul>
                                                                                        <li><strong>Threshold:</strong> the number (in minutes) after when outage is still active you want to get notification, possible values: <code>0-720</code></li>
                                                                                        <li><strong>Recurrence:</strong> get notification every X minutes while the outage lasts, possible values: <code>0-60</code></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <ul class="form-list label-left">
                                                                        <li class="section-form">
                                                                            <h4 class="test">Example (<a href="downloads/ExampleBulkImportFile.csv">download file</a>)</h4>
                                                                        </li>
                                                                        <li><img src="/assets/img/monitor_import_example.png" /></li>
                                                                    </ul>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <ul class="form-list label-left list-bordered dotted form-inline">
                                                                        <li class="section-form">
                                                                            <h3 class="test">Upload file</h3>
                                                                        </li>
                                                                        <li class="form-group">
                                                                            <label for="newMonitorsBulkFile" class="control-label" style="width: 170px;">File (can be .csv, max 10MB)</label>
                                                                            <div class="controls pull-right">
                                                                                <input id="newMonitorsBulkFile" type="file" name="newMonitorsBulkFile" accept=".csv" required>
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
                                                        <li><a id="validatedMonitorsTabLink" class="hide" href="#validatedMonitors" data-toggle="tab"><i class="fontello-icon-ok-circle"></i> Validated Monitors <span></span></a></li>
                                                        <li><a id="failedMonitorsTabLink" class="hide" href="#failedMonitors" data-toggle="tab"><i class="fontello-icon-attention"></i> Failed Monitors <span></span></a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="validatedMonitors">
                                                            <div class="dataTables_scroll">
                                                                <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                    <div class="dataTables_scrollHeadInner">
                                                                        <table id="bulkImportSuccessResults" class="table boo-table table-bordered table-condensed table-hover" style="background: url('../../../assets/img/table/loading-background.png')">
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
                                                                        <div style="position: absolute; top: 0px; left: 0px; width: 1px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="failedMonitors">
                                                            <div class="dataTables_scroll">
                                                                <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                                    <div class="dataTables_scrollHeadInner">
                                                                        <table id="bulkImportErrorResults" class="table boo-table table-bordered table-condensed table-hover" style="background: url('assets/img/table/loading-background.png')">
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
                                                                        <div style="position: absolute; top: 0px; left: 0px; width: 1px; height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div id="bulkImportSuccessNotification" class="alert alert-success no-margin hide">
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
                                <button id="clearBulkImportButton" type="button" data-dismiss="modal" class="btn">Close</button>
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
                                                        <img src="assets/img/interval-icon.svg" alt="status page icon" width="50" />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5><s>5 min.</s> 1 min. monitoring interval</h5>
                                                        Get notified about downtimes 5x faster.
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row" style="margin-bottom: 15px">
                                                    <div class="col-md-3 text-center">
                                                        <img src="assets/img/statuspage-icon.svg" alt="status page icon" width="50" />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5>Status page customizations</h5>
                                                        Customize, link your domain and notify customers.
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row" style="margin-bottom: 15px">
                                                    <div class="col-md-3 text-center">
                                                        <img src="assets/img/ssl-monitoring.svg" alt="ssl icon" width="50" />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5>SSL certificate monitoring</h5>
                                                        Monitor SSL errors and certificate expiry dates.
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row" style="margin-bottom: 15px">
                                                    <div class="col-md-3 text-center">
                                                        <img src="assets/img/cron-job-monitoring.svg" alt="cron job icon" width="50" />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5>Background job monitoring</h5>
                                                        Monitor recurring jobs or intranet devices.
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row" style="margin-bottom: 15px">
                                                    <div class="col-md-3 text-center">
                                                        <img src="assets/img/more-icon.svg" alt="ssl icon" width="50" />
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h5>...and more!</h5>
                                                        Custom HTTP headers &amp; statuses, maintenance windows, and 24 months log retention.
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
                                                                    <h4 id="upgradeFormTitle"><i class="fontello-icon-edit"></i> The Current Plan</h4>
                                                                </div>
                                                                <div class="widget-content">
                                                                    <div class="widget-body">
                                                                        <p id="upgradeAccountCurrentDetails">You are using Free Plan (50 monitors, 5 minute intervals).</p>
                                                                        <p id="upgradeSMSCurrentDetails" class="hide">You have 0 SMS or voice-calls left.</p>
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
                                                                                    <ul class="form-list label-left list-bordered dotted form-horizontal" style="margin-bottom: 0; border-bottom: 1px dotted #bec2c4;">

                                                                                        <li class="control-group">
                                                                                            <label for="proPlanMonitorLimit" class="control-label">Number of monitors</label>
                                                                                            <div class="controls">
                                                                                                <select id="proPlanMonitorLimit" class="span4" name="proPlanMonitorLimit" style="height:auto; font-size:16px; background:#FFF; color:#333; padding:0; margin:0; min-width:80px;">
<option data-addedvalue1="20" data-annualmonthlyprice="7" data-annualprice="84.00" data-feature1="1" data-monthlyprice="8.00" data-onceprice="" data-productname="50 Monitors (1-minute monitoring)" data-productsku="pro50" value="91">
50
</option><option data-addedvalue1="30" data-annualmonthlyprice="21" data-annualprice="252.00" data-feature1="1" data-monthlyprice="26.00" data-onceprice="" data-productname="100 Monitors (1-minute monitoring)" data-productsku="pro100" value="92">
100
</option><option data-addedvalue1="50" data-annualmonthlyprice="28" data-annualprice="336.00" data-feature1="1" data-monthlyprice="34.00" data-onceprice="" data-productname="200 Monitors (1-minute monitoring)" data-productsku="pro200" value="93">
200
</option><option data-addedvalue1="100" data-annualmonthlyprice="62" data-annualprice="744.00" data-feature1="1" data-monthlyprice="74.00" data-onceprice="" data-productname="500 Monitors (1-minute monitoring)" data-productsku="pro500" value="94">
500
</option><option data-addedvalue1="160" data-annualmonthlyprice="121" data-annualprice="1452.00" data-feature1="1" data-monthlyprice="134.00" data-onceprice="" data-productname="1,000 Monitors (1-minute monitoring)" data-productsku="pro1000" value="95">
1000
</option><option data-addedvalue1="240" data-annualmonthlyprice="204" data-annualprice="2448.00" data-feature1="1" data-monthlyprice="224.00" data-onceprice="" data-productname="2,000 Monitors (1-minute monitoring)" data-productsku="pro2000" value="96">
2000
</option><option data-addedvalue1="480" data-annualmonthlyprice="412" data-annualprice="4944.00" data-feature1="1" data-monthlyprice="444.00" data-onceprice="" data-productname="5,000 Monitors (1-minute monitoring)" data-productsku="pro5000" value="97">
5000
</option><option data-addedvalue1="900" data-annualmonthlyprice="828" data-annualprice="9936.00" data-feature1="1" data-monthlyprice="884.00" data-onceprice="" data-productname="10,000 Monitors (1-minute monitoring)" data-productsku="pro10000" value="98">
10000
</option> </select> &nbsp;monitors
                                                                                            </div>
                                                                                        </li>

                                                                                        <li class="control-group">
                                                                                            <label for="proPlanSMSCredits" class="control-label">SMS or Voice-calls</label>
                                                                                            <div class="controls">
                                                                                                <span class="pricingProSMS"></span> <small>(doesn't renew but more messages (or calls) can be purchased anytime)</small>
                                                                                            </div>
                                                                                        </li>

                                                                                        </li>


                                                                                    </ul>
                                                                                    <div class="container-fluid" style="border-top: 1px dotted #fff;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 old-price-strike hidden" style="margin-top: 15px;">
                                                                                                <span style="color:#FFF; background:#faa05a; padding:3px 5px; border-radius: 3px;">Special entry offer!</span>
                                                                                            </div>
                                                                                            <div class="col-md-6 proPricingMonthlyAnnual">
                                                                                                <div>
                                                                                                    <h3 class="inline-block" style="margin: 0;"><s class="old-price-strike hidden" style="opacity: 0.5">$15</s> $</h3>
                                                                                                    <h3 class="inline-block pricingAnnualMonthlyPrice" style="margin:0;"></h3>
                                                                                                    <h4 class="inline-block" style="margin: 0;"> / month</h4><br /> billed annually
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 proPricingMonthlyAnnual">
                                                                                                <h3 class="inline-block" style="margin: 0; font-weight: normal;"><s class="old-price-strike hidden" style="opacity: 0.5">$18</s> $</h3>
                                                                                                <h3 class="inline-block pricingMonthlyPrice annual-possible" style="margin:0; font-weight: normal;"></h3>
                                                                                                <h4 class="inline-block" style="margin: 0; font-weight: normal;"> / month</h4><br /> billed monthly
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="proPricingMonthly hide">
                                                                                                    <h3 class="inline-block" style="margin-bottom: 0;">$</h3>
                                                                                                    <h3 class="inline-block pricingMonthlyPrice" style="margin:-10px 0 0 0; line-height:20px;"></h3>
                                                                                                    <h4 class="inline-block" style="margin-bottom: 0;"> / month</h4> (No annual billing option exists for this plan).
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
                                                                                    <ul class="form-list label-left list-bordered dotted form-horizontal">

                                                                                        <li class="control-group">
                                                                                            <label for="proSMSCredits" class="control-label">Number of messages/calls</label>
                                                                                            <div class="controls">
                                                                                                <select id="proSMSCredits" class="span6" name="proSMSCredits" style="height:auto; font-size:inherit; background:#FFF; color:#333; padding:0; margin:0;">
<option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="15.00" data-productname="100 SMS (or voice calls)" data-productsku="sms100" value="19">
100
</option><option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="25.00" data-productname="200 SMS (or voice calls)" data-productsku="sms200" value="20">
200
</option><option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="55.00" data-productname="500 SMS (or voice calls)" data-productsku="sms500" value="30">
500
</option><option data-addedvalue1="" data-annualmonthlyprice="0" data-annualprice="" data-feature1="" data-monthlyprice="" data-onceprice="100.00" data-productname="1000 SMS (or voice calls)" data-productsku="sms1000" value="31">
1000
</option> </select>
                                                                                            </div>
                                                                                        </li>

                                                                                        <li class="control-group">
                                                                                            <small>Note: 1 notification = 1 SMS (or voice-call)</small>
                                                                                        </li>

                                                                                        <li class="control-group">
                                                                                            <div>
                                                                                                Pricing is
                                                                                                <h3 class="inline-block">$</h3>
                                                                                                <h3 class="inline-block pricingOncePrice" style="margin:-10px 0 0 0; line-height:20px;"></h3>
                                                                                                <h4 class="inline-block" style="margin-bottom: 0;">/one-time</h4>.
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
                                                                    <h4><i class="fontello-icon-ok-5"></i> Selected Plan <small style="color: #111; font-weight:normal;">(<a href="#no" class="showPaymentFormStep1 underlineLink text-color">edit</a>)</small></h4>
                                                                </div>
                                                                <div class="widget-content" style="height:40px;">
                                                                    <div class="widget-body">
                                                                        <p>You have selected "<span class="selectedProduct">100</span> <span class="selectedProductInfo">monitors Pro Plan</span>".</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="paymentFormStep3StatusWrapper" class="hide">
                                                            <div class="widget well" style="">
                                                                <div class="widget-header">
                                                                    <h4><i class="fontello-icon-ok-5"></i> Payment Details <small style="color: #111; font-weight:normal;">(<a href="#no" class="showPaymentFormStep2 underlineLink text-color">edit</a>)</small></h4>
                                                                </div>
                                                                <div class="widget-content" style="height:auto;">
                                                                    <div class="widget-body">
                                                                        <p>You will be charged
                                                                            <span id="pricingNoVATWrapper">
$<span class="pricingAnnualPrice"></span><span class="pricingMonthlyPrice hide"></span><span class="pricingOncePrice hide"></span> <span class="pricingPeriod">every year</span>
                                                                            <span class="pricingAnnualDeductionTinyInfo opaci75 hide"></span><span class="pricingMonthlyDeductionTinyInfo opaci75 hide"></span>
                                                                            </span>
                                                                            <span id="pricingVATWrapper" class="hide">
$<span class="pricingVATAnnualPrice">0</span><span class="pricingVATMonthlyPrice hide">0</span><span class="pricingVATOncePrice hide">0</span> <span class="pricingPeriod">every year</span>
                                                                            <span class="pricingAnnualDeductionTinyInfo opaci75 hide"></span><span class="pricingMonthlyDeductionTinyInfo opaci75 hide"></span> (including VAT).
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="paymentFormStep4StatusWrapper" class="hide">
                                                            <div class="widget well" style="">
                                                                <div class="widget-header">
                                                                    <h4><i class="fontello-icon-ok-5"></i> Billing Details <small style="color: #111; font-weight:normal;">(<a href="#no" class="showPaymentFormStep3 underlineLink text-color">edit</a>)</small></h4>
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
                                                                                <td><input type="radio" name="paymentPeriod" id="paymentPeriodAnnual" class="paymentPeriod" checked="checked" value="12"></td>
                                                                                <td id="annualPricingTitle">Annual</td>
                                                                                <td>
                                                                                    <div id="pricingAnnualPriceWrapper">$<span class="pricingAnnualPrice"></span>/year ($<span class="pricingAnnualMonthlyPrice"></span>/month - best price!)</div>
                                                                                    <div class="pricingAnnualDeductionInfo opaci75"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr id="monthlyPricingWrap">
                                                                                <td><input type="radio" name="paymentPeriod" id="paymentPeriodMonthly" class="paymentPeriod" value="1"></td>
                                                                                <td id="monthlyPricingTitle">Monthly</td>
                                                                                <td>
                                                                                    <div id="pricingMonthlyPriceWrapper">$<span class="pricingMonthlyPrice"></span>/month</div>
                                                                                    <div class="pricingMonthlyDeductionInfo opaci75"></div>
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
                                                                                <td><input type="radio" id="paymentTypeCreditCard" name="paymentMethod" class="paymentMethod" checked="checked" value="1"></td>
                                                                                <td>Credit Card</td>
                                                                            </tr>
                                                                            <tr id="paymentTypePayPalTR">
                                                                                <td><input type="radio" id="paymentTypePayPal" name="paymentMethod" class="paymentMethod" value="2"></td>
                                                                                <td>PayPal</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div id="paymentTypeSMSAppUpsell" class="alert alert-info margin-top20 hide" style="margin-right: 5px; margin-left: 5px;">
                                                                        If you would like to pay for credits by credit card, use our
                                                                        <strong><a href="https://blog.uptimerobot.com/redesigned-mobile-app/">brand new mobile app</a></strong> and pay via Apple Pay (iOS) or Google Pay (Android).
                                                                    </div>
                                                                    <input id="userProPlanUnusedValue" type="hidden" value="" />
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
                                                                        <ul class="form-list label-left list-bordered dotted">

                                                                            <div class="row-fluid">
                                                                                <div class="span6 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingName" class="control-label">Full name or company name <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingName" id="paymentBillingName" class="span10" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                                <div class="span6 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingAddress" class="control-label">Billing Address <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingAddress" id="paymentBillingAddress" class="span12" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row-fluid">
                                                                                <div class="span3 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingZipCode" class="control-label">Billing Zip <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingZipCode" id="paymentBillingZipCode" class="span12" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                                <div class="span3 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingState" class="control-label">Billing State</label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingState" id="paymentBillingState" class="span9" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                                <div class="span3 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingCity" class="control-label">Billing City <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingCity" id="paymentBillingCity" class="span12" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                                <div class="span3 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingPhoneNumber" class="control-label">Billing Phone</label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingPhoneNumber" id="paymentBillingPhoneNumber" class="span12" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row-fluid">
                                                                                <div class="span6 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingCountry" class="control-label">Billing Country <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <select id="paymentBillingCountry" class="span10 darkSelect" name="paymentBillingCountry">
<option value="">Please Select</option>
<option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATG">Antigua & Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia & Herzegovina</option><option value="BWA">Botswana</option><option value="BRA">Brazil</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="TCD">Chad</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COG">Congo</option><option value="COD">Congo, D.R.</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="CIV">Cote dIvoire</option><option value="HRV">Croatia</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option><option value="PYF">French Polynesia</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernsey</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="PRK">Korea South</option><option value="XKX">Kosovo</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Laos</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macau</option><option value="MKD">Macedonia</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="MDA">Moldova</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="ANT">Netherlands Antilles</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PSE">Palestinian Territory</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Reunion</option><option value="ROU">Romania</option><option value="RUS">Russia</option><option value="RWA">Rwanda</option><option value="KNA">Saint Kitts and Nevis</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome & Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="ZAF">South Africa</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="VCT">St Vincent and the Grenadines</option><option value="SUR">Suriname</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="TWN">Taiwan</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania</option><option value="THA">Thailand</option><option value="TGO">Togo</option><option value="TON">Tonga</option><option value="TTO">Trinidad & Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TCA">Turks & Caicos Islands</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="USA" selected="selected">United States</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="VGB">Virgin Islands, British</option><option value="VIR">Virgin Islands, U.S.</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option> </select>
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                                <div class="span6 form-dark">
                                                                                    <li class="control-group">
                                                                                        <label for="paymentBillingVAT" class="control-label">Billing VAT</label>
                                                                                        <div class="controls">
                                                                                            <input type="text" name="paymentBillingVAT" id="paymentBillingVAT" class="span12" value="" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div id="paymentVATInfoWrapper" class="row-fluid hide">
                                                                                <div class="span12 form-dark">
                                                                                    <div id="paymentVATInfo" class="alert alert-info no-margin">
                                                                                        <p><b>VAT Information: </b>An additional <span class="paymentVATInfoRatio"></span>% EU VAT will be added to the purchase <span class="paymentNonMaltaVATInfo">if no valid VAT Number is mentioned</span>
                                                                                            <span class="paymentMaltaVATInfo hide">(even if a valid VAT is mentioned as UptimeRobot is based in Malta)</span>.</p>
                                                                                    </div>
                                                                                    <br />
                                                                                    <p id="billingError" class="alert alert-danger no-margin hide">Something went wrong when trying to save your billing information. Please try again.</p>
                                                                                </div>
                                                                            </div>
                                                                        </ul>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="paymentFormStep4Wrapper" class="hide">
                                                            <input name="paymentFormStep4WrapperIsOpen" id="paymentFormStep4WrapperIsOpen" type="hidden" value="0" />
                                                            <input name="paymentFormStep4WrapperIsOpen" id="paymentFormStep4WrapperIsOpenFirstTime" type="hidden" value="1" />
                                                            <div id="stripePayment" class="widget well">
                                                                <div class="widget-header">
                                                                    <h4>Enter the Card Details</h4>
                                                                    <div class="card-images-header">
                                                                        <img src="assets/img/icon/payment-icons/visa_icon.png" />
                                                                        <img src="assets/img/icon/payment-icons/mastercard_icon.png" />
                                                                        <img src="assets/img/icon/payment-icons/amex_icon.png" />
                                                                        <img src="assets/img/icon/payment-icons/dinersclub_icon.png" />

                                                                    </div>
                                                                </div>
                                                                <div class="widget-content">
                                                                    <div class="widget-body">
                                                                        <input type="hidden" name="setupIntentId" id="setupIntentId" val="" />
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
                                                                        <p>You will be redirected to the PayPal's payment page.</p>
                                                                        <input type="hidden" name="lc" value="US">
                                                                        <input type="hidden" name="image_url" value="https://uptimerobot.com/assets/img/uptimerobot-logo-paypal.png">
                                                                        <input type="hidden" name="business" value="paypalmt@uptimerobot.com">
                                                                        <input type="hidden" name="currency_code" value="USD">
                                                                        <input type="hidden" name="notify_url" value="https://uptimerobot.com/inc/dml/paymentDML.php?action=paypalPayment&userVerificationCode=u1612895-792c3d63db1ebe1297b57744eb989265">
                                                                        <input type="hidden" name="return" value="https://uptimerobot.com/dashboard?paymentSuccess=1#mySettings">
                                                                        <input type="hidden" name="rm" value="2">
                                                                        <input type="hidden" name="cancel_return" value="https://uptimerobot.com/dashboard#mySettings">
                                                                        <input type="hidden" name="no_shipping" value="1">

                                                                        <input type="hidden" id="paypalCMD" name="cmd" value="">

                                                                        <input type="hidden" id="paypalProductName" name="item_name" value="">
                                                                        <input type="hidden" id="paypalProductSKU" name="item_number" value="">
                                                                        <div id="paypalVariablesInsideForm">
                                                                            <div id="paypalSubscriptionVariables">

                                                                                <input type="hidden" id="paypalProductDeductedValue" name="a1" value="">
                                                                                <input type="hidden" name="p1" value="1">
                                                                                <input type="hidden" id="paypalDeductionPeriodIdentifier" name="t1" value="">

                                                                                <input type="hidden" id="paypalProductPrice" name="a3" value="">
                                                                                <input type="hidden" name="p3" value="1">
                                                                                <input type="hidden" id="paypalSubscriptionPeriodIdentifier" name="t3" value="">
                                                                            </div>
                                                                            <div id="paypalOnetimeVariables">

                                                                                <input type="hidden" id="paypalAmount" name="amount" value="">
                                                                            </div>
                                                                        </div>

                                                                        <input type="hidden" name="src" value="1">
                                                                        <input type="hidden" id="paypalNewUpgradeRenewalText" name="paypalNewUpgradeRenewalText" value="">
                                                                        <input type="submit" value="" style="width:200px; height:43px; background:url(assets/img/paypal-checkout.png) no-repeat; border: 0px;; cursor:pointer;" />
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
                                                                    <p><i class="fontello-icon-ok-4"></i> The payment is completed successfully (and the account is updated accordingly).</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="paymentSuccessNotification" class="hide alert alert-success no-margin">
                                                            <p><strong class="alert-success">Success!</strong></p>
                                                            <p>The payment is completed successfully (and the account is updated accordingly).</p>
                                                            <p>For an updated view: <a href="https://uptimerobot.com/dashboard?refresh=1#mySettings" class="btn btn-primary refreshMySettingsPage">Refresh the page</a></p>
                                                        </div>
                                                        <div id="stripeErrorNotification" class="hide alert alert-error no-margin">
                                                            <p><strong class="alert-error">Payment failed!</strong></p>
                                                            <p class="error-msg"></p>
                                                            <p>Try another card or <button type="button" id="switchToPayPal" class="btn btn-green">Use PayPal</button></p>
                                                        </div>
                                                        <div id="downgradeDaysNotification" class="widget alert alert-error no-margin hide">
                                                            <p><strong class="alert-error">Info</strong></p>
                                                            <p>The account currently has a bigger limit that can be used until <span class="proPlanExpiryDate"></span>.</p>
                                                            <p>It <b>can be downgraded by <span class="proPlanDowngradeDate"></span> (<span class="proPlanDowngradeDateXDaysLater"></span> days later)</b> in order to prevent any double-payments.</p>
                                                        </div>
                                                        <div id="downgradeLimitNotification" class="widget alert alert-error no-margin hide">
                                                            <p><strong class="alert-error">Info</strong></p>
                                                            <p>There are <span class="numberOfMonitorsInAccount"></span> monitors in the account while the new plan can only handle <span class="downgradeProPlanMonitorLimit"></span>.</p>
                                                            <p><b><span class="numberOfMonitorsToRemoveForDowngrade"></span> monitors must be removed</b> for completing the downgrade.</p>
                                                        </div>
                                                        <div id="pleskLicenceRemovalError" class="hide alert alert-error no-margin">
                                                            <p><strong class="alert-error">Something wrong, please try again later!</strong></p>
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
                                <button type="button" class="btn btn-primary showPaymentFormStep2 paymentFormStep1Buttons ">Next Step - Payment Details</button>
                                <button type="button" class="btn btn-primary hide showPaymentFormStep3 paymentFormStep2Buttons">Next Step - Billing</button>
                                <button type="submit" class="btn btn-primary hide showPaymentFormStep4 paymentFormStep3Buttons">Next Step - Payment</button>
                                <button type="submit" class="btn btn-primary hide paymentFormStep4Buttons">Complete the Payment</button>
                                <button type="button" class="btn btn-primary paymentFormStep4ProcessingButtons disabled">Please Wait..</button>
                            </div>
                        </form>
                    </div>
                    <div id="cancelProPlan" class="modal hide fade" tabindex="-1" data-width="35%">
                        <div class="modal-header"> </div>
                        <form id="cancelProPlanForm" class="form-horizontal" method="POST" action="inc/dml/paymentDML.php?action=cancelProPlan">
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
                                                                    <div id="cancelProPlanThxText" class="hide">Thanks very much for being an awesome customer. You staying as a Free Plan user is still great and we are always here to help if more is needed.</div>
                                                                    <ul id="cancelProPlanInfoWrapper" class="form-list label-left list-bordered dotted">
                                                                        <li class="section-form">
                                                                            <h4 class="test">Pro Plan Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <p>You are using the "<b>Free Plan (50 monitors, 5 minute intervals)</b>.</p>
                                                                            <p>Once canceled, the account will need to be renewed until 01.01.1970 or will be automatically downgraded to the Free Plan on 01.01.1970.</p>
                                                                            <p><strong>Important!</strong> if more than 50 monitors exist on this expiry date, they will be deleted automatically (with the order of &quot;latest added is deleted first&quot;).</p>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <div id="cpp-captcha_container"></div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <div class="alert alert-info no-margin">
                                                                                Please write <span class="bold">CANCEL AUTO-RENEW</span> to the field below to approve the action.
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="cancelProPlanApproveText" class="control-label">Approval Text <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <input id="cancelProPlanApproveText" class="span6" type="text" value="" name="cancelProPlanApproveText">
                                                                                <input id="cancelProPlanApproveTextHidden" class="span6" type="hidden" value="CANCEL AUTO-RENEW" name="cancelProPlanApproveTextHidden">
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="cancelProPlanSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Pro Plan auto-renewal is cancelled!</strong>
                                            </div>
                                            <div id="cancelProPlanErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                                <span class="alert-error">Please make sure that the captcha is verified.</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn" id="cancelProPlanFormCancelButton">Close</button>
                                <button type="submit" class="btn btn-primary" id="cancelProPlanFormSubmitButton">Cancel Pro Plan</button>
                            </div>
                        </form>
                    </div>
                    <div id="newMWindow" class="modal hide fade" tabindex="-1" data-width="40%">
                        <div class="modal-header"> </div>
                        <form id="newMWindowForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=newMWindow">
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
                                                                            <h4 class="test">Maintenance Window Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newMWindowType" class="control-label">Maint. Window Type <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <select id="newMWindowType" class="selecttwo span8" name="newMWindowType" style="float:none;">
<option selected="selected" value="0">Please Select</option>
<option value="1">Once</option>
<option value="2">Daily</option>
<option value="3">Weekly</option>
<option value="4">Monthly</option>
</select>
                                                                            </div>
                                                                        </li>

                                                                        <div class="hide" id="newOnceMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>only once</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="newOnceMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newOnceMWindowFriendlyName" class="span6" type="text" value="" name="newOnceMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newOnceMWindowStartDateTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newOnceMWindowStartDateTime" class="span6" type="text" value="" name="newOnceMWindowStartDateTime">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newOnceMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newOnceMWindowDuration" class="span2" type="text" value="" name="newOnceMWindowDuration"> mins.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="newDailyMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every day</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="newDailyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newDailyMWindowFriendlyName" class="span6" type="text" value="" name="newDailyMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newDailyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newDailyMWindowStartHour" class="span2" type="text" value="" name="newDailyMWindowStartHour" placeholder="18"> : <input id="newDailyMWindowStartMinute" class="span2"
                                                                                        type="text" value="" name="newDailyMWindowStartMinute" placeholder="30">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newDailyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newDailyMWindowDuration" class="span6" type="text" value="" name="newDailyMWindowDuration"> mins.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="newWeeklyMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every week</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="newWeeklyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newWeeklyMWindowFriendlyName" class="span6" type="text" value="" name="newWeeklyMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newWeeklyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
                                                                                <div class="controls alignCheckboxes">
                                                                                    <div class="errorsAfterThis">
                                                                                        <input type="checkbox" value="1" name="newWeeklyMWindowDays[]"> Mon <input type="checkbox" value="2" name="newWeeklyMWindowDays[]"> Tue <input type="checkbox" value="3"
                                                                                            name="newWeeklyMWindowDays[]"> Wed <input type="checkbox" value="4" name="newWeeklyMWindowDays[]"> Thu <input type="checkbox" value="5" name="newWeeklyMWindowDays[]">                                                                                        Fri <input type="checkbox" value="6" name="newWeeklyMWindowDays[]"> Sat <input type="checkbox" value="7" name="newWeeklyMWindowDays[]"> Sun
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newWeeklyMWindowStartHour" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <div class="errorsAfterThis">
                                                                                        <input id="newWeeklyMWindowStartHour" class="span2" type="text" value="" name="newWeeklyMWindowStartHour" placeholder="18"> : <input id="newWeeklyMWindowStartMinute"
                                                                                            class="span2" type="text" value="" name="newWeeklyMWindowStartMinute" placeholder="30">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newWeeklyMWindowDuration" class="control-label">Maintenance End Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newWeeklyMWindowDuration" class="span6" type="text" value="" name="newWeeklyMWindowDuration"> mins.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="newMonthlyMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every month</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="newMonthlyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newMonthlyMWindowFriendlyName" class="span6" type="text" value="" name="newMonthlyMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newMonthlyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
                                                                                <div class="controls alignCheckboxes span6">
                                                                                    <div class="errorsAfterThis">
                                                                                        <table width="100%" style="max-width:200px; margin-left:3px;">
                                                                                            <tr>
                                                                                                <td width="25%"><input type="checkbox" value="1" name="newMonthlyMWindowDays[]"> 1</td>
                                                                                                <td width="25%"><input type="checkbox" value="2" name="newMonthlyMWindowDays[]"> 2</td>
                                                                                                <td width="25%"><input type="checkbox" value="3" name="newMonthlyMWindowDays[]"> 3</td>
                                                                                                <td width="25%"><input type="checkbox" value="4" name="newMonthlyMWindowDays[]"> 4</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="5" name="newMonthlyMWindowDays[]"> 5</td>
                                                                                                <td><input type="checkbox" value="6" name="newMonthlyMWindowDays[]"> 6</td>
                                                                                                <td><input type="checkbox" value="7" name="newMonthlyMWindowDays[]"> 7</td>
                                                                                                <td><input type="checkbox" value="8" name="newMonthlyMWindowDays[]"> 8</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="9" name="newMonthlyMWindowDays[]"> 9</td>
                                                                                                <td><input type="checkbox" value="10" name="newMonthlyMWindowDays[]"> 10</td>
                                                                                                <td><input type="checkbox" value="11" name="newMonthlyMWindowDays[]"> 11</td>
                                                                                                <td><input type="checkbox" value="12" name="newMonthlyMWindowDays[]"> 12</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="13" name="newMonthlyMWindowDays[]"> 13</td>
                                                                                                <td><input type="checkbox" value="14" name="newMonthlyMWindowDays[]"> 14</td>
                                                                                                <td><input type="checkbox" value="15" name="newMonthlyMWindowDays[]"> 15</td>
                                                                                                <td><input type="checkbox" value="16" name="newMonthlyMWindowDays[]"> 16</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="17" name="newMonthlyMWindowDays[]"> 17</td>
                                                                                                <td><input type="checkbox" value="18" name="newMonthlyMWindowDays[]"> 18</td>
                                                                                                <td><input type="checkbox" value="19" name="newMonthlyMWindowDays[]"> 19</td>
                                                                                                <td><input type="checkbox" value="20" name="newMonthlyMWindowDays[]"> 20</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="21" name="newMonthlyMWindowDays[]"> 21</td>
                                                                                                <td><input type="checkbox" value="22" name="newMonthlyMWindowDays[]"> 22</td>
                                                                                                <td><input type="checkbox" value="23" name="newMonthlyMWindowDays[]"> 23</td>
                                                                                                <td><input type="checkbox" value="24" name="newMonthlyMWindowDays[]"> 24</td>
                                                                                                <tr>
                                                                                                    <td><input type="checkbox" value="25" name="newMonthlyMWindowDays[]"> 25</td>
                                                                                                    <td><input type="checkbox" value="26" name="newMonthlyMWindowDays[]"> 26</td>
                                                                                                    <td><input type="checkbox" value="27" name="newMonthlyMWindowDays[]"> 27</td>
                                                                                                    <td><input type="checkbox" value="28" name="newMonthlyMWindowDays[]"> 28</td>
                                                                                                </tr>
                                                                                                <td><input type="checkbox" value="29" name="newMonthlyMWindowDays[]"> 29</td>
                                                                                                <td><input type="checkbox" value="30" name="newMonthlyMWindowDays[]"> 30</td>
                                                                                                <td><input type="checkbox" value="31" name="newMonthlyMWindowDays[]"> 31</td>
                                                                                                <td></td>
                                                                                                <tr>
                                                                                                    <td colspan="4"><input type="checkbox" value="99" name="newMonthlyMWindowDays[]"> Last day of month</td>
                                                                                                </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newMonthlyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <div class="errorsAfterThis">
                                                                                        <input id="newMonthlyMWindowStartHour" class="span2" type="text" value="" name="newMonthlyMWindowStartHour" placeholder="18"> : <input id="newMonthlyMWindowStartMinute"
                                                                                            class="span2" type="text" value="" name="newMonthlyMWindowStartMinute" placeholder="30">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newMonthlyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newMonthlyMWindowDuration" class="span6" type="text" value="" name="newMonthlyMWindowDuration"> mins.
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

                                            <div id="newMWindowSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Maintenance window created!</strong> You can keep adding new maintenance windows.
                                            </div>
                                            <div id="newMWindowErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
                                            <div id="newMWindowExistsErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"><strong class="alert-error">Ooops!</strong> This maintenance window already exists under your account.</div>
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
                        <form id="editMWindowForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editMWindow">
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
                                                                            <h4 class="test">Maintenance Window Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="editMWindowType" class="control-label">Maint. Window Type <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="editMWindowTypeTitle"></span>
                                                                                <input id="editMWindowType" class="span6" type="hidden" value="" name="editMWindowType">
                                                                            </div>
                                                                        </li>

                                                                        <div class="hide" id="editOnceMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>only once</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="editOnceMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editOnceMWindowFriendlyName" class="span6" type="text" value="" name="editOnceMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editOnceMWindowStartDateTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editOnceMWindowStartDateTime" class="span6" type="text" value="" name="editOnceMWindowStartDateTime">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editOnceMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editOnceMWindowDuration" class="span6" type="text" value="" name="editOnceMWindowDuration"> mins.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editDailyMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every day</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="editDailyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editDailyMWindowFriendlyName" class="span6" type="text" value="" name="editDailyMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editDailyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editDailyMWindowStartHour" class="span2" type="text" value="" name="editDailyMWindowStartHour" placeholder="18"> : <input id="editDailyMWindowStartMinute" class="span2"
                                                                                        type="text" value="" name="editDailyMWindowStartMinute" placeholder="30">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editDailyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editDailyMWindowDuration" class="span6" type="text" value="" name="editDailyMWindowDuration"> mins.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editWeeklyMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every week</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="editWeeklyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editWeeklyMWindowFriendlyName" class="span6" type="text" value="" name="editWeeklyMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWeeklyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
                                                                                <div class="controls alignCheckboxes">
                                                                                    <div class="errorsAfterThis">
                                                                                        <input type="checkbox" value="1" name="editWeeklyMWindowDays[]"> Mon <input type="checkbox" value="2" name="editWeeklyMWindowDays[]"> Tue <input type="checkbox" value="3"
                                                                                            name="editWeeklyMWindowDays[]"> Wed <input type="checkbox" value="4" name="editWeeklyMWindowDays[]"> Thu <input type="checkbox" value="5" name="editWeeklyMWindowDays[]">                                                                                        Fri <input type="checkbox" value="6" name="editWeeklyMWindowDays[]"> Sat <input type="checkbox" value="7" name="editWeeklyMWindowDays[]"> Sun
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWeeklyMWindowStartHour" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <div class="errorsAfterThis">
                                                                                        <input id="editWeeklyMWindowStartHour" class="span2" type="text" value="" name="editWeeklyMWindowStartHour" placeholder="18"> : <input id="editWeeklyMWindowStartMinute"
                                                                                            class="span2" type="text" value="" name="editWeeklyMWindowStartMinute" placeholder="30">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editWeeklyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editWeeklyMWindowDuration" class="span6" type="text" value="" name="editWeeklyMWindowDuration"> mins.
                                                                                </div>
                                                                            </li>

                                                                        </div>
                                                                        <div class="hide" id="editMonthlyMWindow">
                                                                            <div class="alert alert-info no-margin">
                                                                                <strong class="alert-info">Info: </strong> The maintenance windows will be active <strong>every month</strong> for the mentioned period (in the account's timezone).
                                                                            </div>
                                                                            <li class="control-group">
                                                                                <label for="editMonthlyMWindowFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editMonthlyMWindowFriendlyName" class="span6" type="text" value="" name="editMonthlyMWindowFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMonthlyMWindowDays" class="control-label">Maintenance Days <span class="required">*</span></label>
                                                                                <div class="controls alignCheckboxes span6">
                                                                                    <div class="errorsAfterThis">
                                                                                        <table width="100%" style="max-width:200px; margin-left:3px;">
                                                                                            <tr>
                                                                                                <td width="25%"><input type="checkbox" value="1" name="editMonthlyMWindowDays[]"> 1</td>
                                                                                                <td width="25%"><input type="checkbox" value="2" name="editMonthlyMWindowDays[]"> 2</td>
                                                                                                <td width="25%"><input type="checkbox" value="3" name="editMonthlyMWindowDays[]"> 3</td>
                                                                                                <td width="25%"><input type="checkbox" value="4" name="editMonthlyMWindowDays[]"> 4</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="5" name="editMonthlyMWindowDays[]"> 5</td>
                                                                                                <td><input type="checkbox" value="6" name="editMonthlyMWindowDays[]"> 6</td>
                                                                                                <td><input type="checkbox" value="7" name="editMonthlyMWindowDays[]"> 7</td>
                                                                                                <td><input type="checkbox" value="8" name="editMonthlyMWindowDays[]"> 8</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="9" name="editMonthlyMWindowDays[]"> 9</td>
                                                                                                <td><input type="checkbox" value="10" name="editMonthlyMWindowDays[]"> 10</td>
                                                                                                <td><input type="checkbox" value="11" name="editMonthlyMWindowDays[]"> 11</td>
                                                                                                <td><input type="checkbox" value="12" name="editMonthlyMWindowDays[]"> 12</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="13" name="editMonthlyMWindowDays[]"> 13</td>
                                                                                                <td><input type="checkbox" value="14" name="editMonthlyMWindowDays[]"> 14</td>
                                                                                                <td><input type="checkbox" value="15" name="editMonthlyMWindowDays[]"> 15</td>
                                                                                                <td><input type="checkbox" value="16" name="editMonthlyMWindowDays[]"> 16</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="17" name="editMonthlyMWindowDays[]"> 17</td>
                                                                                                <td><input type="checkbox" value="18" name="editMonthlyMWindowDays[]"> 18</td>
                                                                                                <td><input type="checkbox" value="19" name="editMonthlyMWindowDays[]"> 19</td>
                                                                                                <td><input type="checkbox" value="20" name="editMonthlyMWindowDays[]"> 20</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td><input type="checkbox" value="21" name="editMonthlyMWindowDays[]"> 21</td>
                                                                                                <td><input type="checkbox" value="22" name="editMonthlyMWindowDays[]"> 22</td>
                                                                                                <td><input type="checkbox" value="23" name="editMonthlyMWindowDays[]"> 23</td>
                                                                                                <td><input type="checkbox" value="24" name="editMonthlyMWindowDays[]"> 24</td>
                                                                                                <tr>
                                                                                                    <td><input type="checkbox" value="25" name="editMonthlyMWindowDays[]"> 25</td>
                                                                                                    <td><input type="checkbox" value="26" name="editMonthlyMWindowDays[]"> 26</td>
                                                                                                    <td><input type="checkbox" value="27" name="editMonthlyMWindowDays[]"> 27</td>
                                                                                                    <td><input type="checkbox" value="28" name="editMonthlyMWindowDays[]"> 28</td>
                                                                                                </tr>
                                                                                                <td><input type="checkbox" value="29" name="editMonthlyMWindowDays[]"> 29</td>
                                                                                                <td><input type="checkbox" value="30" name="editMonthlyMWindowDays[]"> 30</td>
                                                                                                <td><input type="checkbox" value="31" name="editMonthlyMWindowDays[]"> 31</td>
                                                                                                <td></td>
                                                                                                <tr>
                                                                                                    <td colspan="4"><input type="checkbox" value="99" name="editMonthlyMWindowDays[]"> Last day of month</td>
                                                                                                </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMonthlyMWindowStartTime" class="control-label">Maintenance Start Time <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <div class="errorsAfterThis">
                                                                                        <input id="editMonthlyMWindowStartHour" class="span2" type="text" value="" name="editMonthlyMWindowStartHour" placeholder="18"> : <input id="editMonthlyMWindowStartMinute"
                                                                                            class="span2" type="text" value="" name="editMonthlyMWindowStartMinute" placeholder="30">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="editMonthlyMWindowDuration" class="control-label">Maintenance Duration <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="editMonthlyMWindowDuration" class="span6" type="text" value="" name="editMonthlyMWindowDuration"> mins.
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

                                            <div id="editMWindowSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Maintenance window saved!</strong> You can keep editing the maintenance window.
                                            </div>
                                            <div id="editMWindowErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
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
                        <form id="deleteMWindowForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deleteMWindow">
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
                                                                            <h4 class="test">Maintenance Window Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deleteMWindowType" class="control-label">Maintenance Window Type</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deleteMWindowTypeTitle"></span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deleteMWindowValue" class="control-label">Maintenance Window</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deleteMWindowFriendlyNameTitle"></span>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="deleteMWindowSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Maintenance window deleted!</strong>.
                                            </div>
                                            <div id="deleteMWindowInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-warning">Warning!</strong> You are about to delete this maintenance window and it will be removed from any monitors it is attached to (monitors will not be deleted).
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn" id="deleteMWindowFormCancelButton">Close</button>
                                <button type="submit" class="btn btn-primary" id="deleteMWindowFormSubmitButton">Delete Maintenance Window</button>
                            </div>
                        </form>
                    </div>
                    <div id="newPsp" class="modal hide fade" tabindex="-1" data-width="40%">
                        <div class="modal-header"> </div>
                        <form enctype="multipart/form-data" id="newPspForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=newPsp" autocomplete="off">
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
                                                                            <h4 class="test">Public Status Page Information</h4>
                                                                            </span>

                                                                            <li class="control-group">
                                                                                <label for="newPspFriendlyName" class="control-label">Friendly Name <span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <input id="newPspFriendlyName" class="span6" type="text" value="" name="newPspFriendlyName">
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newPspLogo" class="control-label">Logo</label>
                                                                                <div class="controls">
                                                                                    <input id="newPspLogo" type="file" name="newPspLogo" accept=".jpg,.png">
                                                                                </div>
                                                                                <span class="help-block">Can be .jpg, .jpeg or .png and no bigger than 400x200px and 150kb.<br />
You can change this later in "Appereance" section of Status page dashboard.
</span>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <label for="newPspCustomDomain" class="control-label">Custom Domain</label>
                                                                                <div class="controls">
                                                                                    <input id="newPspCustomDomain" class="span6" type="text" value="" placeholder="status.site.com" name="newPspCustomDomain" disabled>
                                                                                </div>
                                                                                <div style="margin-top: 10px;">
                                                                                    <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                                                    <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_psp-custom_domain">Upgrade</a>
                                                                                </div>
                                                                                <span class="help-block">Host status page on your own domain! Make sure you <strong>create a CNAME DNS record</strong> for your domain to <code>stats.uptimerobot.com</code>. It can take up to 24 hours for the custom domain to be activated.
</span>
                                                                                <li class="control-group">
                                                                                    <label for="newPspPassword" class="control-label">Password</label>
                                                                                    <div class="controls">
                                                                                        <input id="newPspPassword" class="span6" type="password" value="" name="newPspPassword" autocomplete="new-password">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label for="newPspHideURLogo" class="control-label">Hide UptimeRobot Logo</label>
                                                                                    <div class="controls">
                                                                                        <span class="label label-warning">PRO</span> Available only in the PRO plan.
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal" data-cta-source="new_psp-hide_ur_logo">Upgrade</a>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label for="newPspSEONoIndex" class="control-label">Robots meta tag</label>
                                                                                    <div class="controls">
                                                                                        <select id="newPspSEONoIndex" name="newPspSEONoIndex">
<option value="1">noindex</option>
<option value="0" selected>index</option>
</select>
                                                                                    </div>
                                                                                    <span class="help-block">Meta robots "index" means your website will be visible in search engines. Setting value to "noindex" will hide your Status page in search engines.</span>
                                                                                </li>

                                                                    </ul>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="newPspSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Public status page created!</strong> It can be reached from: <a id="newPspCustomURL" class="hide" href="">here</a> <span class="hide" id="newPspCustomURLInfo">(once a CNAME record for the hostname to stats.uptimerobot.com is created)</span>
                                                <a id="newPspURLBig" href="">here</a>.</p>
                                                <p id="newPspURLSmallWrapper" class="hide"> <small>(or always from <a id="newPspURLSmall" href="">here</a>)</small> .
                                            </div>
                                            <div id="newPspErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide"></div>
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
                        <form id="deletePspForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deletePsp">
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
                                                                            <h4 class="test">Public Status Page Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deletePspFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deletePspFriendlyName"></span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deletePspMonitors" class="control-label">Monitors</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deletePspMonitors"></span>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="deletePspInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20">
                                                <strong class="alert-warning">Warning!</strong> You are about to delete this public status page.
                                            </div>
                                            <div class="alert alert-warning no-margin-right no-margin-left margin-top20">
                                                <strong class="alert-warning">Warning!</strong> If there are any Status page subscribers they will be removed (this can't be undone).
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn" id="deletePspFormCancelButton">Close</button>
                                <button type="submit" class="btn btn-primary" id="deletePspFormSubmitButton">Delete Public Status Page</button>
                            </div>
                        </form>
                    </div>
                    <div id="deletePspAnnouncement" class="modal hide fade" tabindex="-1" data-width="35%">
                        <div class="modal-header"> </div>
                        <form id="deletePspAnnouncementForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deletePspAnnouncement">
                            <div class="modal-body">
                                <input type="hidden" id="deletePspAnnouncementPspID" name="pspID" value="">
                                <input type="hidden" id="deletePspAnnouncementID" name="pspAnnouncementID" value="">
                                <div class="tab-pane active fade in">
                                    <div class="row-fluid">
                                        <div class="spa12 grider">
                                            <div class="widget widget-simple">
                                                <div class="widget-header">
                                                    <h4><i class="fontello-icon-edit"></i> Delete Public Status Page Announcement</h4>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="widget-body">
                                                        <div class="row-fluid">
                                                            <div class="span12 form-dark">
                                                                <fieldset>
                                                                    <ul class="form-list label-left list-bordered dotted">
                                                                        <li class="section-form">
                                                                            <h4 class="test">Public Status Page Announcement Information</h4>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="deletePspAnnouncementFriendlyName" class="control-label">Announcement Title</label>
                                                                            <div class="controls">
                                                                                <span class="bold" id="deletePspAnnouncementFriendlyName"></span>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </fieldset>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="deletePspAnnouncementSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Public status announcement page deleted!</strong>.
                                            </div>
                                            <div id="deletePspAnnouncementInfoNotification" class="alert alert-warning no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-warning">Warning!</strong> You are about to delete this public status page announcement.
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn" id="deletePspAnnouncementFormCancelButton">Close</button>
                                <button type="submit" class="btn btn-primary" id="deletePspAnnouncementFormSubmitButton">Delete Announcement</button>
                            </div>
                        </form>
                    </div>
                    <div id="editProPlanBilling" class="modal hide fade" tabindex="-1" data-width="40%">
                        <div class="modal-header"> </div>
                        <form id="editProPlanBillingForm" method="POST" action="inc/dml/paymentDML.php?action=editProPlanBilling">
                            <div class="modal-body">
                                <div class="tab-pane active fade in">
                                    <div class="row-fluid">
                                        <div class="span12 grider">
                                            <div class="widget widget-simple">
                                                <div class="widget-header">
                                                    <h4><i class="fontello-icon-edit"></i> Edit "Pro Plan" Billing Details</h4>
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
                                                                                    <label for="editProPlanBillingName" class="control-label">Full name or company name <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingName" id="editProPlanBillingName" class="span10" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                            <div class="span6 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingAddress" class="control-label">Billing Address <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingAddress" id="editProPlanBillingAddress" class="span12" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row-fluid">
                                                                            <div class="span3 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingZipCode" class="control-label">Billing Zip <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingZipCode" id="editProPlanBillingZipCode" class="span12" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                            <div class="span3 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingState" class="control-label">Billing State</label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingState" id="editProPlanBillingState" class="span9" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                            <div class="span3 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingCity" class="control-label">Billing City <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingCity" id="editProPlanBillingCity" class="span12" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                            <div class="span3 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingPhoneNumber" class="control-label">Billing Phone # <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingPhoneNumber" id="editProPlanBillingPhoneNumber" class="span12" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row-fluid">
                                                                            <div class="span6 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingCountry" class="control-label">Billing Country <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <select id="editProPlanBillingCountry" class="span10 darkSelect" name="editProPlanBillingCountry">
<option value="">Please Select</option>
<option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATG">Antigua & Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia & Herzegovina</option><option value="BWA">Botswana</option><option value="BRA">Brazil</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="TCD">Chad</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COG">Congo</option><option value="COD">Congo, D.R.</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="CIV">Cote dIvoire</option><option value="HRV">Croatia</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option><option value="PYF">French Polynesia</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernsey</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="PRK">Korea South</option><option value="XKX">Kosovo</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Laos</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macau</option><option value="MKD">Macedonia</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="MDA">Moldova</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="ANT">Netherlands Antilles</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PSE">Palestinian Territory</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Reunion</option><option value="ROU">Romania</option><option value="RUS">Russia</option><option value="RWA">Rwanda</option><option value="KNA">Saint Kitts and Nevis</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome & Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="ZAF">South Africa</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="VCT">St Vincent and the Grenadines</option><option value="SUR">Suriname</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="TWN">Taiwan</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania</option><option value="THA">Thailand</option><option value="TGO">Togo</option><option value="TON">Tonga</option><option value="TTO">Trinidad & Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TCA">Turks & Caicos Islands</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="USA" selected="selected">United States</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="VGB">Virgin Islands, British</option><option value="VIR">Virgin Islands, U.S.</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option> </select>
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                            <div class="span6 form-dark">
                                                                                <li class="control-group">
                                                                                    <label for="editProPlanBillingVAT" class="control-label">Billing VAT</label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="editProPlanBillingVAT" id="editProPlanBillingVAT" class="span12" value="" />
                                                                                    </div>
                                                                                </li>
                                                                            </div>
                                                                        </div>
                                                                        <div id="editProPlanBillingVATInfoWrapper" class="row-fluid hide">
                                                                            <div class="span12 form-dark">
                                                                                <div id="editProPlanBillingVATInfo" class="alert alert-info no-margin">
                                                                                    <p><b>VAT Information: </b>An additional <span class="editProPlanBillingVATInfoRatio"></span>% EU VAT will be added to the purchase <span class="editProPlanBillingNonMaltaVATInfo">if no valid VAT Number is mentioned</span>
                                                                                        <span class="editProPlanBillingMaltaVATInfo hide">(even if a valid VAT is mentioned as UptimeRobot is based in Malta)</span>.</p>
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

                                            <div id="editProPlanBillingSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-success">Pro Plan billing details are saved!</strong>
                                            </div>
                                            <div id="editProPlanBillingVatDifferenceNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                                <strong class="alert-error">The action couldn't be performed as this update causes a change in VAT rates (and the subscription amount). Please contact <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="75060005051a0701350005011c1810071a171a015b161a18">[email&#160;protected]</a> and we'd love to help.</strong>.
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn" id="editProPlanBillingFormCancelButton">Close</button>
                                <button type="submit" class="btn btn-primary" id="editProPlanBillingFormSubmitButton">Save "Pro Plan" Billing Details</button>
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
                                                    <form action="inc/dml/monitorDML.php?action=saveContentDeliveryNotification" class="form-horizontal" id="newCNDEmailSMTPForm" method="post" name="newCNDEmailSMTPForm">
                                                        <div class="row-fluid">
                                                            <div class="span12 form-dark">
                                                                <fieldset>
                                                                    <ul class="form-list label-left list-bordered dotted">
                                                                        <li class="section-form">
                                                                            <h4 class="test">Custom Notification Delivery Information</h4>
                                                                        </li>
                                                                        <li class="form-horizontal control-group">
                                                                            <label class="control-label" for="newCNDType">Delivery Type <span class="required">*</span></label>
                                                                            <div class="controls">
                                                                                <select class="selecttwo span8" id="newCNDType" name="newCNDType" style="float:none;">
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
                                                                                <label class="form-horizontal control-label" for="newCNDEmailSubType">E-mail provider
<span class="required">*</span></label>
                                                                                <div class="controls">
                                                                                    <select class="selecttwo span8" id="newCNDEmailSubType" name="newCNDEmailSubType" style="float:none;">
<option selected="selected" value="0">
Please Select
</option>
<option value="1">
SMTP
</option>
</select>
                                                                                </div>
                                                                            </li>
                                                                            <div class="hide" id="newCNDEmailSMTPSubType">
                                                                                <li class="section-form">
                                                                                    <h4 class="test">Server Information</h4>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label class="control-label" for="newCNDEmailTypeHost">Host <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input class="span6" id="newCNDEmailTypeHost" name="newCNDEmailTypeHost" type="text" placeholder="smtp.example.com" value="">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label class="control-label" for="newCNDEmailTypeUsername">Username <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input class="span6" id="newCNDEmailTypeUsername" name="newCNDEmailTypeUsername" type="text" placeholder="username@example.com" value="">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label class="control-label" for="newCNDEmailTypePassword">Password <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input class="span6" id="newCNDEmailTypePassword" name="newCNDEmailTypePassword" type="password" value="">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label class="control-label" for="newCNDEmailTypePort">Port <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <input class="span6" id="newCNDEmailTypePort" name="newCNDEmailTypePort" type="text" placeholder="465" value="">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <label class="control-label" for="newCNDEmailTypeSecureConnection">TLS/SSL required</label>
                                                                                    <div class="controls">
                                                                                        <input id="newCNDEmailTypeSecureConnection" type="checkbox" value="1" name="newCNDEmailTypeSecureConnection">
                                                                                    </div>
                                                                                </li>
                                                                                <li class="control-group">
                                                                                    <div id="smtpVerifyMessageHolder"></div>
                                                                                    <button type="button" class="btn btn-blue pull-right addVerifySMTPConnection">Verify</button>
                                                                                </li>
                                                                                <div id="cndDetailsForm" class="hide">
                                                                                    <li class="section-form">
                                                                                        <h4 class="test">Custom Notification Delivery Details</h4>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDFriendlyName">Friendly Name <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDFriendlyName" name="newEmailCNDFriendlyName" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDSenderAddress">Sender Address <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDSenderAddress" name="newEmailCNDSenderAddress" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDSenderName">Sender Name <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDSenderName" name="newEmailCNDSenderName" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group"><label class="control-label" for="newEmailCNDActive">Enabled:</label>
                                                                                        <div class="controls">
                                                                                            <input id="newEmailCNDActive" type="checkbox" value="1" name="newEmailCNDActive">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="section-form">
                                                                                        <h4 class="test">Up Notification</h4>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeUpSubject">Up Notification Subject
<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDTypeUpSubject" name="newEmailCNDTypeUpSubject" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeUpMessage">Up Notification Message<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <textarea class="span6" id="newEmailCNDTypeUpMessage" name="newEmailCNDTypeUpMessage" rows="3" type="text"></textarea>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="section-form">
                                                                                        <h4 class="test">Down Notification</h4>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeDownSubject">Down Notification
Subject <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDTypeDownSubject" name="newEmailCNDTypeDownSubject" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeDownMessage">Down Notification <br>Message
<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <textarea class="span6" id="newEmailCNDTypeDownMessage" name="newEmailCNDTypeDownMessage" rows="3" type="text"></textarea>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="section-form">
                                                                                        <h4 class="test">SSL Notification</h4>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeSSLSubject">SSL Notification Subject
<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDTypeSSLSubject" name="newEmailCNDTypeSSLSubject" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeSSLMessage">SSL Notification Message
<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <textarea class="span6" id="newEmailCNDTypeSSLMessage" name="newEmailCNDTypeSSLMessage" rows="3" type="text"></textarea>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="section-form">
                                                                                        <h4 class="test">SSL Expired Notification</h4>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeSSLExpiredSubject">SSL Expired
Notification Subject <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input class="span6" id="newEmailCNDTypeSSLExpiredSubject" name="newEmailCNDTypeSSLExpiredSubject" type="text" value="">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <label class="control-label" for="newEmailCNDTypeSSLExpiredMessage">SSL Expired
Notification Message<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <textarea class="span6" id="newEmailCNDTypeSSLExpiredMessage" name="newEmailCNDTypeSSLExpiredMessage" rows="3" type="text"></textarea>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="form-horizontal control-group">
                                                                                        <div class="alert alert-info no-margin">
                                                                                            <strong class="alert-info">Important!</strong> This is a information message
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
                                    <button id="cndSubmitButton" type="submit" class="btn btn-primary hide" type="submit">Create</button>
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
                                                            <form action="inc/dml/monitorDML.php?action=editContentDeliveryNotification" class="form-horizontal" id="editCNDEmailSMTPForm" method="post" name="editCNDEmailSMTPForm">
                                                                <div class="row-fluid">
                                                                    <div class="span12 form-dark">
                                                                        <fieldset>
                                                                            <ul class="form-list label-left list-bordered dotted">
                                                                                <li class="section-form">
                                                                                    <h4 class="test">Custom Notification Delivery Information</h4>
                                                                                </li>
                                                                                <li class="form-horizontal control-group">
                                                                                    <label class="control-label" for="editCNDType">Delivery Type <span class="required">*</span></label>
                                                                                    <div class="controls">
                                                                                        <select class="selecttwo span8" id="editCNDType" name="editCNDType" style="float:none;">
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
                                                                                        <label class="form-horizontal control-label" for="editCNDEmailSubType">E-mail provider
<span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <select class="selecttwo span8" id="editCNDEmailSubType" name="editCNDEmailSubType" style="float:none;">
<option selected="selected" value="0">
Please Select
</option>
<option value="1">
SMTP
</option>
</select>
                                                                                        </div>
                                                                                    </li>
                                                                                    <div class="" id="editCNDEmailSMTPSubType">
                                                                                        <li class="section-form">
                                                                                            <h4 class="test">Server Information</h4>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label class="control-label" for="editCNDEmailTypeHost">Host <span class="required">*</span></label>
                                                                                            <div class="controls">
                                                                                                <input class="span6" id="editCNDEmailTypeHost" name="editCNDEmailTypeHost" type="text" placeholder="smtp.example.com" value="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label class="control-label" for="editCNDEmailTypeUsername">Username <span class="required">*</span></label>
                                                                                            <div class="controls">
                                                                                                <input class="span6" id="editCNDEmailTypeUsername" name="editCNDEmailTypeUsername" type="text" placeholder="username@example.com" value="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label class="control-label" for="editCNDEmailTypePassword">Password <span class="required">*</span></label>
                                                                                            <div class="controls">
                                                                                                <input class="span6" id="editCNDEmailTypePassword" name="editCNDEmailTypePassword" type="password" value="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label class="control-label" for="editCNDEmailTypePort">Port <span class="required">*</span></label>
                                                                                            <div class="controls">
                                                                                                <input class="span6" id="editCNDEmailTypePort" name="editCNDEmailTypePort" type="text" placeholder="465" value="">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <label class="control-label" for="editCNDEmailTypeSecureConnection">TLS/SSL required</label>
                                                                                            <div class="controls">
                                                                                                <input id="editCNDEmailTypeSecureConnection" type="checkbox" value="1" name="editCNDEmailTypeSecureConnection">
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="control-group">
                                                                                            <div id="editSmtpVerifyMessageHolder"></div>
                                                                                            <button type="button" class="btn btn-blue pull-right">Verify</button>
                                                                                        </li>
                                                                                        <div>
                                                                                            <li class="section-form">
                                                                                                <h4 class="test">Custom Notification Delivery Details</h4>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDFriendlyName">Friendly Name <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDFriendlyName" name="editEmailCNDFriendlyName" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDSenderAddress">Sender Address <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDSenderAddress" name="editEmailCNDSenderAddress" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDSenderName">Sender Name <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDSenderName" name="editEmailCNDSenderName" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group"><label class="control-label" for="editEmailCNDActive">Enabled:</label>
                                                                                                <div class="controls">
                                                                                                    <input id="editEmailCNDActive" type="checkbox" value="1" name="editEmailCNDActive">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="section-form">
                                                                                                <h4 class="test">Up Notification</h4>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeUpSubject">Up Notification Subject
<span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDTypeUpSubject" name="editEmailCNDTypeUpSubject" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeUpMessage">Up Notification Message<span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <textarea class="span6" id="editEmailCNDTypeUpMessage" name="editEmailCNDTypeUpMessage" rows="3" type="text"></textarea>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="section-form">
                                                                                                <h4 class="test">Down Notification</h4>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeDownSubject">Down Notification
Subject <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDTypeDownSubject" name="editEmailCNDTypeDownSubject" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeDownMessage">Down Notification <br>Message
<span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <textarea class="span6" id="editEmailCNDTypeDownMessage" name="editEmailCNDTypeDownMessage" rows="3" type="text"></textarea>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="section-form">
                                                                                                <h4 class="test">SSL Notification</h4>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeSSLSubject">SSL Notification Subject
<span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDTypeSSLSubject" name="editEmailCNDTypeSSLSubject" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeSSLMessage">SSL Notification Message
<span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <textarea class="span6" id="editEmailCNDTypeSSLMessage" name="editEmailCNDTypeSSLMessage" rows="3" type="text"></textarea>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="section-form">
                                                                                                <h4 class="test">SSL Expired Notification</h4>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeSSLExpiredSubject">SSL Expired
Notification Subject <span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <input class="span6" id="editEmailCNDTypeSSLExpiredSubject" name="editEmailCNDTypeSSLExpiredSubject" type="text" value="">
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <label class="control-label" for="editEmailCNDTypeSSLExpiredMessage">SSL Expired
Notification Message<span class="required">*</span></label>
                                                                                                <div class="controls">
                                                                                                    <textarea class="span6" id="editEmailCNDTypeSSLExpiredMessage" name="editEmailCNDTypeSSLExpiredMessage" rows="3" type="text"></textarea>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="form-horizontal control-group">
                                                                                                <div class="alert alert-info no-margin">
                                                                                                    <strong class="alert-info">Important!</strong> This is a information message
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



                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script type="text/javascript" src="assets/js/lib/jquery1.8.3.js"></script>
                        <script type="text/javascript" src="assets/js/lib/jquery.jfeed.pack.js"></script>
                        <script type="text/javascript" src="assets/js/lib/bootstrap/bootstrap.js"></script>

                        <script type="text/javascript" src="assets/js/lib/favico.js"></script>

                        <script type="text/javascript" src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
                        <script type="text/javascript" src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>

                        <script type="text/javascript" src="assets/plugins/pl-system/nicescroll/jquery.nicescroll-3_6_0.min.js"></script>

                        <script type="text/javascript" src="assets/plugins/pl-system-info/qtip2/dist/jquery.qtip.min.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-system-info/notyfy/jquery.notyfy.js"></script>

                        <script type="text/javascript" src="assets/plugins/pl-system/momentjs/moment.min.js"></script>
                        <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

                        <script type="text/javascript" src="assets/plugins/pl-content/jquery.bullseye/jquery.bullseye-1.0-min.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-content/truncate/jquery.truncate.min.js"></script>

                        <script type="text/javascript" src="assets/plugins/pl-form/select2-3.5.2/select2.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-form/validate/js/jquery.validate.min.js?v1.16"></script>
                        <script type="text/javascript" src="assets/plugins/pl-form/noUiSlider/nouislider.min.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-form/creditCardValidator/jquery.creditCardValidator.js?v1.1"></script>
                        <script type="text/javascript" src="assets/plugins/pl-form/form/jquery.form.js"></script>

                        <script type="text/javascript" src="assets/plugins/pl-visualization/knob/knob.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.stack.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.time.js"></script>
                        <script type="text/javascript" src="assets/plugins/pl-visualization/flot/jquery.flot.resize.min.js"></script>

                        <script type="text/javascript" src="assets/js/common.js?v1.235"></script>
                        <script type="text/javascript" src="assets/js/lib/spin.js"></script>
                        <script type="text/javascript" src="assets/js/lib/ladda.js"></script>
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                dataLayer.push({
                                    'hashedUserId': '90a97f71fe77b7fe23b1f677657a8994'
                                });
                            });
                        </script>
                        <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
                        <script src="https://js.stripe.com/v3/"></script>
                        <script type="text/javascript" src="{{ asset('userside/assets/js/stripe-payment.js?v1.0')}}"></script>

                        <script type="text/javascript" src="{{ asset('userside/assets/js/common-loggedIn.js?v1.975')}}"></script>
                        <script type="text/javascript" src="{{ asset('userside/assets/js/status-page.js?v1.978')}}"></script>
                        <script type="text/javascript" src="{{ asset('userside/assets/js/lib/spectrum.min.js?v1.974')}}"></script>
                        <script type="text/javascript" src="{{ asset('userside/assets/js/lib/fontpicker.js?v3.5.0')}}"></script>


                        <script data-cfasync="false" type="text/javascript" src="{{ asset('userside/assets/js/widget.js') }}"></script>
</body>

</html>