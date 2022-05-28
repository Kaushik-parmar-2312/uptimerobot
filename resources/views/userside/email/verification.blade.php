<!DOCTYPE html>
<html>
    <base href="http://localhost:8000">
<head>
    <title>UpTime Robot </title>
</head>
<body>
    <p>Hi {{auth()->user()->name}},</p>
    <p>Your Email are change for so kindly you verify your Email  </p>
    <a href ="/dashboard">verify your mail</a>
    <p>Sincerely,<br><br>Uptime</p>
</body>
</html>