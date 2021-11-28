<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<link rel="stylesheet" href="CSS/style.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
<script src="JS/style.js"></script>
<script src="JS/duplication.js"></script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['susername']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}

 require 'Controller/storeupdateprofile.php';

?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
                
  <form method="post" name="form"> 
  <label for="sname">Supervisior name:</label>
  <input type="text" id="sname" name="sname" placeholder="ex : Enter Name " onkeyup="checkName()" onblur="checkName()">
  <span class="error" id="nameErr"> <?php echo $nameErr;?></span><hr>

  <label for="semail"> Email :</label>
  <input type="text" id="semail" name="semail" placeholder="ex : abc@something.com" onkeyup="showUser(this.value)" onblur="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>
  <div id="txtHint"><b>Person email info will be listed here...</b></div>

  <label for="susername">Username :</label>
  <input type="text" id="susername" name="susername" onkeyup="showUser_name(this.value)" onblur="checkusername()">
  <span class="error" id="usernameErr"> <?php echo $usernameErr;?></span><hr>
  <div id="txtHint_2"><b>Person username info will be listed here...</b></div>

  <label for="spassword">Password :</label>
  <input type="password" id="spassword" name="spassword" onkeyup="checkPassword()" onblur="checkPassword()">
  <span class="error" id="passwordErr"> <?php echo $passwordErr;?></span><hr>

  <label for="sphone">Mobile number :</label>
  <input type="text" id="sphone" name="sphone" placeholder="ex : 017xxxxxxxxx" pattern="[0-9]{3}[0-9]{8}" onkeyup="showUser_phonenumber(this.value)" onblur="checkPhoneNumber()">
  <span class="error" id="mobile_numberErr"> <?php echo $mobile_numberErr;?></span><hr>
  <div id="txtHint_3"><b>Person phone number will be listed here...</b></div>

  <label for="saddress">Address :</label>
  <input type="text" id="saddress" name="saddress"  placeholder="area name,thana,union,district,division" onkeyup="checkaddress()" onblur="checkaddress()">
  <span class="error" id="addressErr"> <?php echo $addressErr;?></span><hr>


<input type="submit" name="submit" value="Submit" class="btn btn-info">
<input type="reset" name="reset" value="Reset" class="btn btn-info">
</form>  
</fieldset>
</div> 
</body>  
</html>  