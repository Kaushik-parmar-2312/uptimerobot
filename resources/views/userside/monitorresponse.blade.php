{{-- <script type="text/javascript">
	$(document).ready(function() {

		var timezoneDiff = +330;

		/* Response Time Chart - START */
		dashboard_A_chart = {
			// Dashboard 1 Chart Visit
			chartVisit: function() {
				var elem = $('#dashChartResponseTimes');
				//Get initial response time info
				var d1 =
					[[1654705800000, 535],[1654707600000, 527],[1654709400000, 518],[1654711200000, 533],[1654713000000, 523],[1654714800000, 537],[1654716600000, 529],[1654718400000, 527],[1654720200000, 556],[1654722000000, 546],[1654723800000, 523],[1654725600000, 566],[1654727400000, 576],[1654729200000, 527],[1654731000000, 603],[1654732800000, 587],[1654734600000, 592],[1654736400000, 530],[1654738200000, 571],[1654740000000, 539],[1654741800000, 727],[1654743600000, 530],[1654745400000, 554],[1654747200000, 1072],[1654749000000, 577],[1654750800000, 571],[1654752600000, 593],[1654754400000, 769],[1654756200000, 602],[1654758000000, 628],[1654759800000, 1178],[1654761600000, 569],[1654763400000, 533],[1654765200000, 532],[1654767000000, 538],[1654768800000, 545],[1654770600000, 539],[1654772400000, 562],[1654774200000, 541],[1654776000000, 558],[1654777800000, 534],[1654779600000, 535],[1654781400000, 522],[1654783200000, 532],[1654785000000, 530],[1654786800000, 534],[1654788600000, 695],[1654790400000, 526]];

				var averageResponseTime = 0;
				if (d1.length > 0) {
					totalResTime = 0;
					for (i = 0; i < d1.length; i++) {
						if (d1[i][1] > 0) {
							totalResTime += d1[i][1];
						}
					}
					var averageResponseTime = totalResTime / d1.length;
				}

				averageResponseTime = averageResponseTime.toFixed(2);
				$('#monitorChartsWrapper h3').find('.averageResponseTime').html(" (" + averageResponseTime + "ms av.)");
				$('#monitorChartsWrapper .pagedesc').find('.averageResponseTimeDesc').html(averageResponseTime);

				// first correct the timestamps - they are recorded as the daily
				// midnights in UTC+0100, but Flot always displays dates in UTC
				// so we have to add one hour to hit the midnights in the plot

				var options = {
					colors: ["#edc240", "#5EB95E"],
					legend: {
						show: true,
						noColumns: 2, // number of colums in legend table
						labelFormatter: null, // fn: string -> string
						labelBoxBorderColor: false,
						container: null, // container (as jQuery object) to put legend in, null means default on top of graph
						margin: 8,
						backgroundColor: false,
						container: $("#legendContainer")
					},
					series: {
						lines: {
							show: true,
							lineWidth: 4,
							fill: true
						},
						points: {
							show: true,
							fillColor: "rgba(0,0,0,0.35)",
							radius: 3.5,
							lineWidth: 1.5
						},
						grow: {
							active: false
						}
					},
					xaxis: {
						mode: "time",
						font: {
							weight: "bold"
						},
						color: "#D6D8DB",
						tickColor: "rgba(237,194,64,0.25)",
						min: moment().subtract(1, 'days').add(timezoneDiff, 'minutes').format('x'),
						max: moment((d1.length > 0) ? d1.slice(-1)[0][0] : null).format('x'),
						tickLength: 5
					},
					selection: {
						mode: "x"
					},
					grid: {
						color: "#D6D8DB",
						tickColor: "rgba(255,255,255,0.05)",
						borderWidth: 0,
						clickable: true,
						hoverable: true
					}
				};

				var plot = $.plot(elem, [{
					data: d1,
					label: "Milliseconds"
				}], options);

				// Create a tooltip on our chart
				elem.qtip({
					prerender: true,
					content: 'Loading...', // Use a loading message primarily
					position: {
						viewport: $(window), // Keep it visible within the window if possible
						target: 'mouse', // Position it in relation to the mouse
						adjust: {
							x: 7
						} // ...but adjust it a bit so it doesn't overlap it.
					},
					show: false, // We'll show it programatically, so no show event is needed
					style: {
						classes: 'ui-tooltip-shadow ui-tooltip-tipsy',
						tip: false // Remove the default tip.
					}
				});

				// Bind the plot hover
				elem.bind("plothover", function(event, coords, item) {
					// Grab the API reference
					var self = $(this),
						api = $(this).qtip(),
						previousPoint, content,
						// Setup a visually pleasing rounding function
						round = function(x) {
							return Math.round(x * 1000) / 1000;
						};

					// If we weren't passed the item object, hide the tooltip and remove cached point data
					if (!item) {
						api.cache.point = false;
						return api.hide(event);
					}

					// Proceed only if the data point has changed
					previousPoint = api.cache.point;
					if (previousPoint !== item.dataIndex) {
						// Update the cached point data
						api.cache.point = item.dataIndex;

						// Setup new content
						content = round(item.datapoint[1]) + ' milliseconds';
						//content = round(item.datapoint[1]) + ' miliseconds ' + moment(item.datapoint[0]).format("MMMM Do YYYY, HH:mm:ss");

						// Update the tooltip content
						api.set('content.text', content);

						// Make sure we don't get problems with animations
						api.elements.tooltip.stop(1, 1);

						// Show the tooltip, passing the coordinates
						api.show(coords);
					}
				});
				nowInSeconds = 1654771255;
				nowInMiliSeconds = nowInSeconds * 1000;
				timezoneDiffInMiliSeconds = 19800000;
				timezonedNowInSeconds = nowInSeconds + 19800;
				timezonedNowInMiliSeconds = timezonedNowInSeconds * 1000;
				oneDayInSeconds = 24 * 60 * 60;
				oneDayInMiliSeconds = 24 * 60 * 60 * 1000;
				lastMonthStart = 1651383001000;
				thisMonthStart = 1654061401000;
				lastMonthEnd = 1654061399000;

				$('#monitorDashboardRange').daterangepicker({
						ranges: {
							'Last 24 Hours': [timezonedNowInMiliSeconds - oneDayInMiliSeconds, timezonedNowInMiliSeconds],
							'Last 7 Days': [timezonedNowInMiliSeconds - (oneDayInMiliSeconds * 7), timezonedNowInMiliSeconds],
							'Last 30 Days': [timezonedNowInMiliSeconds - (oneDayInMiliSeconds * 30), timezonedNowInMiliSeconds],
							'This Month': [thisMonthStart, timezonedNowInMiliSeconds],
							'Last Month': [lastMonthStart, lastMonthEnd]
						},
						timePicker: false,
						startDate: timezonedNowInMiliSeconds - oneDayInMiliSeconds,
						endDate: timezonedNowInMiliSeconds
					},
					function(start, end) {
						var chosenLabel = this.chosenLabel;
						if (chosenLabel.indexOf('Custom') >= 0) {
							$('.monitorDashboardRangeValue').html(start.format('MMM Do YY') + ' - ' + end.format('MMM Do YY'));
						} else {
							$('.monitorDashboardRangeValue').html(chosenLabel);
						}

						$('#monitorChartsWrapper').css({
							opacity: 0.2
						});
						//Detect Exact timing
						exactValue = 1;
						if (chosenLabel == 'Last 7 Days' || chosenLabel == 'Last 30 Days') {
							exactValue = 0;
						}

            if (chosenLabel == 'Last 24 Hours') {
              start = moment(1654684855000);
              end = moment(1654771255000);
            }

						$.ajax({
							type: "GET",
							url: "inc/dml/monitorDML.php?action=getResponseTimeInfo",
							data: {
								monitorID: 791938817,
								responseTimeStartDate: (exactValue) ? start.unix() : start.startOf().unix(),
								responseTimeEndDate: (exactValue) ? end.unix() : end.startOf().unix(),
							},
							success: function(theResponse) {
								d1NewResponseTimeSet = $.parseJSON(theResponse);

								if (d1NewResponseTimeSet.length > 0) {
									totalResTime = 0;
									for (i = 0; i < d1NewResponseTimeSet.length; i++) {
										if (d1NewResponseTimeSet[i][1] > 0) {
											totalResTime = totalResTime + d1NewResponseTimeSet[i][1];
										}
									}
									var averageResponseTime = totalResTime / d1NewResponseTimeSet.length;
								} else {
									var averageResponseTime = 0;
								}

								averageResponseTime = averageResponseTime.toFixed(2);
								$('#monitorChartsWrapper h3').find('.averageResponseTime').html(" (" + averageResponseTime + "ms av.)");
								$('#monitorChartsWrapper .pagedesc').find('.averageResponseTimeDesc').html(averageResponseTime);

								$('#monitorChartsWrapper').css({
									opacity: 1
								});

								var startLine = (Array.isArray(d1NewResponseTimeSet)) ? d1NewResponseTimeSet[0][0] : start;
								if (chosenLabel == 'Last 24 Hours') {
									plot.getOptions().xaxes[0].min = moment().subtract(1, 'days').add(timezoneDiff, 'minutes').format('x');
								} else {
									plot.getOptions().xaxes[0].min = moment(startLine).add(timezoneDiff, 'minutes').format('x');
								}

								var endLine = (d1NewResponseTimeSet.slice(-1)[0] != undefined) ? d1NewResponseTimeSet.slice(-1)[0][0] : end;
								plot.getOptions().xaxes[0].max = moment(endLine).format('x');

								if (moment(end).diff(moment(start), 'days') >= 3) {
									plot.getOptions().xaxes[0].timeformat = "%d %b";
									if (moment(end).diff(moment(start), 'days') <= 6) {
										plot.getOptions().xaxes[0].ticks = moment(end).diff(moment(start), 'days');
									} else {
										plot.getOptions().xaxes[0].ticks = 6;
									}
								} else {
									plot.getOptions().xaxes[0].timeformat = null;
								}

								plot.setData([{
									data: $.parseJSON(theResponse),
									label: "Milliseconds"
								}]);
								plot.setupGrid();
								plot.draw();
							}
						});
						var dayDiff = end.format('x') - start.format('x');
						dayDiff++
						rangeInDays = Math.floor(dayDiff / 86400000);
						if (chosenLabel.indexOf('Custom') != 0 && rangeInDays == 2) {
							rangeInDays = 1;
						}
						rangeInHours = rangeInDays * 24;
						rangeInSeconds = rangeInHours * 60 * 60;

						$.ajax({
							type: "GET",
							url: "inc/dml/monitorDML.php?action=getUptimeLine&monitorID=791938817&uptimeLineStartDate=" + rangeInHours + "&uptimeLineEndDate=" + end.format('YYYY-MM-DD'),
							success: function(theResponse) {
								$('#dashboardUptimeLine').html(theResponse);
								bindQtipUptimeChart();
								$('.uptimeRatioDateRange').html('(Calculating..)');

								uptimeRatio = $('#dashboardUptimeLine .uptimeHiddenRatio').html();
								$('.uptimeRatioDateRange').html('(' + uptimeRatio + '%)');
							}
						});

					}
				);

			}
		};

		dashboard_A_chart.chartVisit();
		//alert(moment().add(timezoneDiff, 'minutes').format('x'));

  getIncidents(791938817, undefined, undefined, undefined, undefined, false);

	});
	/*Response Time Chart - END*/


	/*Uptime Chart - START*/
	function bindQtipUptimeChart() {
		$('.uptimeChart li').qtip({
			content: {
				attr: 'data-tooltip'
			},
			position: {
				my: 'bottom right', // Position my top left...
				at: 'top right', // at the bottom right of...
			},
			style: {
				classes: 'ui-tooltip-shadow ui-tooltip-tipsy'
			}
		})
	}

	function phpLikeRound(number, precision) {
		var factor = Math.pow(10, precision);
		var tempNumber = number * factor;
		var roundedTempNumber = Math.round(tempNumber);
		return roundedTempNumber / factor;
	};
	bindQtipUptimeChart();
	/*Uptime Chart - END*/
</script> --}}
<section>
    <div class="margin-top20">
        <div class="well well-black">
            <div class="row-fluid">
                <div id="monitorChartsWrapper" class="span8 grider">
                    <input type="hidden" id="dashboardMonitorID" value="791148496">
                    <h3><i class="fontello-icon-chart-bar-3"></i> Uptime
                        <small>last 24 hours</small>
                        {{-- {{dd($data)}} --}}

                    </h3>
                    <div id="dashboardUptimeLine">
                        <div class="uptimeHiddenRatio" style="display:none;">50.000</div>
                        <ul class="uptimeChart">
                            @if ($data['status'] == 0)
                                <li data-tooltip="Start Time:   {{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d h:m:s') }}<br>End Time: 2022-04-25 15:44:06<br>Duration: 182 hrs, 11 mins<br>Status: Up"
                                    style="width: 100%; background:#ba3737;"><img
                                        src="{{ asset('userside/assets/img/1px.webp') }}" alt="1px"></li>
                            @else
                                <li data-tooltip="Start Time:   {{ \Carbon\Carbon::parse($data['created_at'])->format('Y-m-d h:m:s') }}<br>End Time: 2022-04-25 15:44:06<br>Duration: 182 hrs, 11 mins<br>Status: Up"
                                    style="width: 100%; background:#4da74d;"><img
                                        src="{{ asset('userside/assets/img/1px.webp') }}" alt="1px"></li>
                            @endif
                        </ul>
                    </div>
                    <hr class="margin-mx-extended">
                    <div class="">

                        <div id="exportLogNotification" class="no-margin"></div>
                        <h3 class="margin-top25"><i class="fontello-icon-chart-line"></i> Response Time
                            <small>last 24 hours</small>
                            <small class="averageResponseTime"> ({{ $data['response_time'] }}ms av.)</small>
                        </h3>
                        <p class="pagedesc">Shows the "instant" that the monitor started returning a response in
                            ms (and average for the displayed period is <span
                                class="averageResponseTimeDesc">{{ $data['response_time'] }}</span>ms).</p>
                        <p id="legendContainer">
                        <table style="font-size:smaller;color:#D6D8DB">
                            <tbody>
                                <tr>
                                    <td class="legendColorBox">
                                        <div style="border:1px solid false;padding:1px">
                                            <div
                                                style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="legendLabel">Milliseconds</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                        <hr class="margin-mx">
                        <div id="dashChartResponseTimes"
                            style="width: 100%; height: 170px; padding: 0px; position: relative;"
                            class="margin-bottom32" aria-describedby="ui-tooltip-110"> <canvas class="flot-base"
                                width="782" height="212"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 626px; height: 170px;"></canvas>
                            <div class="flot-text"
                                style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                    style="position: absolute; inset: 0px; display: block;">
                                    <div
                                        style="position: absolute; max-width: 71px; top: 156px; font: bold 11px / 13px roboto, Arial, sans-serif; color: rgb(214, 216, 219); left: 561px; text-align: center;">
                                        16:00</div>
                                    <div
                                        style="position: absolute; max-width: 71px; top: 156px; font: bold 11px / 13px roboto, Arial, sans-serif; color: rgb(214, 216, 219); left: 74px; text-align: center;">
                                        20:00</div>
                                    <div
                                        style="position: absolute; max-width: 71px; top: 156px; font: bold 11px / 13px roboto, Arial, sans-serif; color: rgb(214, 216, 219); left: 171px; text-align: center;">
                                        00:00</div>
                                    <div
                                        style="position: absolute; max-width: 71px; top: 156px; font: bold 11px / 13px roboto, Arial, sans-serif; color: rgb(214, 216, 219); left: 269px; text-align: center;">
                                        04:00</div>
                                    <div
                                        style="position: absolute; max-width: 71px; top: 156px; font: bold 11px / 13px roboto, Arial, sans-serif; color: rgb(214, 216, 219); left: 366px; text-align: center;">
                                        08:00</div>
                                    <div
                                        style="position: absolute; max-width: 71px; top: 156px; font: bold 11px / 13px roboto, Arial, sans-serif; color: rgb(214, 216, 219); left: 464px; text-align: center;">
                                        12:00</div>
                                </div>
                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                    style="position: absolute; inset: 0px; display: block;">
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 136px; left: 13px; text-align: right;">0</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 102px; left: 0px; text-align: right;">100</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 68px; left: 0px; text-align: right;">200</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 34px; left: 0px; text-align: right;">300</div>
                                    <div class="flot-tick-label tickLabel"
                                        style="position: absolute; top: 0px; left: 0px; text-align: right;">400</div>
                                </div>
                            </div><canvas class="flot-overlay" width="782" height="212"
                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 626px; height: 170px;"></canvas>
                        </div>


                    </div>

                </div>


                <div id="monitorDashboardSideInfo" class="span4 grider">
                    <div class="row-fluid">
                        <div class="span12 grider-item">
                            @if ($data['status'] == 0)
                                <div id="monitorCurrentStatus" class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-title">
                                                <h5 class="positive"><i class="item-icon fontello-icon-cd"></i>
                                                    Current Status</h5>
                                            </div>
                                            <div id="monitorCurrentStatusContent" class="section-content">
                                                <h2 class="statistic-values">
                                                    <span class="item-icon fontello-icon-cd" style="color:#ba3737;;">
                                                        Down
                                                    </span>
                                                </h2><span class="info-block">Since
                                                    {{ $data['latestDownTime'][0]['totaltime'] }} (
                                                    {{ $data['latestDownTime'][0]['created_at'] }})</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div id="monitorCurrentStatus" class="row-fluid">
                                    <div class="span12 grider-item">
                                        <div class="statistic-box well well-black well-impressed">
                                            <div class="section-title">
                                                <h5 class="positive"><i class="item-icon fontello-icon-cd"></i>
                                                    Current Status</h5>
                                            </div>
                                            <div id="monitorCurrentStatusContent" class="section-content">
                                                <h2 class="statistic-values">
                                                    <span class="item-icon fontello-icon-cd" style="color:#4da74d;">
                                                        Up
                                                    </span>
                                                </h2><span class="info-block">Since
                                                    {{ $data['current_status'][0]['totaltime'] }}
                                                    ({{ 
                                                \Carbon\Carbon::parse($data['current_status'][0]['created_at'])->format('Y-m-d h:m:s')
                                                }})</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div id="monitorRatios" class="row-fluid">
                                <div class="span12 grider-item">
                                    <div class="statistic-box well well-black">
                                        <div class="section-title">
                                            <h5><i class="fontello-icon-chart-bar-3"></i> Uptime</h5>
                                        </div>
                                        <div class="section-content item">
                                            <h4 class="statistic-values pull-left padding-right10 positive"> <span
                                                    class="section-icon"><i
                                                        class="fontello-icon-certificate"></i></span>{{ $data['userLogsHours'] }}%
                                            </h4>
                                            <span> (last 24 hours)</span>
                                        </div>
                                        <div class="section-content">
                                            <h4 class="statistic-values pull-left padding-right10 positive"> <span
                                                    class="section-icon"><i
                                                        class="fontello-icon-certificate"></i></span>
                                                {{ $data['userLogs7Days'] }} %</h4>
                                            <span> (last 7 days)</span>
                                        </div>
                                        <div class="section-content">
                                            <h4 class="statistic-values pull-left padding-right10 positive"> <span
                                                    class="section-icon"><i
                                                        class="fontello-icon-certificate"></i></span>
                                                {{ $data['userLogs30Days'] }} %</h4>
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
<section class="padding-left15 padding-right15">
    <div class="row-fluid">
        <div class="span12">
            <ul class="nav nav-tabs" id="monitor-events-tabs">
                <li role="presentation" class="active"><a href="#incidents">Incidents</a></li>
                <li role="presentation"><a href="#monitor-events">All events</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="incidents">
                    <table class="table incidents-table">
                        <caption>
                            <h4>Incidents</h4>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" width="13%">Status</th>
                                <th scope="col">Cause</th>
                                <th scope="col">Started at</th>
                                <th scope="col" width="15%">Duration</th>
                                <th scope="col" width="5%">Comments</th>
                                <th scope="col" width="5%"></th>
                            </tr>
                        </thead>
                        <tbody id='incident-placeholders'>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                                <td>
                                    <div class='incident-placeholder'></div>
                                </td>
                            </tr>
                            <td colspan="6">
                                <div class="btn-group paging_two_button">
                                    <a class="btn btn-mini previous disabled" tabindex="0" role="button">
                                        <i class="arrowicon-l-black"></i>
                                    </a>
                                    <a class="btn btn-mini next disabled" tabindex="0" role="button">
                                        <i class="arrowicon-r-black"></i>
                                    </a>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        <tbody class='incident-results'></tbody>
                        <tbody class='incident-pagination'></tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane latestEventsWrapper" id="monitor-events">
                    <table class="table table-condensed">
                        <caption>
                            <h4>Latest Events <span>(up, down, start, pause)</span></h4>
                            <a class="pull-right"
                                href="https://uptimerobot.com/inc/dml/monitorDML.php?action=getLatestEventsCSV&monitorID=791148496"
                                title="Export Logs"> Export Logs</a>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col" width="20%">Event</th>
                                <th scope="col">Date-Time</th>

                                <th scope="col">Reason</th>
                                <th scope="col" width="20%">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (empty($data['record']))
                                <td colspan="4">No events recorded.</td>
                            @else
                                @foreach ($data['record'] as $row)
                                    <tr>

                                        @if ($row['status'] == 'Start')
                                            <td>
                                                <span class="label label-play"><i class="fontello-icon-play-3"></i>
                                                    Started
                                                </span>
                                            </td>
                                        @endif
                                        @if ($row['status'] == 'Pause')
                                            <td>
                                                <span class="label label-pause"><i class="fontello-icon-pause-1"></i>
                                                    Paused
                                                </span>
                                            </td>
                                        @endif

                                        @if ($row['status'] == 'Up')
                                            <td>
                                                <span class="label label-positive"><i class="fontello-icon-up-tdin"></i>
                                                    Up
                                                </span>
                                            </td>
                                        @endif
                                        @if ($row['status'] == 'Down')
                                            <td>
                                                <span class="label label-negative"><i
                                                        class="fontello-icon-down-tdin"></i>
                                                    Down
                                                </span>
                                            </td>
                                        @endif



                                        <td>{{ \Carbon\Carbon::parse($row['created_at'])->format('Y-m-d h:m:s') }}
                                        </td>



                                        @if ($row['status'] == 'Start')
                                            <td class="play bold">Started</td>
                                        @endif
                                        @if ($row['status'] == 'Pause')
                                            <td class="pause bold">Paused</td>
                                        @endif

                                        @if ($row['status'] == 'Up')
                                            <td class="positive bold">OK (200)</td>
                                        @endif
                                        @if ($row['status'] == 'Down')
                                            <td class="negative bold">Connection Timeout (429)</td>
                                        @endif


                                        <td width="20%">
                                            @if ($row['status'] == 'Start')
                                                {{ $row['totaltime'] }}
                                            @endif
                                            @if ($row['status'] == 'Pause')
                                                {{ $row['totaltime'] }}
                                            @endif

                                            @if ($row['status'] == 'Up')
                                                {{ $row['totaltime'] }}
                                            @endif
                                            @if ($row['status'] == 'Down')
                                                {{ $row['totaltime'] }}
                                            @endif

                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                  
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#monitor-events-tabs a').click(function(e) {
                    e.preventDefault()
                    console.log($(this))
                    $(this).tab('show')
                });
            })
        </script>
    </div>

</section>
