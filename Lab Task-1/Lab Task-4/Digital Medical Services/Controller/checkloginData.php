<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{ 
	if ($_POST['username']==$row["username"]) 
	{
		$username = $row["username"];
  		$password = $row["password"];
  		return;
	}
}
?>