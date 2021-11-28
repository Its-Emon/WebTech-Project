<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{ 
	if($_POST['current_password']==$row["password"])
	{

		$password = $row["password"];
  		return;

	}
}

?>

