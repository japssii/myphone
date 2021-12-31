@extends('layouts.main')


@section('content')

<div class="row justify-content-center">
                        <div class=" col-md-6">


                            <!---- Total number of brgy pie ---->    
                        
                           

                                <div class="card">
                                    <div  class="alert alert-info"  >
                                        {{ __('  TOTAL NO. PER BARANGAY   ') }}
                                      
                                    </div>
                                    <?php
                                    $con = mysqli_connect("localhost","root","","system");
                                    ?>
         

                            <head>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);
                
                                function drawChart() {
                
                                    var data = google.visualization.arrayToDataTable([
                                    ['Brgy', 'Number'],
                
                                    <?php
                
                                        $sql="SELECT brgy, count(*) as number FROM residents GROUP BY brgy";
                                        $fire=mysqli_query($con,$sql);
                                                while($result = mysqli_fetch_assoc($fire))
                                                echo "['".$result["brgy"]."', ".$result["number"]."],";
                                    ?> 
                                    ]);
                
                                    var options = {
                                        
                                        
                                    };
                
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                
                                    chart.draw(data, options);
                                }
                                </script>
                            </head>
                                <body>
                                    <div id="piechart" style="width: 500px; height: 450px; "></div>
                                </body>
                        <div>


                        


                    </div>    
@endsection