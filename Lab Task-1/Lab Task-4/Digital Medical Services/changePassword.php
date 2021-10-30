<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['username'])){ require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/confirmPaswordChange.php';
 ?>


<div class="div">
<form method="post">
 <fieldset>
  <legend>CHANGE PASSWORD</legend>
 
  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password">

  <br><br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password">

  <br><br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password">

  <br><br>

  <hr>

  <input type="submit" value="Submit" class="btn btn-info">

 </fieldset>
</form>
<?php

?>
</div> 
<?php require 'Bar/footer.php';?>
</body>
</html>