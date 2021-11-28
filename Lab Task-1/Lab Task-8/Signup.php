<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="CSS/style.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/style.js"></script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['susername'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

 
<div class="div">
<fieldset>
<legend>REGISTRATION</legend>                 
  <form method="post" name="form"> 
  <label for="sname">Name :</label>
  <input type="text" id="sname" name="sname" onkeyup="checkName()" onblur="checkName()">
  <span class="error" id="nameErr"> <?php echo $nameErr;?></span><hr>

  <label for="semail">Email :</label>
  <input type="text" id="semail" name="semail" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>

  <label for="susername">Username :</label>
  <input type="text" id="susername" name="susername" onkeyup="checkusername()" onblur="checkusername()">
  <span class="error" id="usernameErr"> <?php echo $usernameErr;?></span><hr>

  <label for="spassword">Password :</label>
  <input type="password" id="spassword" name="spassword" onkeyup="checkPassword()" onblur="checkPassword()">
  <span class="error" id="passwordErr"> <?php echo $passwordErr;?></span><hr>

  <label for="sphone">Mobile Number :</label>
  <input type="tel" id="sphone" name="sphone" pattern="[0-9]{3}[0-9]{8}" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()">
  <span class="error" id="mobile_numberErr"> <?php echo $mobile_numberErr;?></span><hr>

  <label for="saddress">Address :</label>
  <input type="text" id="saddress" name="saddress" onkeyup="checkaddress()" onblur="checkaddress()">
  <span class="error" id="addressErr"> <?php echo $addressErr;?></span><hr>
<fieldset>
<legend> Gender</legend> 
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span>
 </fieldset><hr>

<fieldset>
  <legend>Date of Birthday</legend>
  <input type="date" name="dob" id="dob" onkeyup="checkhedob()" onblur="checkhedob()"> 
  <span class="error" id="dobErr"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit" class="btn btn-info">
<br>
<br>
<input type="reset" name="reset" value="Reset" class="btn btn-info">
<br>
<br>
<br>
<br>
</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  