
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
<h4>Plan <a href="#upgradeAccount" class="upgradeProAccount" data-toggle="modal" data-cta-source="dashboard_settings-upgrade_to_pro"><small class="btn btn-small btn-navi">
Upgrade to Pro</small></a></h4>
</li>

<li class="control-group">
You are using the "<b>Free Plan (50 monitors, 5 minute intervals)</b>".
</li>
<li class="control-group">
<small>There are <b>0 SMS (or voice-calls) left</b>. <a href="#upgradeAccount" class="upgradeSMS" data-toggle="modal" data-cta-source="dashboard_settings-add_more_sms">Want to add more?</a></small>
</li>

<li class="control-group">
<small>
<b><a href="" class="showPaymentsHistory showPaymentsHistoryText">Payments history</a></b> <div id="paymentsHistory" class="hide"></div>
<div>
<div id="userProPlanStatusInfoText" class="">The auto-renew billing is cancelled. Please <b>click the "Change Plan button" above</b> to renew the subscription.</div>
</div>
</small>
</li>
</ul>
</fieldset>
<form id="editPersonalInfoForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPersonalInfo">
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJlZGl0UGVyc29uYWxJbmZvIiwidGltZXN0YW1wIjoxNjQ1MTczODQwfQ.9s_ClfDJhlEinbowmyLVKJfC0GA2t6UNlUsI1dMTlC3HbPSvxGdxHjXSb8Mw5ugG1M8Wj-lwgKiZkMSh8MvPcw" name="formToken" />
<fieldset>
<ul class="form-list label-left list-bordered dotted">
 <li class="section-form">
<h4>Personal </h4>
</li>

<li class="control-group">
<label for="userFirstLastName" class="control-label">First-Last Name <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userFirstLastName" class="span6" type="text" value="krishna" name="userFirstLastName">
</div>
</div>
</li>

<li class="control-group">
<label for="userTimezoneID" class="control-label">Timezone</label>
<div class="controls">
<div class="input-append block">
<select id="userTimezoneID" class="selecttwoMySettings span6" name="userTimezoneID">
<option  value="39"> Yankee Timezone (GMT -12:00:00)</option><option  value="2"> Midway Island, Samoa (GMT -11:00:00)</option><option  value="3"> Hawaii (GMT -10:00:00)</option><option  value="4"> Alaska (GMT -09:00:00)</option><option  value="5"> Pacific Time (US &amp; Canada) (GMT -08:00:00)</option><option  value="46"> Arizona (GMT -07:00:00)</option><option  value="6"> Mountain Time (US &amp; Canada) (GMT -07:00:00)</option><option  value="49"> Bogota (GMT -05:00:00)</option><option  value="7"> Central Time (US &amp; Canada), Mexico City (GMT -06:00:00)</option><option  value="8"> Eastern Time (US &amp; Canada) (GMT -05:00:00)</option><option  value="48"> Lima (GMT -05:00:00)</option><option  value="34"> Caracas-Venezuela (GMT -04:00:00)</option><option  value="9"> Atlantic Time (Canada), La Paz (GMT -04:00:00)</option><option  value="10"> Newfoundland (GMT -03:30:00)</option><option  value="11"> Buenos Aires, Georgetown (GMT -03:00:00)</option><option  value="12"> Mid-Atlantic (GMT -02:00:00)</option><option  value="42"> Sao Paulo (GMT -03:00:00)</option><option  value="13"> Azores, Cape Verde Islands (GMT -01:00:00)</option><option selected="selected" value="37"> GMT/UTC (GMT +00:00:00)</option><option  value="35"> South African Standard Time (GMT +02:00:00)</option><option  value="14"> Western Europe Time, London, Lisbon, Casablanca (GMT +00:00:00)</option><option  value="15"> Brussels, Copenhagen, Madrid, Paris (GMT +01:00:00)</option><option  value="43"> Istanbul (GMT +03:00:00)</option><option  value="16"> Kaliningrad, Athens, Helsinki (GMT +02:00:00)</option><option  value="36"> Moscow, St. Petersburg (GMT +03:00:00)</option><option  value="45"> Jerusalem (GMT +02:00:00)</option><option  value="17"> Baghdad, Riyadh (GMT +03:00:00)</option><option  value="40"> Samara (GMT +04:00:00)</option><option  value="18"> Tehran (GMT +03:30:00)</option><option  value="20"> Kabul (GMT +04:30:00)</option><option  value="19"> Abu Dhabi, Muscat, Baku, Tbilisi (GMT +04:00:00)</option><option  value="21"> Ekaterinburg, Islamabad, Karachi, Tashkent (GMT +05:00:00)</option><option  value="22"> Bombay, Colombo, Calcutta, Madras, New Delhi (GMT +05:30:00)</option><option  value="23"> Kathmandu (GMT +05:45:00)</option><option  value="24"> Almaty, Dhaka (GMT +06:00:00)</option><option  value="47"> Yangon (Myanmar) (GMT +06:30:00)</option><option  value="25"> Bangkok, Hanoi, Jakarta (GMT +07:00:00)</option><option  value="26"> Beijing, Perth, Singapore, Hong Kong (GMT +08:00:00)</option><option  value="27"> Tokyo, Seoul, Osaka, Sapporo, Yakutsk (GMT +09:00:00)</option><option  value="28"> Adelaide, Darwin (GMT +10:30:00)</option><option  value="29"> Guam, Vladivostok (GMT +10:00:00)</option><option  value="44"> Australian Eastern Time Zone (Brisbane) (GMT +10:00:00)</option><option  value="38"> Sydney, Melbourne (GMT +11:00:00)</option><option  value="30"> Magadan, Solomon Islands, New Caledonia (GMT +11:00:00)</option><option  value="41"> Nouméa, Solomon Islands (GMT +11:00:00)</option><option  value="1"> Eniwetok, Kwajalein (GMT +12:00:00)</option><option  value="31"> Auckland, Wellington, Fiji, Kamchatka (GMT +13:00:00)</option><option  value="32"> Chatham Islands (GMT +13:45:00)</option><option  value="33"> New Zealand Daylight Time, Tonga (GMT +13:00:00)</option> </select>
</div>
</div>
</li>

<li class="control-group">
<input id="userNewsletter" class="checkbox" type="checkbox" value="1" name="userNewsletter" checked="checked"> <span class="f12">Inform me about new features and updates (no more than twice a month).</span>
<br/>
<input id="userDevNewsletter" class="checkbox" type="checkbox" value="1" name="userDevNewsletter"> <span class="f12">Inform me about development/technical updates (API, IPs used..).</span>
<p>
<span class="f11"><strong>Note:</strong> important updates that can effect your usage of the service will still be delivered.</span>
</p>
</li>

</ul>
</fieldset>
<div id="editPersonalInfoSuccessNotification" class="alert alert-success no-margin hide">
<strong class="alert-success">Success!</strong> Personal information is now updated..
</div>
<div class="form-actions">
<button type="submit" class="btn btn-blue">Update</button>
</div>
</form>
<form id="editPersonalPasswordForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPersonalPassword">
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJlZGl0UGVyc29uYWxQYXNzd29yZCIsInRpbWVzdGFtcCI6MTY0NTE3Mzg0MH0.MrX3QKstNkI8GceJLnXGMNJ4nQisurvSWRXG6VKhEn9ZlT6aBXpuLwcBebJcBwCgL8bWoAXN8YUezfGu1xEfpQ" name="formToken" />
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="section-form">
<h4>Password <small>(not required if you won't be updating the password)</small></h4>
</li>

<li class="control-group">
<label for="userOldPassword" class="control-label">Current Password <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userOldPassword" class="span6" type="password" name="userOldPassword" value="">
</div>
</div>
</li>

<li class="control-group">
<label for="userNewPassword" class="control-label">New Password <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userNewPassword" class="span6" type="password" name="userNewPassword" value="">
</div>
</div>
</li>

<li class="control-group">
<label for="userNewPassword2" class="control-label">Repeat New Password <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userNewPassword2" class="span6" type="password" name="userNewPassword2" value="">
</div>
</div>
</li>

</ul>
</fieldset>
<div id="editPasswordSuccessNotification" class="alert alert-success no-margin hide">
<strong class="alert-success">Success!</strong> Password is now updated.
</div>
<div id="editPasswordErrorNotification" class="alert alert-error no-margin hide">
<strong class="alert-error">Ooops!</strong> Current password is not valid.
</div>
<div class="form-actions">
<button type="submit" class="btn btn-blue">Update</button>
 </div>
</form>
<form id="editPersonalEmailForm" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=editPersonalEmail">
<input type="hidden" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJlZGl0UGVyc29uYWxFbWFpbCIsInRpbWVzdGFtcCI6MTY0NTE3Mzg0MH0.sdZ0d5SA8yX7KxRjbIGtXNkprYAuBF1VxkiWQs0Y9X_Zk36tTvD8nTU7CIkDkzh34q5mASwoRf5wLb6pHDMM_g" name="formToken" />
<fieldset>
<legend class="section-form">E-mail</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group">
Your e-mail at UptimeRobot is <b>junagadhqueen143@gmail.com</b>. <a href="#" class="showUserNewEmailWrapper">I want to change it</a>.
</li>
<li class="control-group userNewEmailWrapper hide">
<label for="userNewEmail" class="control-label">New E-mail <span class="required">*</span></label>
<div class="controls">
<div class="input-append block">
<input id="userNewEmail" class="span6" type="text" value="" name="userNewEmail">
</div>
</div>
</li>

</ul>
</fieldset>

<div id="editPersonalEmailSuccessNotification" class="alert alert-info no-margin hide">
<strong class="alert-info">One more step left!</strong> Please approve the e-mail sent to your new e-mail address.
</div>
<div id="editPersonalEmailAlertNotification" class="alert alert-alert no-margin hide">
<strong class="alert-alert">Ooops!</strong> This e-mail is in use by another UptimeRobot user.
</div>
<div class="form-actions userNewEmailWrapper hide">
<button type="submit" class="btn btn-blue">Update</button>
</div>
</form>
<fieldset>
<legend class="section-form">Two-Factor Authentication (2FA)</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group">
<input id='showQR' class="checkbox" type="checkbox" value="0" name="userAuthSetting"
                                                            >
<span id="authCheckBoxText" class="f12">Select to enable two-factor authentication for login.</span>
</li>

</ul>
</fieldset>
<div id="createQRModal" class="modal hide fade in" tabindex="-1" data-toggle="true"></div>
<form id="deleteAccountSendVerificationForm" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJkZWxldGVBY2NvdW50U2VuZFZlcmlmaWNhdGlvbiIsInRpbWVzdGFtcCI6MTY0NTE3Mzg0MH0.zkU71nz3fKJOsBH0t5M-i2bPihJMXxUQ4VBIxR8VFVwG7yb-CSs0bo58osfeUg-6dQthnIS7OmTX3z4Aekz6kQ" class="form-horizontal" method="POST" action="inc/dml/userDML.php?action=deleteAccount">
<fieldset>
<legend class="section-form">Delete Account</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group">
UptimeRobot sends an "account deletion verification e-mail" to the account e-mail. Once the verification link inside the e-mail is clicked, all account information at UptimeRobot (including the account, monitors, logs and settings will be lost and <b>can not be recovered</b>).
<p><a href="#" class="showDeleteAccountSendVerificationWrapper">I still want to delete the account</a>.</p>
</li>
</ul>
</fieldset>

<div id="deleteAccountSendVerificationSuccessNotification" class="alert alert-info no-margin hide">
<strong class="alert-info">One more step left!</strong> Please approve the e-mail sent to your current e-mail address.
</div>
<div class="form-actions deleteAccountSendVerificationWrapper hide">
<button type="submit" class="btn btn-red">Send account deletion e-mail</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</div>

<div class="span6 grider alertContactsContainerList">
<div class="widget widget-simple widget-notes widgetToGetEmail"
                 data-alertcontactaccountemail="junagadhqueen143@gmail.com">
<div class="widget-header">
<h4><i class="fontello-icon-users-1"></i> Alert Contacts</h4><div class="widget-tool">
<a class="btn btn-green btn-small btn-glyph addAlertContact"
                       data-toggle="modal"
                       href="#newAlertContact">Add Alert Contact</a>
</div>
</div>
<div class="widget-body">
<div class="alert alert-success hide"
                     id="startStopAlertContactSuccessNotification"></div><h5 class="span7 alertContactResultText">There are
<span class="alertContactCount">1</span> alert contacts (
<a class="showHideAlertContactsInSettings" href="#no">hide them</a>).
</h5>
<button class="searchAlertContactBtn" type="button">
<i class="fontello-icon-search-5"
                          style="margin-right:0;"></i>
</button>
<input class="span3 alertContactSearchKeyword"
                     placeholder="Search"
                     type="text"
                     value="">
<div class="alertContactsTableShowHideList">
<table class="table table-condensed alertContactsTableList">
<thead>
<tr>
<th width="40px">Type</th>
<th>Alert Contact</th>
<th width="60px">Action</th>
</tr>
</thead>
<tbody><tr class=""
                    data-alertcontactid="01612895">
<td><i class="fontello-icon-mail" title="E-mail"></i></td>
<td><span title="junagadhqueen143@gmail.com">junagadhqueen143@gma<span class="shortenLongAlertContacts">il.</span>..</span></td>
<td>
<a class="editBaseAccountEmailAlertContact"
                        data-alertcontactid="1612895"
                        data-toggle="modal"
                        href="#editAlertContact">
<i class="fontello-icon-pencil"
                             title="Edit Alert Contact"></i>
</a><a class="startStopAlertContact"
              data-alertcontactid="01612895"
              href="#"
              style="padding: 0px 0px 0px 3px;">
<i class="fontello-icon-pause-1"
                  title="Disable Alert Contact">
</i>
</a>
</td>
</tr></tbody>
</table>
</div>
</div></div><input type="hidden" value="4" class="alertContactsLimitList">
</div>
<input type="hidden" class="getAlertContactsEditOrListDetector" value="1" />
<div class="span6 grider mWindowsContainerList">
<div class="widget widget-simple widget-notes">
<div class="widget-header">
<h4>Maintenance Windows</h4>
</div>
<div class="widget-body">
<div class="alert alert-success hide"
                     id="startStopMWindowSuccessNotification"></div><h5>This is a Pro Plan feature for auto-disabling/enabling monitoring on pre-defined periods.
<a class="upgradeProAccount"
                   data-dismiss="modal"
                   data-toggle="modal"
                   href="#upgradeAccount" data-cta-source="dashboard_setting-maintenance_windows">Upgrade</a>?</h5>
<div class="mWindowsTableShowHideList hide">
<table class="table table-condensed mWindowsTableList">
<thead>
<tr>
<th>Maintenance Windows</th>
<th width="60px">Action</th>
</tr>
</thead>
<tbody></tbody>
</table>
</div>
</div>
</div><input type="hidden" value="4" class="mWindowsLimitList">
</div>
<input type="hidden" class="getMWindowsEditOrListDetector" value="1" />
<input type="hidden" class="getPspEditOrListDetector" value="1" />
<div class="span6 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-rss"></i> RSS Notifications</h4>
</div>
<div class="widget-body">
<div class="row-fluid">
<div class="span12">
<fieldset>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group userRSSLinkWrapper">
 <div id="enableRSSLinkWrapper"  >
<button type="submit" id="enableRSSLinkButton" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJnZW5lcmF0ZVJTU0ZlZWRLZXkiLCJ0aW1lc3RhbXAiOjE2NDUxNzM4NDB9.SqcxwkB-Bky_wPgTpzAV_56GcHp18k98ooBOa1Tx0pfEAkQ7bEXo1ktrZu1pBEf0D4bbSYAMg_fHYeJnBqvZbw" class="btn btn-blue">Enable RSS</button>
</div>
<div id="disableRSSLinkWrapper"  class='hide'  >
<button type="submit" id="disableRSSLinkButton" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJkZWxldGVSU1NGZWVkS2V5IiwidGltZXN0YW1wIjoxNjQ1MTczODQwfQ.VwEDh6nur2lCUZjRydrOFOrnXe6BCEZEUf69GMbhOFtXUdejCY1rTcWnX3BNS9309pXuQVVOO1qqEsncEoBJvA" class="btn btn-red">Disable RSS</button>
<br><br>
<span class='f14'>
UptimeRobot notifications can be reached through RSS with <b><a href=":javascript " id="userRSSLink">this link</a></b>.</span>
(<a href="#" class="copyToClipboard" title=""><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
</div>
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
<div class="span6 grider">
<div class="widget widget-simple">
<div class="widget-header">
<h4><i class="fontello-icon-flash"></i> API Settings</h4>
</div>
<div class="widget-body">
<div class="row-fluid">
<div class="span12">
<fieldset>
<legend class="section-form">Main API Key</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group" style="border-bottom:none;"> This is the API key that can control almost everything for your account (adding/editing/deleting monitors, alert contacts..).
<a href="#" class="showMainAPIKey">
Create the main API key.
</a>
</li>
<li class="control-group mainAPIKeyWrapper hide">
<div id="createMainAPIKeyWrapper">
<button type="submit" id="createMainAPIKeyButton" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJnZW5lcmF0ZU1haW5BUElLZXkiLCJ0aW1lc3RhbXAiOjE2NDUxNzM4NDB9.VrvqHOjtCfladX94mkEoaH6EbZP8ut_xXWeq8c1TSQBpR07w2tHq0Qp_A-jWV8Z1HLiUqhmNQN6ai_3TnXE12A" class="btn btn-blue">Create the main API key</button>
</div>
 <div id="deleteMainAPIKeyWrapper" class="hide">
The main API key is <span class="bold" id="mainAPIKeyValue">u1612895-</span> (<a href="#" id="mainAPIKeyCtC" class="copyToClipboard" title="u1612895-"><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
<div class="form-actions">
<button type="submit" id="deleteMainAPIKeyButton" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJkZWxldGVNYWluQVBJS2V5IiwidGltZXN0YW1wIjoxNjQ1MTczODQwfQ.xOEV4tvG932LPkbjbZkAopSwymV-eBtxaCshojZ1P8zpHrHt6kX4ucY9rOPPlxjL8vA-ZfKIImZK02sQbadRbw" class="btn btn-red">Delete the main API key</button>
</div>
</div>
</li>

</ul>
</fieldset>

<form class="form-horizontal">
<fieldset>
<legend class="section-form">Monitor-Specific API Keys</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group" style="border-bottom:none;"> These are the API keys that can only use the read-only GetMonitors API method for a given monitor. They can be safely shared and/or used in client-side code as the main API key won't be revealed.
<a href="#" class="showMonitorAPIKey">Show/hide it.</a>
</li>
<div class="monitorAPIKeyWrapper hide">
<li class="control-group">
<label for="monitorAPIKeyMonitorID" class="control-label">Monitor</label>
<div class="controls">
<input type="hidden" id="monitorAPIKeyMonitorID" class="span8" />
</div>
</li>
<li class="control-group monitorAPIKeyWrapper2">
<div id="createMonitorAPIKeyWrapper" class="hide">
The monitor doesn't have an API key.
<div class="form-actions">
<button type="submit" id="createMonitorAPIKeyButton" class="btn btn-blue">Create API key for the monitor</button>
</div>
</div>
<div id="deleteMonitorAPIKeyWrapper" class="hide">
API key for this monitor is: <span class="bold" id="monitorAPIKeyValue"></span> (<a href="#" class="copyToClipboard" title=""><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
<div class="form-actions">
<button type="submit" id="deleteMonitorAPIKeyButton" class="btn btn-red">Delete monitor's API key</button>
</div>
</div>

</li>
</div>

</ul>
</fieldset>
</form>

</div>
<fieldset>
<legend class="section-form">Read-Only API Key</legend>
<ul class="form-list label-left list-bordered dotted">
<li class="control-group" style="border-bottom:none;"> This is the API key that can only use the read-only GetMonitors API method call for all monitors. It can be safely shared and/or used in client-side code as the main API key won't be revealed.
<a href="#" class="showReadOnlyAPIKey">
Create the read-only API key.
</a>
</li>
<li class="control-group readOnlyAPIKeyWrapper hide">
<div id="createReadOnlyAPIKeyWrapper">
<button type="submit" id="createReadOnlyAPIKeyButton" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJnZW5lcmF0ZVJlYWRPbmx5QVBJS2V5IiwidGltZXN0YW1wIjoxNjQ1MTczODQwfQ.oPttvK9w6NEpzIacYQ26Y9DLCUoblvaKCh88DfpMaREjWBRCRDvlzpSzkRUjLRVZn1goyWEJTX8n_SfgpyXPOA" class="btn btn-blue">Create the Read Only API key</button>
</div>
<div id="deleteReadOnlyAPIKeyWrapper" class="hide">
The Read Only API key is <span class="bold" id="readOnlyAPIKeyValue">ur1612895-</span> (<a href="#" id="readOnlyAPIKeyCtC" class="copyToClipboard" title="ur1612895-"><i class="aweso-icon-copy"></i><span>Copy to Clipboard</span></a>)
<div class="form-actions">
<button type="submit" id="deleteReadOnlyAPIKeyButton" data-formToken="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJ1c2VySUQiOjE2MTI4OTUsImFjdGlvbk5hbWUiOiJkZWxldGVSZWFkT25seUFQSUtleSIsInRpbWVzdGFtcCI6MTY0NTE3Mzg0MH0.grABa4SBUk7IeoFhkV8mCYz36tkzjfLI4zx2emogW0SyclqgyKzxcrnBrTAMsbPT_gtbqsUz8EsxKLMltzSIeQ" class="btn btn-red">Delete the Read Only API key</button>
</div>
</div>
</li>

</ul>
</fieldset>

</div>
</div>
<div class="widget-footer">
</div>
</div>
</div>

</div>

</div>
