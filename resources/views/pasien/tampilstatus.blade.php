<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suhu</title>
</head>
<body>
    <div style="line-height: 2px;">
    @foreach($data as $dt)
    @if ($dt->suhu > 28)
    <h1><center><b>Panas</b></center></h1>
    @else
    <h1><center><b>Dingin</b></center></h1>
    @endif
    @endforeach
    </div>
</body>
</html>
