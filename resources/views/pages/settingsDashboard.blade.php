<div id="TabTop1" class="tab-pane active fade in">
    <div class="row-fluid">
        <div class="span6 grider">
            <div class="widget widget-simple">
                <div class="widget-header">
                    <h4><i class="fontello-icon-user"></i> Account profile</h4>
                </div>
                <div class="widget-content">
                    <div class="widget-body">
                        <div class="row-fluid">
                            <div class="span12 form-dark">
                                <fieldset>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="section-form">
                                            <h4>Plan <a href="#upgradeAccount" class="upgradeProAccount"
                                                    data-toggle="modal"
                                                    data-cta-source="dashboard_settings-upgrade_to_pro"><small
                                                        class="btn btn-small btn-navi">
                                                        Upgrade to Pro</small></a></h4>
                                        </li>

                                        <li class="control-group">
                                            You are using the "<b>Free Plan (50 monitors, 1 minute intervals)</b>".
                                        </li>
                                        <li class="control-group">
                                            <small>There are <b>0 SMS (or voice-calls) left</b>. <a
                                                    href="#upgradeAccount" class="upgradeSMS" data-toggle="modal"
                                                    data-cta-source="dashboard_settings-add_more_sms">Want to add
                                                    more?</a></small>
                                        </li>

                                        <li class="control-group">
                                            <small>
                                                <b><a href=""
                                                        class="showPaymentsHistory showPaymentsHistoryText">Payments
                                                        history</a></b>
                                                <div id="paymentsHistory" class="hide"></div>
                                                <div>
                                                    <div id="userProPlanStatusInfoText" class="">The
                                                        auto-renew billing is cancelled. Please <b>click the "Change
                                                            Plan button" above</b> to renew the subscription.</div>
                                                </div>
                                            </small>
                                        </li>
                                    </ul>
                                </fieldset>
                                {{-- personal Detalis Form --}}
                                <form id="editPersonalInfoForm" class="form-horizontal" method="POST"
                                    action="{{ route('change_name') }}">
                                    @csrf
                                    <fieldset>
                                        <ul class="form-list label-left list-bordered dotted">
                                            <li class="section-form">
                                                <h4>Personal </h4>
                                            </li>

                                            <li class="control-group">
                                                <label for="userFirstLastName" class="control-label">First-Last Name
                                                    <span class="required">*</span></label>
                                                <div class="controls">
                                                    <div class="input-append block">
                                                        <input id="userFirstLastName" class="span6" type="text"
                                                            value="{{ auth()->user()->name }}"
                                                            name="userFirstLastName">
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="control-group">
                                                <label for="userTimezoneID" class="control-label">Timezone</label>
                                                <div class="controls">
                                                    <div class="input-append block">
                                                        <select id="userTimezoneID" class="selecttwoMySettings span6"
                                                            name="userTimezoneID">
                                                            <option value="39"> Yankee Timezone (GMT -12:00:00)</option>
                                                            <option value="2"> Midway Island, Samoa (GMT -11:00:00)
                                                            </option>
                                                            <option value="3"> Hawaii (GMT -10:00:00)</option>
                                                            <option value="4"> Alaska (GMT -09:00:00)</option>
                                                            <option value="5"> Pacific Time (US &amp; Canada) (GMT
                                                                -08:00:00)</option>
                                                            <option value="46"> Arizona (GMT -07:00:00)</option>
                                                            <option value="6"> Mountain Time (US &amp; Canada) (GMT
                                                                -07:00:00)</option>
                                                            <option value="49"> Bogota (GMT -05:00:00)</option>
                                                            <option value="7"> Central Time (US &amp; Canada), Mexico
                                                                City (GMT -06:00:00)</option>
                                                            <option value="8"> Eastern Time (US &amp; Canada) (GMT
                                                                -05:00:00)</option>
                                                            <option value="48"> Lima (GMT -05:00:00)</option>
                                                            <option value="34"> Caracas-Venezuela (GMT -04:00:00)
                                                            </option>
                                                            <option value="9"> Atlantic Time (Canada), La Paz (GMT
                                                                -04:00:00)</option>
                                                            <option value="10"> Newfoundland (GMT -03:30:00)</option>
                                                            <option value="11"> Buenos Aires, Georgetown (GMT -03:00:00)
                                                            </option>
                                                            <option value="12"> Mid-Atlantic (GMT -02:00:00)</option>
                                                            <option value="42"> Sao Paulo (GMT -03:00:00)</option>
                                                            <option value="13"> Azores, Cape Verde Islands (GMT
                                                                -01:00:00)</option>
                                                            <option selected="selected" value="37"> GMT/UTC (GMT
                                                                +00:00:00)</option>
                                                            <option value="35"> South African Standard Time (GMT
                                                                +02:00:00)</option>
                                                            <option value="14"> Western Europe Time, London, Lisbon,
                                                                Casablanca (GMT +00:00:00)</option>
                                                            <option value="15"> Brussels, Copenhagen, Madrid, Paris (GMT
                                                                +01:00:00)</option>
                                                            <option value="43"> Istanbul (GMT +03:00:00)</option>
                                                            <option value="16"> Kaliningrad, Athens, Helsinki (GMT
                                                                +02:00:00)</option>
                                                            <option value="36"> Moscow, St. Petersburg (GMT +03:00:00)
                                                            </option>
                                                            <option value="45"> Jerusalem (GMT +02:00:00)</option>
                                                            <option value="17"> Baghdad, Riyadh (GMT +03:00:00)</option>
                                                            <option value="40"> Samara (GMT +04:00:00)</option>
                                                            <option value="18"> Tehran (GMT +03:30:00)</option>
                                                            <option value="20"> Kabul (GMT +04:30:00)</option>
                                                            <option value="19"> Abu Dhabi, Muscat, Baku, Tbilisi (GMT
                                                                +04:00:00)</option>
                                                            <option value="21"> Ekaterinburg, Islamabad, Karachi,
                                                                Tashkent (GMT +05:00:00)</option>
                                                            <option value="22"> Bombay, Colombo, Calcutta, Madras, New
                                                                Delhi (GMT +05:30:00)</option>
                                                            <option value="23"> Kathmandu (GMT +05:45:00)</option>
                                                            <option value="24"> Almaty, Dhaka (GMT +06:00:00)</option>
                                                            <option value="47"> Yangon (Myanmar) (GMT +06:30:00)
                                                            </option>
                                                            <option value="25"> Bangkok, Hanoi, Jakarta (GMT +07:00:00)
                                                            </option>
                                                            <option value="26"> Beijing, Perth, Singapore, Hong Kong
                                                                (GMT +08:00:00)</option>
                                                            <option value="27"> Tokyo, Seoul, Osaka, Sapporo, Yakutsk
                                                                (GMT +09:00:00)</option>
                                                            <option value="28"> Adelaide, Darwin (GMT +10:30:00)
                                                            </option>
                                                            <option value="29"> Guam, Vladivostok (GMT +10:00:00)
                                                            </option>
                                                            <option value="44"> Australian Eastern Time Zone (Brisbane)
                                                                (GMT +10:00:00)</option>
                                                            <option value="38"> Sydney, Melbourne (GMT +11:00:00)
                                                            </option>
                                                            <option value="30"> Magadan, Solomon Islands, New Caledonia
                                                                (GMT +11:00:00)</option>
                                                            <option value="41"> Nouméa, Solomon Islands (GMT +11:00:00)
                                                            </option>
                                                            <option value="1"> Eniwetok, Kwajalein (GMT +12:00:00)
                                                            </option>
                                                            <option value="31"> Auckland, Wellington, Fiji, Kamchatka
                                                                (GMT +13:00:00)</option>
                                                            <option value="32"> Chatham Islands (GMT +13:45:00)</option>
                                                            <option value="33"> New Zealand Daylight Time, Tonga (GMT
                                                                +13:00:00)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- igmore --}}
                                            {{-- <li class="control-group">
                                                <input id="userNewsletter" class="checkbox" type="checkbox"
                                                    value="1" name="userNewsletter" checked="checked"> <span
                                                    class="f12">Inform me about new features and updates (no
                                                    more than twice a month).</span>
                                                <br />
                                                <input id="userDevNewsletter" class="checkbox" type="checkbox"
                                                    value="1" name="userDevNewsletter"> <span
                                                    class="f12">Inform me about development/technical updates
                                                    (API, IPs used..).</span>
                                                <p>
                                                    <span class="f11"><strong>Note:</strong> important
                                                        updates that can effect your usage of the service will still be
                                                        delivered.</span>
                                                </p>
                                            </li> --}}
                                            {{-- ignore  End --}}
                                        </ul>
                                    </fieldset>
                                    <div id="editPersonalInfoSuccessNotification"
                                        class="alert alert-success no-margin hide">
                                        <strong class="alert-success">Success!</strong> Personal information is now
                                        updated..
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-blue">Update</button>
                                    </div>
                                </form>
                                {{-- End form  personal detlais --}}
                                {{-- start password form --}}
                                <form id="editPersonalPasswordForm" class="form-horizontal" method="POST"
                                    action="{{ route('chnage_password') }}">
                                    @csrf
                                    <fieldset>
                                        <ul class="form-list label-left list-bordered dotted">
                                            <li class="section-form">
                                                <h4>Password <small>(not required if you won't be updating the
                                                        password)</small></h4>
                                            </li>

                                            <li class="control-group">
                                                <label for="userOldPassword" class="control-label">Current Password
                                                    <span class="required">*</span></label>
                                                <div class="controls">
                                                    <div class="input-append block">
                                                        <input id="userOldPassword" class="span6"
                                                            type="password" name="userOldPassword" value="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="control-group">
                                                <label for="userNewPassword" class="control-label">New Password <span
                                                        class="required">*</span></label>
                                                <div class="controls">
                                                    <div class="input-append block">
                                                        <input id="userNewPassword" class="span6"
                                                            type="password" name="userNewPassword" value="">
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="control-group">
                                                <label for="userNewPassword2" class="control-label">Repeat New Password
                                                    <span class="required">*</span></label>
                                                <div class="controls">
                                                    <div class="input-append block">
                                                        <input id="userNewPassword2" class="span6"
                                                            type="password" name="userNewPassword2" value="">
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </fieldset>

                                    <div id="editPasswordSuccessNotification"
                                        class="alert alert-success no-margin hide">
                                        <strong class="alert-success">Success!</strong> Password is now updated.
                                    </div>
                                    <div id="editPasswordErrorNotification" class="alert alert-error no-margin hide">
                                        <strong class="alert-error">Ooops!</strong> Current password is not valid.
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-blue">Update</button>
                                    </div>
                                </form>
                                {{-- end password form --}}
                                {{-- email Update --}}
                                <form id="editPersonalEmailForm" class="form-horizontal" method="POST"
                                    action="{{ route('editPersonalEmailForm') }}">
                                    @csrf

                                    <fieldset>
                                        <legend class="section-form">E-mail</legend>
                                        <ul class="form-list label-left list-bordered dotted">
                                            <li class="control-group">
                                                Your e-mail at UptimeRobot is <b>{{ auth()->user()->email }}</b>. <a
                                                    href="#" class="showUserNewEmailWrapper">I want to change it</a>.
                                            </li>
                                            <li class="control-group userNewEmailWrapper hide">
                                                <label for="userNewEmail" class="control-label">New E-mail <span
                                                        class="required">*</span></label>
                                                <div class="controls">
                                                    <div class="input-append block">
                                                        <input id="userNewEmail" class="span6" type="text"
                                                            value="" name="userNewEmail">
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </fieldset>

                                    <div id="editPersonalEmailSuccessNotification"
                                        class="alert alert-info no-margin hide">
                                        <strong class="alert-info">One more step left!</strong> Please approve the
                                        e-mail sent to your new e-mail address.
                                    </div>
                                    <div id="editPersonalEmailAlertNotification"
                                        class="alert alert-alert no-margin hide">
                                        <strong class="alert-alert">Ooops!</strong> This e-mail is in use by another
                                        UptimeRobot user.
                                    </div>
                                    <div class="form-actions userNewEmailWrapper hide">
                                        <button type="submit" class="btn btn-blue">Update</button>
                                    </div>
                                </form>

                                {{-- end email update --}}

                                {{-- <fieldset>
                                    <legend class="section-form">Two-Factor Authentication (2FA)</legend>
                                    <ul class="form-list label-left list-bordered dotted">
                                        <li class="control-group">
                                            <input id='showQR' class="checkbox" type="checkbox" value="0"
                                                name="userAuthSetting">
                                            <span id="authCheckBoxText" class="f12">Select to enable
                                                two-factor authentication for login.</span>
                                        </li>

                                    </ul>
                                </fieldset> --}}
                                {{-- <div id="createQRModal" class="modal hide fade in" tabindex="-1" data-toggle="true">
                                </div> --}}
                                {{-- <form id="deleteAccountSendVerificationForm"
                                    data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJkZWxldGVBY2NvdW50U2VuZFZlcmlmaWNhdGlvbiIsInRpbWVzdGFtcCI6MTY0NTE3Mzg0MH0.zkU71nz3fKJOsBH0t5M-i2bPihJMXxUQ4VBIxR8VFVwG7yb-CSs0bo58osfeUg-6dQthnIS7OmTX3z4Aekz6kQ"
                                    class="form-horizontal" method="POST"
                                    action="inc/dml/userDML.php?action=deleteAccount">
                                    <fieldset>
                                        <legend class="section-form">Delete Account</legend>
                                        <ul class="form-list label-left list-bordered dotted">
                                            <li class="control-group">
                                                UptimeRobot sends an "account deletion verification e-mail" to the
                                                account e-mail. Once the verification link inside the e-mail is clicked,
                                                all account information at UptimeRobot (including the account, monitors,
                                                logs and settings will be lost and <b>can not be recovered</b>).
                                                <p><a href="#" class="showDeleteAccountSendVerificationWrapper">I still
                                                        want to delete the account</a>.</p>
                                            </li>
                                        </ul>
                                    </fieldset>

                                    <div id="deleteAccountSendVerificationSuccessNotification"
                                        class="alert alert-info no-margin hide">
                                        <strong class="alert-info">One more step left!</strong> Please approve the
                                        e-mail sent to your current e-mail address.
                                    </div>
                                    <div class="form-actions deleteAccountSendVerificationWrapper hide">
                                        <button type="submit" class="btn btn-red">Send account deletion
                                            e-mail</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- alert contact flex box --}}
        <div class="span6 grider alertContactsContainerList">
            <div class="widget widget-simple widget-notes widgetToGetEmail" data-alertcontactaccountemail="">
                <div class="widget-header">
                    <h4><i class="fontello-icon-users-1"></i> Alert Contacts</h4>
                    <div class="widget-tool">
                        <a class="btn btn-green btn-small btn-glyph addAlertContact" data-toggle="modal"
                            href="#newAlertContact">Add Alert Contact</a>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="alert alert-success hide" id="startStopAlertContactSuccessNotification"></div>
                    <h5 class="span7 alertContactResultText">There are
                        @empty(!$Contact_detalis)
                            <span class="alertContactCount">{{ $Contact_detalis[0]['count'] }}</span>
                        @endempty

                        alert contacts (
                        <a class="showHideAlertContactsInSettings" href="#no">hide them</a>).
                    </h5>
                    <button class="searchAlertContactBtn" type="button">
                        <i class="fontello-icon-search-5" style="margin-right:0;"></i>
                    </button>
                    <input class="span3 alertContactSearchKeyword" placeholder="Search" type="text" value="">
                    <div class="alertContactsTableShowHideList">
                        <table class="table table-condensed alertContactsTableList">
                            <thead>
                                <tr>
                                    <th width="40px">Type</th>
                                    <th>Alert Contact</th>
                                    <th width="60px">Action</th>
                                </tr>
                            </thead>
                            {{-- list --}}
                            <tbody>
                                
                                @if(empty($Contact_detalis[0]))
                                    <tr class="alertContact">
                                        
                                        <tr ><td colspan="3" class="text-center">No data Found</td></tr>
                                @else
                                    @foreach ($Contact_detalis as $list)
                                        @if ($list['status'] == 1)
                                            {{-- check email verifry or not --}}
                                            @if ($list['account_type'] == 'base')
                                                <tr class="" data-alertcontactid="{{ $list['id'] }}">
                                                    <td><i class="fontello-icon-mail" title="E-mail"></i></td>
                                                    <td><span title="{{ $list['email'] }}">{{ $list['email'] }}</span>
                                                    </td>
                                                    <td>
                                                        <a class="editBaseAccountEmailAlertContact"
                                                            data-alertcontactid="{{ $list['id'] }}"
                                                            data-toggle="modal" href="#editAlertContact">
                                                            <i class="fontello-icon-pencil"
                                                                title="Edit Alert Contact"></i>
                                                        </a>
                                                        @if ($list['alert_start_stop'] == 1)
                                                            <a class="startStopAlertContact"
                                                                data-alertcontactid="{{ $list['id'] }}" href="#"
                                                                style="padding: 0px 0px 0px 3px;">
                                                                <i class="fontello-icon-pause-1"
                                                                    title="Disable Alert Contact">
                                                                </i>
                                                            </a>
                                                        @else
                                                            <a class="startStopAlertContact"
                                                                data-alertcontactid="{{ $list['id'] }}" href="#"
                                                                style="padding: 0px 0px 0px 3px;">
                                                                <i class="fontello-icon-play-1"
                                                                    title="Disable Alert Contact">
                                                                </i>
                                                            </a>
                                                        @endif


                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="alertContact" data-alertcontactid="{{ $list['id'] }}">
                                                    <td><i class="fontello-icon-mail"></i></td>
                                                    <td><span
                                                            title="{{ $list['email'] }}">{{ $list['Friendly_Name'] }}</span>
                                                    </td>
                                                    <td>
                                                        <a class="editAlertContact"
                                                            data-alertcontactid="{{ $list['id'] }}"
                                                            data-toggle="modal" href="#editAlertContact"><i
                                                                class="fontello-icon-pencil"></i>
                                                        </a>
                                                        <a class="startStopAlertContact" href="#editAlertContact"
                                                            data-alertcontactid="{{ $list['id'] }}"><i
                                                                class="fontello-icon-pause-1"></i> </a>


                                                        <a class="deleteAlertContact"
                                                            data-alertcontactid="{{ $list['id'] }}"
                                                            data-toggle="modal" href="#deleteAlertContact"><i
                                                                class="fontello-icon-cancel-3"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @else
                                            <tr class="alertContactDisabled"
                                                data-alertcontactid="{{ $list['id'] }}">
                                                <td><i class="fontello-icon-mail"></i></td>
                                                <td><span
                                                        title="{{ $list['email'] }}">{{ $list['Friendly_Name'] }}</span>
                                                </td>
                                                <td>
                                                    <a class="editAlertContact"
                                                        data-alertcontactid="{{ $list['id'] }}" data-toggle="modal"
                                                        href="#editAlertContact"><i class="fontello-icon-pencil"></i>
                                                    </a> <i class="fontello-icon-lock-1"></i> <a
                                                        class="deleteAlertContact"
                                                        data-alertcontactid="{{ $list['id'] }}" data-toggle="modal"
                                                        href="#deleteAlertContact"><i
                                                            class="fontello-icon-cancel-3"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif

                            </tbody>

                            {{-- end list --}}
                        </table>
                    </div>
                </div>
            </div>
            <input type="hidden" value="4" class="alertContactsLimitList">
        </div>

        <input type="hidden" class="getAlertContactsEditOrListDetector" value="1" />
        <input type="hidden" class="getMWindowsEditOrListDetector" value="1" />
        <input type="hidden" class="getPspEditOrListDetector" value="1" />

    </div>
</div>
