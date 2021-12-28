<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://www.google.com/jsapi"></script>
    <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
  
<h2 class="text-center">How to Implement Google Charts in Laravel 8?</h2>
  
<div id="chartDiv" class="pie-chart"></div>
  
<div class="text-center">
    <h2>nicesnippets.com</h2>
</div>
  
<script type="text/javascript">
    var subjectData = @json($subjectData);
    window.onload = function() {
        google.load("visualization", "1.1", {
            packages: ["corechart"],
            callback: 'drawChart'
        });
    };
  
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pizza');
        data.addColumn('number', 'Populartiy');
        data.addRows(subjectData);
  
        var options = {
            pieHole: 0.4,
            title: 'Popularity of Types of Framework',
        };
  
        var chart = new google.visualization.PieChart(document.getElementById('chartDiv'));
        chart.draw(data, options);
    }

</script>
</body>
</html>