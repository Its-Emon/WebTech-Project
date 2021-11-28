<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{
	if($_SESSION['username']==$row["username"])
	{
		$name = $row["name"];
		$username = $row["username"];
  		$email = $row["hemail"];
 		$phone_number = $row["hphone"];
  		$location = $row["hlocation"];
  		$password = $row["hpassword"];
  		$oxyav = $row["oxygenav"];
  		return;
	}
}

?>