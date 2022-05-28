<tr class="trueClass"
			    data-alertcontactid="{{$valu['id']}}">
<td><i class="fontello-icon-mail-1"></i></td>
<td><span title="{{$valu['email']}}">{{$valu['email']}}</span></td>
<td>
<a class="editAlertContact"
			        data-alertcontactid="{{$valu['id']}}"
			        data-toggle="modal"
							href="#editAlertContact"><i class="fontello-icon-pencil"></i>
</a> <i class="fontello-icon-lock-1"></i> <a class="deleteAlertContact"
			        data-alertcontactid="{{$valu['id']}}"
			        data-toggle="modal"
							href="#deleteAlertContact"><i class="fontello-icon-cancel-3"></i>
</a>
</td>
</tr>