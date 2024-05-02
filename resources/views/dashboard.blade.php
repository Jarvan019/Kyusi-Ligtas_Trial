<<<<<<< HEAD
@extends('sidebar')

@extends('layout')



@section('content')

@endsection


=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Sidebar with Top Navigation Bar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .topnav {
            background-color: #333;
            color: #fff;
            overflow: hidden;
            position: fixed;
            width: 100%;
            z-index: 100; /* Set z-index higher than sidebar to keep it on top */
            padding-left: 90px; /* Adjust the padding to move the top nav to the left */
        }

        .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 15px 20px;
            text-decoration: none;
        }

        .topnav a:hover {
            background-color: #555; /* Change color on hover */
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
            margin-left: 110px; /* Adjust this margin to match the width of the sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="topnav">

     <a href="/GeoMaps">Maps</a>
        <a href="/bar-chart">charts</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
       <a href="#" style = "margin-left:950px;">logout</a>
    </div>

    

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
<main>

    <div class="content">
        &nbsp; &nbsp; &nbsp;
       <p> hello world </p>
    </div>

    </main>
</body>
</html>
>>>>>>> 717022a12a19712ae22f37daf090252e452e14a1
