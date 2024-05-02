<!DOCTYPE html>
<<<<<<< HEAD
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
   
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.64880000, lng: 121.05090000},
          zoom: 8
        });
      }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js"
    async defer></script>
  </body>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Map with Side and Top Navigation Bar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
            margin-top:15px;
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
        #map {
          margin-left:110px;
          margin-top:0px;
          padding-top:0px;
            height: 100%;
            width: 92.9%;
            position: absolute;

        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 60%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        SidebarLOGO
    </div>
    <ul class="sidebar-nav">
        <li> <a href="/dashboard">Dashboard</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Maps</a></li>
    </ul>
</div>

<div id="map"></div>

<script>
  var map;
  var markers = [];

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 14.64880000, lng: 121.05090000},
      zoom: 8
    });
  }

  function addMarker() {
    var marker = new google.maps.Marker({
      position: {lat: 14.64880000, lng: 121.05090000}, // Replace with the desired location
      map: map
    });
    markers.push(marker);
  }
</script>
<script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js"
async defer></script>
</body>
>>>>>>> 717022a12a19712ae22f37daf090252e452e14a1
</html>