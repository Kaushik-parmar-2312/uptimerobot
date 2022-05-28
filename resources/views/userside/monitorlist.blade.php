@foreach ($data as $row)
    <li class="accordion-group" id="mSidebar{{ $row->id }}">
        <div class="accordion-heading">
            @if ($row->pause == 0)
                <span class="label sidebarMonitorPercentage" style="background-color: #4da74d">0%</span>
            @else
                <span class="label sidebarMonitorPercentage" style="background-color: #000000">0%</span>
            @endif

            <span class="label">{{ $row->monitor_type }}</span> <a href="#{{ $row->id }}"
                class="monitorTitle" title="{{ $row->url_ip }}"
                data-monitortitle="{{ $row->friendly_name }}">{{ $row->friendly_name }}</a>
            <a id="sidebarMonitorLink-{{ $row->id }}" href="{{ $row->url_ip }}" target="_blank">
                <i class="item-icon fontello-icon-link-1" style="color:#999999; font-size: 0.7em;"></i>
            </a>
            <div class="pull-right">
                <div class="uptimeSidebarWrapper pull-left">
                    <div class="uptimeHiddenRatio" style="display:none;">100.000</div>
                    <ul class="uptimeChart">
                        <li data-tooltip="
                                                            Start Time: {{ $row->created_at }}<br>
                                                            End Time: {{ \Carbon\Carbon::now() }}  <br>
                                                            Duration: {{ \Carbon\Carbon::now()->diffInHours($row->created_at) }} hrs, mins<br>
                                                            Status: Up" style="width: 100%; background:#4da74d;"><img
                                src="{{ asset('userside/assets/img/1px.webp') }}" alt="1px">
                        </li>
                    </ul>
                </div>
                <div class="pull-right"><a href="#mMenuAccordion{{ $row->id }}" data-parent="#mainSideMenu"
                        data-toggle="collapse" class="accordion-toggle monitorAccordionBtn"><i
                            class="chevron fontello-icon-cog-3"></i></a></div>
            </div>
        </div>
        <ul class="accordion-content nav nav-list collapse" id="mMenuAccordion{{ $row->id }}">
            @if ($row->pause == 0)
                <li class="startStopMonitor"> <a href="#"> <i class="fontello-icon-right-dir"></i><span
                            class="monitorStartStopText{{ $row->id }}" name="monitorStartStop" data-id="1">
                            Pause</span>
                    </a>
                </li>
            @else
                <li class="startStopMonitor"> <a href="#"> <i class="fontello-icon-right-dir"></i><span
                            class="monitorStartStopText{{ $row->id }}" name="monitorStartStop" data-id="1">
                            Start</span>
                    </a>
                </li>
            @endif
            <li> <a href="#editMonitor" data-toggle="modal" data-monitorid="{{ $row->id }}"
                    class="editMonitor"> <i class="fontello-icon-right-dir"></i> Edit </a> </li>
            <li> <a href="#deleteMonitor" data-toggle="modal" data-monitorid="{{ $row->id }}"
                    class="deleteMonitor"> <i class="fontello-icon-right-dir"></i> Delete </a>
            </li>
            <li> <a href="#resetMonitor" data-toggle="modal" data-monitorid="{{ $row->id }}"
                    class="resetMonitor"> <i class="fontello-icon-right-dir"></i> Reset Stats
                </a> </li>
        </ul>
    </li>
@endforeach
