<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projek IoT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script>
        $(document).ready( function(){
           setInterval( function(){
           $("#suhu").load("{{ url('/pasien/tampilsuhu') }}");
           $("#kelembaban").load("{{ url('/pasien/tampilkelembaban') }}");
           $("#status").load("{{ url('/pasien/tampilstatus') }}");
        //    $("#grafik").load("{{ url('/pasien/tampilgrafik') }}");
           $("#grafik2").load("{{ url('/pasien/cobagrafik') }}");
           }, 500);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <script type="text/javascript" src="grafik/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  </head>
  <body>
    <div class="container">
        <div><h2><center><b> Data Suhu dan Kelembaban</b></center></h2></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header"><center>Suhu</center></h5>
                    <div id="suhu" class="card-body">
                        <h5 class="card-title">0</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header"><center>Kelembaban</center></h5>
                    <div id="kelembaban" class="card-body">
                    <h5 class="card-title">0</h5> %
                    </div>
                </div>
            </div><p>

                    {{-- <div id="grafik" > --}}
                        {{-- <canvas id="lineChart" style="min-height: 270px; height: 250px; max-height: 250px; max-width: 100%;"></canvas> --}}
                    {{-- </div><p> --}}

            <div class="container">
                <div class="container" id="grafik2" style="width:100%; text-align:center">
                </div>
            </div>

            <div class="">
                <div class="card">
                    <h5 class="card-header"><center>Status</center></h5>
                    <div id="status" class="card-body">
                    <h5 class="card-title">null</h5>
                    </div>
                </div>
            </div><p>
    </div>
  </body>
</html>
