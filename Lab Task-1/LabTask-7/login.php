<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script> 
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['susername'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'controller/loginCheck.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>LOGIN</legend>

  <fieldset>
  <legend> Category</legend> 
  <input type="radio" id="doctor" name="category" value="Doctor"<?php if(isset($_COOKIE['category']) && $_COOKIE['category']=="Doctor"){echo "checked";} ?>>
  <label for="doctor">Doctor</label>
  <input type="radio" id="patient" name="category" value="Patient"<?php if(isset($_COOKIE['category']) && $_COOKIE['category']=="Patient"){echo "checked";} ?>>
  <label for="patient">Patient</label> 
  <input type="radio" id="supervisor" name="category" value="Supervisor"<?php if(isset($_COOKIE['category']) && $_COOKIE['category']=="Supervisor"){echo "checked";} ?>>
  <label for="supervisor">Supervisor </label>  
  <span class="error"> <?php echo $categoryErr;?></span>
 </fieldset><hr>

  <label for="susername">Username :</label>
  <input type="text" id="susername" name="susername" value="<?php if(isset($_COOKIE['susername'])){echo $_COOKIE['susername'];} ?>">
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>

  <label for="spassword">Password :</label>
  <input type="spassword" id="spassword" name="spassword" value="<?php if(isset($_COOKIE['spassword'])){echo $_COOKIE['spassword'];} ?>">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit" class="btn btn-info"><br> <br>
  <a href="forgotPassword.php" class="btn btn-info">Forgot Password?</a>

 </fieldset>
</form> 
</div>

<?php require 'Bar/footer.php';?>

</body>
</html>