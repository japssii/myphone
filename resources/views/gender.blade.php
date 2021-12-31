@extends('layouts.main')


@section('content')
<div class="row justify-content-center">
    <div class=" col-md-6">
                           <!-- Content Row -->
                           <div class="row">

                            <!-- Pie Chart -->
                            <div>
                            <?php
                            $con = mysqli_connect("localhost","root","","system");
                            ?>
                
                     <head>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['bar']});
                      google.charts.setOnLoadCallback(drawChart);
                
                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Gender', 'Number'],
                
                           <?php
                
                                    $sql="SELECT sex, count(*) as number FROM residents GROUP BY sex";
                                    $fire=mysqli_query($con,$sql);
                                            while($result = mysqli_fetch_assoc($fire))
                                            echo "['".$result["sex"]."', ".$result["number"]."],";
                                    ?> 
                                    ]);
                
                        var options = {
                          chart: {
                            title: 'Gender'
                            
                          },
                          bars: 'vertical' // Required for Material Bar Charts.
                        };
                
                        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
                
                        chart.draw(data, options);
                      }
                    </script>
                  </head>
                  <body>
                    <div id="barchart_material" style="width: 600px; height: 400px;"></div>
                  </body>
                           <!-- /.container-fluid -->
                
                           </div>
                

    </div>
</div>

@endsection