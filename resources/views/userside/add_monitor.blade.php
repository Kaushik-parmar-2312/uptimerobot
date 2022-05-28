<li class="accordion-group" id="mSidebar{{ $d->id }}">
    <div class="accordion-heading">
        <span class="label newMonitorColor sidebarMonitorPercentage">0%</span>
        <span class="label">
            @if ($d->monitor_type_id == 1)
                {{ 'http' }}
            @elseif($d->monitor_type_id == 2)
                {{ 'keyword' }}
            @elseif($d->monitor_type_id == 3)
                {{ 'ping' }}
            @elseif($d->monitor_type_id == 4)
                {{ 'port' }}
            @else
            @endif
        </span> <a class="monitorTitle" href="#{{ $d->id }}">{{ $d->friendly_name }}</a>
        <a href="{{ $d->url_ip }}" target="_blank"> <i
                class="item-icon fontello-icon-link-1 sidebarMonitorLink"></i></a>
        <div class="pull-right">
            <div class="uptimeSidebarWrapper pull-left">
                <ul class="uptimeChart">
                    <li class="newMonitorUptimeLine" data-tooltip="No logs (info) exist.">
                        <img alt="1px" src="exist">
                        <img alt="1px" src="asset('userside/assets/img/1px.gif') }}">
                    </li>
                </ul>
            </div>
            <div class="pull-right"> <a class="accordion-toggle monitorAccordionBtn" data-parent="#mainSideMenu"
                    data-toggle="collapse" href="#mMenuAccordion{{ $d->id }}">
                    <i class="chevron fontello-icon-cog-3"></i> </a>t
            </div>
        </div>
    </div>
    <ul class="accordion-content nav nav-list collapse" id="mMenuAccordion{{ $d->id }}">
        <li class="startStopMonitor">
            <a href="#">
                <i class="fontello-icon-right-dir"></i>
                <span class="monitorStartStopText{{ $d->id }}">Pause</span>
            </a>
        </li>
        <li>
            <a class="editMonitor" data-monitorid="{{ $d->id }}" data-toggle="modal" href="#editMonitor">
                <i class="fontello-icon-right-dir"></i> Edit
            </a>
        </li>
        <li>
            <a class="deleteMonitor" data-monitorid="{{ $d->id }}" data-toggle="modal" href="#deleteMonitor">
                <i class="fontello-icon-right-dir"></i>
                Delete
            </a>
        </li>

        <li>
            <a class="resetMonitor" data-monitorid="{{ $d->id }}" data-toggle="modal" href="#resetMonitor"><i
                    class="fontello-icon-right-dir"></i> Reset
                Stats</a>
        </li>
    </ul>

</li>
