@extends('layouts.main')


@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Residents -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Number of Resident</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$resident}}</div>
                                        </div>
                                        <div class="col-auto">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(auth()->user()->is_admin == 1 )
                        <!-- Total Users -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Number of Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-User fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        @endif
                        

                        
                       
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class=" col-md-6">


                            <!---- Total number of brgy pie ---->    
                        
                            <?php
                            $con = mysqli_connect("localhost","root","","system");
                            ?>

                                <div class="card border-left-primary shadow h-100 py-2">

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
                                        title: 'TOTAL NO. PER BARANGAY'
                                    };
                
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                
                                    chart.draw(data, options);
                                }
                                </script>
                            </head>
                                <body>
                                    <div id="piechart" style="width: 490px; height: 300px; "></div>
                                </body>
                        <div>


                        


                    </div>        
            </div>
            <!-- End of Main Content -->

     

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <div class="card-body">
        <div class="chart-area">
            <canvas id = "myAreaChart"></canvas>
            </div>
        </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
@endsection