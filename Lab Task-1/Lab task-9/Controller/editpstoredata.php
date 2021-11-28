<?php

require_once 'Model/editpjasoncode.php';

if (isset($_SESSION['username'])){}
else
  {  $name = $username= $email = $phone_number =  $location = $password = $confirm_password = $oxygenav = '';}

$nameErr = $usernameErr= $emailErr = $phone_numberErr = $locationErr = $passwordErr = $confirm_passwordErr = $oxygenavErr =  '';
$flag=1;  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = "Hospital name is required";
    $flag=0;
  } 
  else 
  {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $name="";
      $flag=0;
    }
  }

  if (empty($_POST["username"])) 
  {
    $usernameErr = "Hospital name is required";
    $flag=0;
  } 
  else 
  {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$username) || str_word_count($username)<2 )
    {
      $usernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $username="";
      $flag=0;
    }
  }

      
  if (empty($_POST["hemail"])) 
  {
    $emailErr = "Hospital is required";
    $flag=0;
  } 
  else 
  {
    $email = test_input($_POST["hemail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag=0;
    }
  }


  if (empty($_POST["hphone"])) 
  {
    $phone_numberErr = "Hospital Number is required";
    $flag=0;
  } 
  else 
  {
    $phone_number = test_input($_POST["hphone"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['hphone']))
    {
      $phone_numberErr = "Invalid Number";
      $phone_number="";
      $flag=0;
    }
  }

  if (empty($_POST["hlocation"])) 
  {
    $locationErr = "Hospital location is required";
    $flag=0;
  } 
  else 
  {
    $location = test_input($_POST["hlocation"]);
  }

  if (empty($_POST["hpassword"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $password = test_input($_POST["hpassword"]);
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

  if(empty($_POST["oxygenav"]))  
  {  
    $oxygenavErr = "Select oxygen avalability"; 
    $flag=0; 
  }
  else 
  {
    $oxygenav = test_input($_POST["oxygenav"]);
  } 
  if ($flag==1) 
  {
    if(isset($_POST["submit"]))  
    {
      writetojason();
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