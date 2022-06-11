<input type="hidden" value={{ $data['count']->pause }} id='pause_count'>
<input type="hidden" value={{ $data['count']->up }} id='up_count'>
<input type="hidden" value={{ $data['count']->down }} id='down_count'>

<input type="hidden" value={{ $data['count']->Total_count }} id='total_count'>
{{-- <input type ="hidden" value ={{$data['count']->up}} id='up_count'>
<input type ="hidden" value ={{$data['count']->down}} id='down_count'> --}}
<script type="text/javascript">
    $(document).ready(function() {

        // set user notification settings
        var notificationSetting = '0';
        localStorage.setItem("TVModeNotification", notificationSetting)

        // get old previous count
        var monitorCount = localStorage.getItem("TVModeMonitorCount");

        if (
            monitorCount != null &&
            notificationSetting == 1 &&
            monitorCount < '0' &&
            $('#main-content,body').hasClass('tvMode') == true
        ) {
            $("audio#notification")[0].play()
        }

        $('.dashUpMonitors').val(0).trigger('change').delay(1000);
        $(".dashUpMonitors").knob({
            'min': 0,
            'max': $('#total_count').val(),
            'readOnly': true,
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true,
            'skin': 'tron'
        });
        var tmrUp = self.setInterval(function() {
            myDelayUp()
        }, 500 / $('#up_count').val());

        var mUp = $('#up_count').val();


        function myDelayUp() {
            $('.dashUpMonitors').val(mUp).trigger('change');
            if (mUp == $('#up_count').val()) {
                window.clearInterval(tmrUp);
            }
            mUp += 1;
        }



        $('.dashDownMonitors').val(0).trigger('change').delay(1000);
        $(".dashDownMonitors").knob({
            'min': 0,
            'max': $('#total_count').val(),
            'readOnly': true,
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true,
            'skin': 'tron'
        })
        var tmrDown = self.setInterval(function() {
            myDelayDown()
        }, 500 / $('#down_count').val());

        var mDown = $('#down_count').val();

        function myDelayDown() {
            $('.dashDownMonitors').val(mDown).trigger('change');
            if (mDown == $('#down_count').val()) {
                window.clearInterval(tmrDown);
            }
            mDown += 1;
        }



        $('.dashPausedMonitors').val(0).trigger('change').delay(1000);
        $(".dashPausedMonitors").knob({
            'min': 0,
            'max': $('#total_count').val(),
            'readOnly': true,
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true,
            'skin': 'tron'
        })
        var tmrPaused = self.setInterval(function() {
            myDelayPaused()
        }, 500 / $('#pause_count').val());

        var mPaused = $('#pause_count').val();

        function myDelayPaused() {
            $('.dashPausedMonitors').val(mPaused).trigger('change');
            if (mPaused == $('#pause_count').val()) {
                window.clearInterval(tmrPaused);
            }
            mPaused += 1;
        }
    });
</script>
<section>
    <div class="row-fluid margin-top20">
        <div class="span12 well well-black grider-item">
            <div class="row-fluid">
                <div class="span8 grider">
                    <h3><i class="fontello-icon-chart-pie"></i> Quick Stats</h3>
                    <hr class="margin-mx">
                    <h4>You are currently using
                        {{ $data['count']->Total_count }}
                        of your 50 monitors.</h4>
                    <div id="monitorsCountBars" class="row-fluid margin-top15 hide">
                        <div class="span12 grider-item">
                            <div class="statistic-box well well-black">
                                <div class="section-title">
                                    <h5> {{ $data['count']->Total_count }} of 50 monitors are used.</h5>
                                </div>
                                <div class="section-content item">
                                    <div class="progress progress-up filled5">
                                        <div class="filler">
                                            <span class="bar" style="width:0%"> </span><span
                                                style="position:absolute; padding-left: 5px;">{{ $data['count']->up }}
                                                monitors are up (<a href="javascript:void(0);"
                                                    class="sortMonitorType text-graydark" data-sortmonitortype="3">show
                                                    them</a>).</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-down filled5">
                                        <div class="filler">
                                            <span class="bar" style="width:0%"> </span><span
                                                style="position:absolute; padding-left: 5px;">{{ $data['count']->down }}
                                                monitors are down (<a href="javascript:void(0);"
                                                    class="sortMonitorType text-graydark" data-sortmonitortype="4">show
                                                    them</a>).</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-paused filled5">
                                        <div class="filler">
                                            <span class="bar" style="width:0%"> </span><span
                                                style="position:absolute; padding-left: 5px;">
                                                {{ $data['count']->pause }} monitors are paused (<a
                                                    href="javascript:void(0);" class="sortMonitorType text-graydark"
                                                    data-sortmonitortype="5">show them</a>).</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div id="monitorsCount" class="row-fluid margin-top15">
                        <div class="span4 spanChange">
                            <div class="statistic-box well well-black">
                                <div class="section-title">
                                    <h6 class="upper"><i class="item-icon fontello-icon-cd"
                                            style="color:#4da74d;"></i> Up Monitors</h6>
                                </div>
                                <div class="section-content">
                                    <div class="circle-content">
                                        <div class="circle circle-shadow padding5">
                                            <input data-readonly=false type="text" data-width="100" data-height="100"
                                                data-fgcolor="#4da74d" data-bgcolor="#43474a" data-thickness=".32"
                                                class="dashUpMonitors knob" rel="75" value="0">
                                        </div>
                                    </div>
                                    <span class="help-block text-center"><a href="javascript:void(0);"
                                            class="sortMonitorType text-graydark" data-sortmonitortype="3">show "up"
                                            monitors</a></span>
                                </div>

                            </div>
                        </div>
                        <div class="span4 spanChange">
                            <div class="statistic-box well well-black">
                                <div class="section-title">
                                    <h6 class="upper"><i class="item-icon fontello-icon-cd"
                                            style="color:#ba3737;"></i> Down Monitors</h6>
                                </div>
                                <div class="section-content">
                                    <div class="circle-content">
                                        <div class="circle circle-shadow padding5">
                                            <input data-readonly=false type="text" data-width="100" data-height="100"
                                                data-fgcolor="#ba3737" data-bgcolor="#43474a" data-thickness=".32"
                                                class="dashDownMonitors knob" rel="75" value="0">
                                        </div>
                                    </div>
                                    <span class="help-block text-center"><a href="javascript:void(0);"
                                            class="sortMonitorType text-graydark" data-sortmonitortype="4">show "down"
                                            monitors</a></span>
                                </div>

                            </div>
                        </div>
                        <div class="span4 spanChange">
                            <div class="statistic-box well well-black">
                                <div class="section-title">
                                    <h6 class="upper"><i class="item-icon fontello-icon-cd"
                                            style="color:#000000;"></i> Paused Monitors</h6>
                                </div>
                                <div class="section-content">
                                    <div class="circle-content">
                                        <div class="circle circle-shadow padding5">
                                            {{-- {{ $data['count']->pause }} --}}
                                            <input data-readonly=false type="text" data-width="100" data-height="100"
                                                data-fgcolor="#000000" data-bgcolor="#43474a" data-thickness=".32"
                                                class="dashPausedMonitors knob" rel="75"
                                                value="{{ $data['count']->pause }} ">
                                        </div>
                                    </div>
                                    <span class="help-block text-center"><a href="javascript:void(0);"
                                            class="sortMonitorType text-graydark" data-sortmonitortype="5">show "paused"
                                            monitors</a></span>
                                </div>

                            </div>
                        </div>
                        <div class="span3 hide spanDownListBlock">
                            <div class="statistic-box well well-black">
                                <div class="section-title">
                                    <h6 class="upper"><i class="item-icon fontello-icon-cd"
                                            style="color:#ba3737;"></i> Down Monitors List</h6>
                                </div>
                                <div class="section-content">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="span4 grider">
                    <div class="row-fluid">
                        <div class="span12 grider-item">
                            <div id="accountRatios" class="row-fluid">
                                <div class="span12 grider-item">
                                    <div class="statistic-box well well-black">
                                        <div class="section-title">
                                            <h5><i class="fontello-icon-chart-bar-3"></i> Overall Uptime</h5>
                                        </div>
                                        <div class="section-content item">
                                            <h4 class="statistic-values pull-left padding-right10 positive"> <span
                                                    class="section-icon"><i
                                                        class="fontello-icon-certificate"></i></span>
                                                {{ $data['userLogsHours'] }}%</h4>
                                            <span> (last 24 hours)</span>
                                        </div>
                                        <div class="section-content">
                                            <h4 class="statistic-values pull-left padding-right10 positive"> <span
                                                    class="section-icon"><i
                                                        class="fontello-icon-certificate"></i></span>
                                                {{ $data['userLogs7Days'] }}%</h4>
                                            <span> (last 7 days)</span>
                                        </div>
                                        <div class="section-content">
                                            <h4 class="statistic-values pull-left padding-right10 positive"> <span
                                                    class="section-icon"><i
                                                        class="fontello-icon-certificate"></i></span>
                                                {{ $data['userLogs30Days'] }}%</h4>
                                            <span> (last 30 days)</span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div id="accountLastDowntime" class="row-fluid">
                                <div class="span12 grider-item">
                                    <div class="statistic-box well well-black well-impressed">
                                        <div class="section-title">
                                            <h5 class="negative"><i
                                                    class="item-icon fontello-icon-cd negative"></i> <span
                                                    class="negative">Latest downtime</span></h5>
                                        </div>
                                        <div class="section-content" id="accountLastDowntimeContent">
                                            @isset($data['latestDownTime'][0]['created_at'])
                                                It was recorded (for the monitor
                                                {{ $data['latestDownTime'][0]['monitor']['friendly_name'] }} ) on
                                                {{ $data['latestDownTime'][0]['created_at'] }}
                                                and
                                                the downtime lasted for
                                                {{ $data['latestDownTime'][0]['totaltime'] }}.
                                            @else
                                                No downtime recorded.
                                            @endisset


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

</section>
<section>
    <div class="row-fluid">
        <div id="allLatestEvents" class="span12">
            <div class="latestEventsWrapper">
                <table class="table table-condensed">
                    <caption>
                        Latest Events For All Monitors <span>(up, down, start, pause)</span>
                        <a href="inc/dml/monitorDML.php?action=getLatestEventsAccountCSV"> Export Logs</a>
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col" width="13%">Event</th>
                            <th scope="col">Monitor</th>
                            <th scope="col">Date-Time</th>
                            {{-- <th scope="col" width="1%"></th> --}}
                            <th scope="col">Reason</th>
                            <th scope="col" width="20%">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @if (empty($data['record']))
                                <td colspan="4">No events recorded.</td>
                            @else
                                @foreach ($data['record'] as $row)
                                    <tr data-monitorid="{{ $row['monitor']['id'] }}">
                                        <td width="13%">
                                            {{-- {{ dd($row) }} --}}
                                            @if ($row['status'] == 'Up')
                                                <span class="label label-positive">
                                                    {{ $row['status'] }} </span>
                                            @endif
                                            @if ($row['status'] == 'Down')
                                                <span class="label label-negative"> {{ $row['status'] }}
                                                </span>
                                            @endif

                                            @if ($row['status'] == 'Start')
                                                <span class="label label-play">Started</span>
                                            @endif

                                            @if ($row['status'] == 'Pause')
                                                <span class="label label-pause">Paused</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="loadMonitor text-color underlineLink"
                                                title="{{ $row['monitor']['url_ip'] }}">
                                                {{ $row['monitor']['friendly_name'] }}</a>
                                        </td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($row['created_at'])->format('Y-m-d h:m:s') }}

                                        </td>

                                            @if ($row['status'] == 'Up')
                                                <td class="positive bold">OK (200)</td>
                                            @endif
                                            @if ($row['status'] == 'Down')
                                                <td class="negative bold">Connection Timeout</td>
                                            @endif
                                            @if ($row['status'] == 'Start')
                                                <td class="play bold">Started</td>
                                            @endif
                                            @if ($row['status'] == 'Pause')
                                                <td class="pause bold">Paused</td>
                                            @endif



                                            <td width="20%">
                                                @if ($row['status'] == 'Start')
                                                {{$row['totaltime'] }}
                                                @endif
                                                @if ($row['status'] == 'Pause')
                                                {{$row['totaltime'] }}
                                                @endif

                                                @if ($row['status'] == 'Up')
                                                    {{$row['totaltime'] }}
                                                @endif
                                                @if ($row['status'] == 'Down')
                                                       {{$row['totaltime'] }}
                                                @endif

                                            </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>



    </div>

</section>
