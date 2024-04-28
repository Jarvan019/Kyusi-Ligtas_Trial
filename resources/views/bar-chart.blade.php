<!DOCTYPE html>
<html lang="en">
<head>
<title>Bar Chart Example</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
body {
 display: flex;
 }

 .sidebar {
            position: fixed;
            left: 0;
            top: 0px; /* Adjust to match the height of the top navigation bar */
            bottom: 0;
            width: 110px;
            background-color: #333;
            color: #fff;
            padding-top: 60px;
            margin-top: 0px;
            padding-bottom: 0px;
        }

        .sidebar-header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 0px;
            line-height: 0px;
            margin-top:10px;
            background-color: #222;
            text-align: center;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav li {
            padding: 10px;
        }

        .sidebar-nav li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar-nav li a:hover {
            background-color: #555; /* Change color on hover */
        }


 .content {
flex: 1;
padding: 20px;
 }

 .canvas-container {
width: 80%;
 margin: auto;
 }

 </style>
</head>
<body>
 <div class="sidebar">
        <div class="sidebar-header">
            Sidebar
        </div>
        <ul class="sidebar-nav">
            <li><a href="{{ url('views/GeoMaps.blade.php') }}">Maps</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Maps</a></li>
        </ul>
    </div>

 <div class="content">
 <div class="canvas-container">
 <canvas id="barChart"></canvas>
</div>

<script>
var ctx = document.getElementById('barChart').getContext('2d');
 var myChart = new Chart(ctx, {
type: 'bar',
 data: {
 labels: @json($data['labels']),
 datasets: [{
 label: 'Data',
data: @json($data['data']),
backgroundColor: 'rgba(75, 192, 192, 0.2)',
 borderColor: 'rgba(75, 192, 192, 1)',
borderWidth: 1
 }]
 },
options: {
 scales: {
 y: {
 beginAtZero: true
}
}
}
 });
</script>
 </div>
</body>
</html>