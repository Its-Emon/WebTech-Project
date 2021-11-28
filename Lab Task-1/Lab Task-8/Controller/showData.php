<?php 
//require 'Model/jsonCode.php';
require 'Model/model.php';
//$data=readFromJson("Json/data.json");
$data=showData($_SESSION['sid']);


	
		$sname = $data['sname'];
		$susername = $data['susername'];
  		$semail =$data['semail'];
 		$sphone = $data['sphone'];
  		$saddress = $data['saddress'];
  		$spassword = $data['spassword'];
  		//$confirm_password = $data['confirm_password'];
	    // $gender = $data['dgender'];
	    // $registrationid = $data['docid'];
		// $blood_group = $data['dblood_group'];
		// $specialist = $data['dspec'];
  		return;
	


?>