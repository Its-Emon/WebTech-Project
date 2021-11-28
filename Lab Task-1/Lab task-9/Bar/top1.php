<div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary padding" style="padding: 15px 15px">
      <div class="col-xl-5 col-lg-2 col-12"><img class="logo" style="width: 120px" src="Uploads/Digital_medical.jpg" alt="Profile Picture">
	  </div>
  <div class="col-xl-7 col-lg-10 col-12">
    <div class="navbar-nav">
<div class="right">
	<?php echo "Logged in as "."<p style='color:Tomato;'>".$_SESSION['susername']." </p> "; ?><br>
	
</div>
</div>
</nav>
</div>
</div>
</div>
</div>

<br><br>
<hr>

 <!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.sidenav {
  height: 100%;
  width: 175px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}

.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

.content {
  margin-left: 200px;
  padding-left: 20px;
}
</style>
</head>
<body>

<div class="sidenav">
<a class="nav-link"  href="welcome.php" style="color:Tomato;">Home </a>
	<a class="nav-link" href="viewProfile.php"  style="color:Tomato;" >View Profile</a>
	<a class="nav-link" href="Controller/logout.php" style="color:Tomato;">Logout </a>
</div>

</body>
</html>
</html>