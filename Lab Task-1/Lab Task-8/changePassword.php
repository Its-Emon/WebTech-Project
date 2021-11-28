<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/style.js"></script>
</head>
<body>
 <?php 

session_start();

if (isset($_SESSION['susername'])){ require 'Bar/top1.php';}
else{header("location:Login.php");}

require 'Controller/confirmPaswordChange.php';
 ?>


<div class="div">
 <form method="post" name="form"> 
 <fieldset>
  <legend>CHANGE PASSWORD</legend>
  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()">
  <span class="error" id="current_passwordErr"> <?php echo $current_passwordErr;?></span><hr>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="new_password" onkeyup="checkNewPassword()" onblur="checkNewPassword()">
  <span class="error" id="new_passwordErr"> <?php echo $new_passwordErr;?></span><hr>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()">
  <span class="error" id="retype_new_passwordErr"> <?php echo $retype_new_passwordErr;?></span><hr>

  <input type="submit" value="Submit" class="btn btn-info">

 </fieldset>
</form>
<?php

?>
</div> 
<?php require 'Bar/footer.php';?>
</body>
</html>