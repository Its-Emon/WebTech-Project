<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['susername'])){require 'Bar/top1.php';}
else{require 'Bar/top.php';}
 ?>
<div class="div">
<img class="p" src="Uploads/Digital_medical.jpg" alt="Profile
		Picture">
</div>
<h1 class="welcome, div" style= "color : DeepSkyBlue">Aim for improving the process quality and ensuring patient safety</h1>
<?php require 'Bar/footer.php';?>
</body>
</html>
