<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelembaban</title>
</head>
<body>
    <div style="line-height: 2px;">
        @foreach($data as $dt)
        <h1><center><b>{{ $dt->kelembaban }}</b></center></h1><br>
        <center>%</center>
        @endforeach
    </div>
</body>
</html>
