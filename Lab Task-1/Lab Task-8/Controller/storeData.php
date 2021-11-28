<?php

require_once 'Model/model.php';

if (isset($_SESSION['username'])){}
else
  {  $sname = $semail = $susername = $sphone = $saddress = $spassword = $gender = $dob = '';}

$nameErr = $emailErr = $usernameErr = $mobile_numberErr =$addressErr = $passwordErr = $genderErr = $dobErr = '';
$flag=1;
$update="on";  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["sname"])) 
  {
    $nameErr = "Name is required";
    $flag=0;
    $update="off"; 
  } 
  else 
  {
    $sname = test_input($_POST["sname"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$sname) || str_word_count($sname)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $sname="";
      $flag=0;
      $update="off";
    }
  }

      
  if (empty($_POST["semail"])) 
  {
    $emailErr = "Email is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $email = test_input($_POST["semail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag=0;
      $update="off";
    }
  }


  if (empty($_POST["sphone"])) 
  {
    $mobile_numberErr = "Mobile Number is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $mobile_number = test_input($_POST["sphone"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['sphone']))
    {
      $mobile_numberErr = "Invalid Number";
      $mobile_number="";
      $flag=0;
      $update="off";
    }
  }

  if (empty($_POST["susername"])) 
  {
    $usernameErr = " Username is  Required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $shift = test_input($_POST["susername"]);
  }

  if (empty($_POST["saddress"])) 
  {
    $addressErr = "Address is required";
    $flag=0;
    $update="off";
  } 
  else 
  {
    $address = test_input($_POST["saddress"]);
  }

  if (empty($_POST["spassword"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $password = test_input($_POST["spassword"]);
    if (strlen($password) < 8 )
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

  // if (empty($_POST["confirm_password"])) 
  // {
  //   $confirm_passwordErr = "Password is required";
  //   $flag=0;
  // } 
  // else 
  // {
  //   $confirm_password = test_input($_POST["confirm_password"]);
  //   if($confirm_password!=$password)
  //   {
  //     $confirm_passwordErr = "Password dosen't match";
  //     $confirm_password="";
  //     $flag=0;
  //   }
  // }

  // if(empty($_POST["gender"]))  
  // {  
  //   $genderErr = "Select Gender"; 
  //   $flag=0; 
  // }
  // else 
  // {
  //   $gender = test_input($_POST["gender"]);
  // } 

  // if(empty($_POST["category"]))  
  // {  
  //   $categoryErr = "Select category"; 
  //   $flag=0; 
  // }
  // else 
  // {
  //   $category = test_input($_POST["category"]);
  // } 

  // if(empty($_POST["dob"]))  
  // {  
  //   $dobErr = "Enter Date of Birth";
  //   $flag=0;  
  // }
  // else 
  // {
  //   $dob = test_input($_POST["dob"]);
  //   if (time() < strtotime('+18 years', strtotime($dob))) 
  //   {
  //     $dobErr = 'Minimum 18+';
  //     $flag=0;  
  //     }
  // }

  if ($flag==1) 
  {
    if(isset($_POST["submit"]))  
    {


      $data['sname'] = $_POST['sname'];
      $data['semail'] = $_POST['semail'];
      $data['susername'] = $_POST['susername'];
      $data['spassword'] = $_POST['spassword'];
      $data['sphone'] = $_POST['sphone'];
      $data['saddress'] = $_POST['saddress'];
      // $encrypted_password = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 10]);
      if(addData($data))
      {
        echo 'Registration Completed';
      }
    }  
  }
  // if($update=="on")
  // {
  //   if(isset($_POST["submit"]) && isset($_SESSION['name']))
  //   {
  //     $data['sname'] = $_POST['sname'];
  //     $data['semail'] = $_POST['semail'];
  //     $data['susername'] = $_POST['susername'];
  //     $data['spassword'] = $_POST['spassword'];
  //     $data['sphone'] = $_POST['sphone'];
  //     $data['saddress'] = $_POST['saddress'];
  //     //$data['shift'] = $_POST['shift'];

  //     if (updateData($_SESSION['id'], $data)) 
  //     {
  //       echo 'Successfully Updated';
  //     }
  //   }
 // }    
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>