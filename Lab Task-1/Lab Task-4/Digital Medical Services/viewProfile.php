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

if (isset($_SESSION['username'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend>PROFILE</legend>

<div class="justLeft">
  <p>Name                      :   <?php echo $name ?></p><hr>
  <p>Regestration ID           :   <?php echo $registrationid ?></p><hr>
  <p>User name                 :   <?php echo $username ?></p><hr>
  <p>Password                  :   <?php echo $password ?></p><hr>
  <p>Email                     :   <?php echo $email ?></p><hr>
  <p>phone number              :   <?php echo $phone_number ?></p><hr>
  <p>Address                   :   <?php echo $location ?></p><hr>
  <!-- <p>Gender                    :   <?php //echo $gender ?></p><hr> -->
  <p>Blood Group               :   <?php echo $blood_group ?></p><hr>
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




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<a href="editProfile.php">Edit Profile</a>
<a href="changePassword.php">Change Password</a>

</fieldset> 
</div>

</body>  
</html> 