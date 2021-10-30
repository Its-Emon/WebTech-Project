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
	<?php echo "Logged in as ".$_SESSION['username']."||"; ?>
    <a href="welcome.php">Home</a><?php echo "||" ?>
	<a href="viewProfile.php">View Profile</a><?php echo "||" ?>
	<a href="patient_booked.php">patient_booked</a><?php echo "||" ?>
	<a href="Patient_booking.php">Patient_booking</a><?php echo "||" ?>
	<a href="approved_booking.php">approved_booking</a><?php echo "||" ?>
	<a href="patient_appiontment.php">Patient_appiontment</a><?php echo "||" ?>
	<a href="doctor_list.php">Doctor list</a><?php echo "||" ?>
	<a href="approved_appointment.php">Approved appointment</a><?php echo "||" ?>
	<a href="Controller/logout.php">Logout</a>

</div>
</header> 
<br><br>
<hr>

</body>
</html>