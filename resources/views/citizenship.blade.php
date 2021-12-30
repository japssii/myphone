@extends('layouts.main')


@section('content')
<div class="row justify-content-center">
    <div class=" col-md-6">
        <html>
  <head>
    <?php
    $con = mysqli_connect("localhost","root","","system");
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Citizenship', 'Number'],

            <?php

                    $sql="SELECT citizenship, count(*) as number FROM residents GROUP BY citizenship";
                    $fire=mysqli_query($con,$sql);
                            while($result = mysqli_fetch_assoc($fire))
                            echo "['".$result["citizenship"]."', ".$result["number"]."],";
                    ?> 
                    ]);

        var options = {
          title: 'Citizenship',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 500px; height: 400px;"></div>
  </body>
</html>


    </div>
</div>
@endsection