<script type="text/javascript" src="/grafik/assets/js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="/grafik/assets/js/mdb.min.js"></script>
<script type="text/javascript" src="/grafik/jquery-latest.js"></script>

<div class="panel panel-success">
        <div class="panel-heading">
            Grafik Suhu dan Kelembaban
        </div>

        <div class="panel-body">
            <canvas id="myChart"></canvas>
            <script type="text/javascript">
                var canvas = document.getElementById('myChart');
                var data = {
                    labels : [
                        @foreach($datasuhu as $dt)
                        '{{ $dt->created_at }}',
                        @endforeach
                    ],
                    datasets : [
                        {
                        label : "Suhu",
                        data : [
                        @foreach($datasuhu as $dt)
                        {{ $dt->suhu }},
                        @endforeach
                        ]
                    },

                    {
                        label : "Kelembaban",
                        data : [
                        @foreach($datasuhu as $dt)
                        {{ $dt->kelembaban }},
                        @endforeach
                        ]
                    }
                ]} ;
                var option = {
                    showLines : true,
                    animation : {duration : 0}
                };

                var myLineChart = Chart.Line(canvas, {
                    data : data,
                    options : option
                });



            </script>
        </div>
    </div>

