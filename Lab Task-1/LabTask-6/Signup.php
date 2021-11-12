<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="CSS/style.css"> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['username'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

 
<div class="div">
<fieldset>
<legend>REGISTRATION</legend>                 
  <form method="post"> 
  <label for="sname">Name :</label>
  <input type="text" id="sname" name="sname">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  <label for="semail">Email :</label>
  <input type="text" id="semail" name="semail">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="susername">Username :</label>
  <input type="text" id="susername" name="susername">
  <span class="error"> <?php echo $usernameErr;?></span><hr>

  <label for="spassword">Password :</label>
  <input type="password" id="spassword" name="spassword">
  <span class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="sphone">Mobile Number :</label>
  <input type="tel" id="sphone" name="sphone" pattern="[0-9]{3}[0-9]{8}">
  <span class="error"> <?php echo $mobile_numberErr;?></span><hr>

  <label for="saddress">Address :</label>
  <input type="text" id="saddress" name="saddress">
  <span class="error"> <?php echo $addressErr;?></span><hr>

  
<!-- 
  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password">
  <span class="error"> <?php //echo $confirm_passwordErr;?></span><hr> -->

<!-- <fieldset>
  <legend>Shift</legend>
  <input type="radio" id="day" name="shift" value="Day (8AM - 4PM)">
  <label for="day">Day</label>
  <input type="radio" id="night" name="shift" value="Night (4PM -12PM)">
    <label for="night">Night</label>
  <!- <span class="error"> <?php //echo $shiftErr;?></span> -->
  <!-- </fieldset><hr> -->

<!-- <fieldset>
<legend> Category</legend> 
  <input type="radio" id="doctor" name="category" value="Doctor">
  <label for="doctor">Doctor</label>
  <input type="radio" id="patient" name="category" value="Patient">
  <label for="patient">Patient</label> 
  <input type="radio" id="receptionist" name="category" value="Receptionist">
  <label for="receptionist">Receptionist </label>  
  <span class="error"> <?php //echo $categoryErr;?></span>
 </fieldset><hr> -->

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
  <input type="date" name="dob"> 
  <span class="error"> <?php echo $dobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  