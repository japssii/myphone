@extends('layouts.main')


@section('content')
<div class="row justify-content-center">
    <div class=" col-md-6">
                            <!-- Content Row -->
                            <div class="row">

                                <!-- Pie Chart -->
                                <div class="card">
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
                                        ['4 Ps', 'Number'],
                    
                                        <?php
                    
                                        $sql="SELECT ps, count(*) as number FROM residents GROUP BY ps";
                                        $fire=mysqli_query($con,$sql);
                                                while($result = mysqli_fetch_assoc($fire))
                                                echo "['".$result["ps"]."', ".$result["number"]."],";
                                        ?> 
                                        ]);
                    
                                        var options = {
                                        title: 'TOTAL NO. of 4Ps'
                                        };
                    
                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    
                                        chart.draw(data, options);
                                    }
                                    </script>
                                </head>
                                <body>
                                    <div id="piechart" style="width: 600px; height: 400px; "></div>
                                    </body>
                    
                                <!-- /.container-fluid -->
                    
                                </div>
                    

    </div>
</div>

@endsection