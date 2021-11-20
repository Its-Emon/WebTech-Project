<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<link rel="stylesheet" href="CSS/style.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['susername']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}

// require 'Controller/editpshowdata.php';
//  require 'Controller/editpstoredata.php';


 require 'Controller/storeupdateprofile.php';
// require 'Controller/storeData.php';

?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
                
  <form method="post"> 
  <label for="sname">Supervisior name:</label>
  <input type="text" id="sname" name="sname" placeholder="ex : Enter Name ">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  
  

  <label for="semail"> Email :</label>
  <input type="text" id="semail" name="semail" placeholder="ex : abc@something.com">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="susername">Username :</label>
  <input type="text" id="susername" name="susername">
  <span class="error"> <?php echo $usernameErr;?></span><hr>

  <label for="spassword">Password :</label>
  <input type="password" id="spassword" name="spassword">
  <span class="error"> <?php echo $passwordErr;?></span><hr>

  <label for="sphone">Mobile number :</label>
  <input type="text" id="sphone" name="sphone" placeholder="ex : 017xxxxxxxxx" pattern="[0-9]{3}[0-9]{8}">
  <span class="error"> <?php echo $mobile_numberErr;?></span><hr>

  <label for="saddress">Address :</label>
  <input type="text" id="saddress" name="saddress"  placeholder="area name,thana,union,district,division">
  <span class="error"> <?php echo $addressErr;?></span><hr>






<!-- <fieldset>
<b>Gender:</b>
  <select name="gender">
  <!- <option></option> -->
  <!-- <option name="gender" <?php //if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male</option>
  <option name="gender" <?php //if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female</option>
  <option name="gender" <?php //if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other</option>
    
</select>
  <span class="error"> <?php //echo $gender;?></span>
 </fieldset><hr> --> 


 <!-- <fieldset>
<b>Blood Group:</b>
  <select name="blood_group">
  <! <option></option> -->
  <!-- <option name="blood_group" <?php // if (isset($blood_group) && $blood_group=="None") echo "checked";?> value="None">None</option>
  <option name="blood_group" <?php //if (isset($blood_group) && $blood_group=="A+") echo "checked";?> value="A+">A+</option>
  <option name="blood_group" <?php //if (isset($blood_group) && $blood_group=="A-") echo "checked";?> value="A-">A-</option>>
  <option name="blood_group" <?php// if (isset($blood_group) && $blood_group=="AB+") echo "checked";?> value="AB+">AB+</option>>
  <option name="blood_group" <?php //if (isset($blood_group) && $blood_group=="AB-") echo "checked";?> value="AB-">AB-</option>>
  <option name="blood_group" <?php //if (isset($blood_group) && $blood_group=="B+") echo "checked";?> value="B+">B+</option>
  <option name="blood_group" <?php// if (isset($blood_group) && $blood_group=="B-") echo "checked";?> value="B-">B-</option>
  <option name="blood_group" <?php ////if (isset($blood_group) && $blood_group=="O+") echo "checked";?> value="O+">O+</option>
  <option name="blood_group" <?php //if (isset($blood_group) && $blood_group=="O-") echo "checked";?> value="O-">O-</option> 
</select>
  <span class="error"> <?php // echo $blood_group;?></span> -->
 <!-- </fieldset><hr> 



 <! <label for="susername">User name :</label>
  <input type="text" id="susername" name="susername" placeholder=" ex : xcj boss">
  <span class="error"> <?php //echo $susernameErr;?></span><hr>


  <label for="password">Password :</label>
  <input type="password" id="password" name="password" placeholder="ex : !@#12345abMaZ">
  <span class="error"> <?php //echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password">
  <span class="error"> <?php //echo $confirm_passwordErr;?></span><hr> -->


<input type="submit" name="submit" value="Submit" class="btn btn-info">
<input type="reset" name="reset" value="Reset" class="btn btn-info">
</form>  
</fieldset>
</div> 
</body>  
</html>  