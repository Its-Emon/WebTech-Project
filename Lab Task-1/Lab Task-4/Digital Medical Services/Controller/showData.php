<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{
	if($_SESSION['username']==$row["username"])
	{
		$name = $row["name"];
		$username = $row["username"];
  		$email = $row["email"];
 		$phone_number = $row["phone_number"];
  		$location = $row["location"];
  		$password = $row["password"];
  		$confirm_password = $row["confirm_password"];
	    // $gender = $row["gender"];
	    $registrationid = $row["registrationid"];
		$blood_group = $row["blood_group"];
		// $specialist = $row["specialist"];
  		return;
	}
}

?>

