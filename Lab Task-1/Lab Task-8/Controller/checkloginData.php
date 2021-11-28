<?php 
require 'Model/jsonCode.php';
require_once 'Model/model.php';

$data=getID($_POST['susername'],$_POST['spassword']);
echo"hello boss #";
//echo $data[5];

	if ($_POST['susername']==$data[3] && $_POST['spassword']==$data[4]) 
	{
		$susername =  test_input($data[3]);//dusername ->3 index in data base
  		$spassword =  test_input($data[4]);//password ->4
  		return;
	}

?>