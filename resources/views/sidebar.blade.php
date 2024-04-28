<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Static Sidebar</title>
</head>


<style>
  body {
  margin: 0;
  padding: 1000;
  font-family: Arial, sans-serif;
}

.sidebar {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  width: 110px;
  background-color: #333;
  color: #fff;
  padding-top: 60px;
  margin-top: 49px;
}

.sidebar-header {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 60px;
  line-height: 60px;
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

.content {
  margin-left: 200px; /* Adjust this margin to match the width of the sidebar */
  padding: 20px;
}
  </style>

<body>
  <div>
    <div>
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
  
  
  </div>
</div>
</div>
</body>
</html>
