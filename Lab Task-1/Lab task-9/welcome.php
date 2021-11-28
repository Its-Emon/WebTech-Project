<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
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
