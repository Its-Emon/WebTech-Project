<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['susername'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend>PROFILE</legend>

<div class="justLeft">
  <p>Name                      :   <?php echo $sname ?></p><hr>
  <p>Email                     :   <?php echo $semail ?></p><hr>
  <p>Username                 :   <?php echo $susername ?></p><hr>
  <p>Password                  :   <?php echo $spassword ?></p><hr>
  <p>phoneNumber              :   <?php echo $sphone?></p><hr>
  <p>Address                   :   <?php echo $saddress ?></p><hr>
  <!-- <p>Gender                    :   <?php //echo $gender ?></p><hr> -->
  <!-- <p>Blood Group               :   <?php //echo $blood_group ?></p><hr> -->
  <!-- <p>Specialist  Of            :   <?php //echo $specialist ?></p><hr> -->

</div> 

<div class="justRight">
  <img class="proPic" 
  src="Uploads/<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "pic.png";
  }
  ?>" alt="Profile Picture"> 



  <!-- <form action="changeProfilePicture.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form> -->

  <div class="textCenter"> <a href="changeProfilePicture.php" >Change Profile Picture</a>
  </div>
</div>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="editProfile.php">Edit Profile</a>
<a href="changePassword.php">Change Password</a>

</fieldset> 
</div>

</body>  
</html> 