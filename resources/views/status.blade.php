@extends('layouts.main')


@section('content')
<div class="row justify-content-center">
    <div class=" col-md-6">
      <div class="card ">
        <div  class="alert alert-info"  >
          {{ __('   Civil Status  ') }}
        
      </div>
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
                      ['Status', 'Number'],
          
                      <?php 
                      $sql="SELECT civilstatus, count(*) as number FROM residents GROUP BY civilstatus";
                      $fire=mysqli_query($con,$sql);
                              while($result = mysqli_fetch_assoc($fire))
                              echo "['".$result["civilstatus"]."', ".$result["number"]."],";
          
                      ?>
          ]);
          
                  var options = {
                    
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
          </div>
          

    </div>
</div>

@endsection