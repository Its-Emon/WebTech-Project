<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<header>
<div class="left">
	<img class="logo" src="Uploads/Digital_medical.jpg" alt="Profile Picture"> 
</div>	
<br><br>
<div class="right">
	<?php echo "Logged in as ".$_SESSION['susername']."||"; ?>
	<a href="welcome.php">Home</a>
	<a href="viewProfile.php">View Profile</a>
	<a href="Controller/logout.php">Logout</a>
</div>
</header> 
<br><br>
<hr>

</body>
</html>