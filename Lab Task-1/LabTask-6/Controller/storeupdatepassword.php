<?php

require_once 'Model/jsonCode.php';

if (isset($_SESSION['username'])){}
else
  {   $newpassword = $confirm_password =$oldpassword = '';}

$nameErr = $usernameErr= $emailErr = $phone_numberErr = $locationErr = $passwordErr = $confirm_passwordErr = $oxygenavErr =  '';
$flag=1;  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  
    if (empty($_POST["oldhpassword"])) 
    {
      $passwordErr = "Password is required";
      $flag=0;
    } 
    else 
    {
      $password = test_input($_POST["oldhpassword"]);
      if (strlen($password) < 8)
      {
        $passwordErr = "Must be atleast 8 characters";
        $password="";
        $flag=0;
      }
      else if (!preg_match("/[!,@,#,$,%,^,&]/",$password)) 
      {
        $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
        $password ="";
        $flag=0;
      }
    }
  

  if (empty($_POST["hpassword"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $newpassword = test_input($_POST["hpassword"]);
    if (strlen($password) < 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $newpassword="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$newpassword)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $newpassword ="";
      $flag=0;
    }
  }

  if (empty($_POST["hconfirm_password"])) 
  {
    $confirm_passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $confirm_password = test_input($_POST["hconfirm_password"]);
    if($confirm_password!=$password)
    {
      $confirm_passwordErr = "Password dosen't match";
      $confirm_password="";
      $flag=0;
    }
  }


  if ($flag==1) 
  {
    if(isset($_POST["submit"]) )  
    {
      writeToJson();
    }  
  }    
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>