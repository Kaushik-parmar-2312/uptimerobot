<html>

<head></head>

<body>
    <div class="widget widget-simple widget-notes widgetToGetEmail"
        data-alertcontactaccountemail="junagadhqueen143@gmail.com">
        <div class="widget-header">
            <h4><i class="fontello-icon-users-1"></i> Select "Alert Contacts To Notify"</h4>
        </div>
        <div id="maxAlertContactError"></div>
        <div class="widget-body">
            <h5>Selected: <span class="alertContactSelectedCount">0</span> of <span class="alertContactCount">2</span>
                <span class="showHideAlertContactsInSettingsWrap"> (<a href="#no"
                        class="showHideAlertContactsInNewEdit">hide</a>)</span>.</h5><button class="searchAlertContactBtn"
                type="button"><i class="fontello-icon-search-5" style="margin-right:0;"></i></button>
                <input type="text" value="" placeholder="Search" class="span3 alertContactSearchKeyword">
            <div class="alertContactsTableShowHideNewEdit">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Type</th>
                            <th>Alert Contact<span class="f10 pull-right">
                              
                                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Contact_detalis as $cont)
                        
                        @if($cont['status'] == 1)
                        <tr>
                            <td><input type="checkbox" name="monitorAlertContactsNew[]" value="{{ $cont['id'] }}"
                               

                                    class="monitorAlertContactsNew monitorAlertContactsNew{{ $cont['id'] }} monitorAlertContactVariableNew"
                                    data-alertcontactid="{{ $cont['id'] }}"></td>
                            <td><i class="fontello-icon-mail"></i></td>
                            <td><span title="{{ $cont['email'] }}">{{ $cont['Friendly_Name'] }} <span
                                        class="shortenLongAlertContacts"></span></span><a
                                    class="fontello-icon-cog-3 pull-right monitorAlertSettingsIcon noUnderline"
                                    data-alertcontactid="{{ $cont['id'] }}" href="#no">
                                </a></td>
                        </tr>
                        
                        @else
                        <tr class="alertContactDisabled">
                            <td><input type="checkbox" name="monitorAlertContactsNew[]" value="{{ $cont['id'] }}"
                                    class="monitorAlertContactsNew monitorAlertContactsNew{{ $cont['id'] }} monitorAlertContactVariableNew"
                                    data-alertcontactid="{{ $cont['id'] }}"></td>
                            <td><i class="fontello-icon-mail" title="E-mail"></i></td>
                            <td><span title="{{ $cont['email'] }}"></span>{{ $cont['Friendly_Name'] }}<a href="#no"
                                    class="fontello-icon-cog-3 pull-right monitorAlertSettingsIcon noUnderline"
                                    data-alertcontactid="{{ $cont['id'] }}"></a></td>
                        </tr>
                        @endif
                        
                        @endforeach
         
                        {{-- <tr class="alertContactDisabled">
                            <td><input type="checkbox" name="monitorAlertContactsNew[]" value="3460434"
                                    class="monitorAlertContactsNew monitorAlertContactsNew3460434 monitorAlertContactVariableNew"
                                    data-alertcontactid="3460434"></td>
                            <td><i class="fontello-icon-mail" title="E-mail"></i></td>
                            <td><span title="krishna@123gmail.com"></span>krushna<a href="#no"
                                    class="fontello-icon-cog-3 pull-right monitorAlertSettingsIcon noUnderline"
                                    data-alertcontactid="3460434"></a></td>
                        </tr> --}}
              
                        <tr>
                            <td colspan="3">New alert contacts can be defined from the "<a href="#mySettings"
                                    class="mySettings text-color underline">My Settings</a>" page.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><input type="hidden" value="4" class="alertContactsLimitNew">
</body>

</html>
