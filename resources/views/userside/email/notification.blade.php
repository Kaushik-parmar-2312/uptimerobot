<!DOCTYPE html>
<html>
<head>
    <title>UpTime</title>
</head>
<body>
@if($details['status']=='down')
    <p>Hi,</p>
    <p>The monitor {{ $details['monitor'] }} ({{ $details['monitor_url']}}) is currently DOWN (Connection Timeout)</p>
    <p><b>Event Timestamp:<b>{{$details['timestamp']}}</p>
    <p>Sincerely,<br><br>Uptime</p>
@else
<p>Hi,</p>
    <p>The monitor {{ $details['monitor'] }} ({{ $details['monitor_url']}})  is back UP (HTTP 200 - OK)</p>
    <p><b>Event Timestamp:<b>{{$details['timestamp']}}</p>
    <p>Sincerely,<br><br>Uptime</p>
@endif
</body>
</html>