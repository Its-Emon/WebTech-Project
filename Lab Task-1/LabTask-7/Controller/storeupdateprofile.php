<?php


require_once 'Model/editpjasoncode.php';
require_once 'Model/model.php';

if (isset($_SESSION['susername'])){}
else
  {   $sname = $susername= $semail = $sphone = $saddress = $spassword  ='';}

    $nameErr = $usernameErr= $emailErr = $mobile_numberErr = $addressErr = $passwordErr ='';
    
$flag=1;  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["sname"])) 
  {
    $nameErr = "Name is required";
    $flag=0;
  } 
  else 
  {
    $sname = test_input2($_POST["sname"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$sname) || str_word_count($sname)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $sname="";
      $flag=0;
    }
  }

  if (empty($_POST["susername"])) 
  {
    $usernameErr = "User name is required";
    $flag=0;
  } 
  else 
  {
    $susername = test_input2($_POST["susername"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$susername) || str_word_count($susername)<2 )
    {
      $usernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $susername="";
      $flag=0;
    }
  }

      
  if (empty($_POST["semail"])) 
  {
    $emailErr = "Email is required";
    $flag=0;
  } 
  else 
  {
    $semail = test_input2($_POST["semail"]);
    if (!filter_var($semail, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $semail="";    
      $flag=0;
    }
  }


  if (empty($_POST["sphone"])) 
  {
    $mobile_numberErr = "phone Number is required";
    $flag=0;
  } 
  else 
  {
    $sphone = test_input2($_POST["sphone"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['sphone']))
    {
      $mobile_numberErr = "Invalid Number";
      $sphone="";
      $flag=0;
    }
  }

  if (empty($_POST["saddress"])) 
  {
    $addressErr = " location is required";
    $flag=0;
  } 
  else 
  {
    $saddress = test_input2($_POST["saddress"]);
  }



  if (empty($_POST["spassword"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $spassword = test_input2($_POST["spassword"]);
    if (strlen($spassword) < 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $spassword="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$spassword)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $spassword ="";
      $flag=0;
    }
  }

  // if (empty($_POST["confirm_password"])) 
  // {
  //   $confirm_passwordErr = "Confirm Password is required";
  //   $flag=0;
  // } 
  // else 
  // {
  //   $confirm_password = test_input2($_POST["confirm_password"]);
  //   if($confirm_password!=$password)
  //   {
  //     $confirm_passwordErr = "Password dosen't match";
  //     $confirm_password="";
  //     $flag=0;
  //   }
  }

  // if(empty($_POST["gender"]))  
  // {  
  //   $genderErr = "please, Select gender"; 
  //   $flag=0; 
  // }
  // else 
  // {
  //   $gender = test_input2($_POST["gender"]);
  // } 






  // if(empty($_POST["blood_group"]))  
  // {  
  //   $blood_groupErr = "please, Select blood group "; 
  //   $flag=0; 
  // }
  // else 
  // {
  //   $blood_group = test_input2($_POST["blood_group"]);
  // } 





  
  // if (empty($_POST["registrationid"])) 
  // {
  //   $registrationidErr = "Regestration Id is required";
  //   $flag=0;
  // } 
  // else 
  // {
  //   $registrationid = test_input2($_POST["registrationid"]);
  //   if(!preg_match('/^[0-9]*$/', $_POST['registrationid']))
  //   {
  //     $registrationidErr = " Invalid Rgestreation Id ";
  //     $registrationid="";
  //     $flag=0;
  //   }
  // }



  // if ($flag==1) 
  // {
  //   if(isset($_POST["submit"]) )  
  //   {
  //     updateprofile_from_jason($_SESSION['susername'],$_SESSION['spassword']);

  //   }  
  // } 
  
  if ($flag==1) 
  {
    if(isset($_POST["submit"]) )  
    {
      updateprofile_from_jason($_SESSION['susername'],$_SESSION['spassword']);
      
// if(isset($_POST["submit"]) && isset($_SESSION['name']))
//     {
      $data['sname'] = $_POST['sname'];
      $data['semail'] = $_POST['semail'];
      $data['susername'] = $_POST['susername'];
      $data['spassword'] = $_POST['spassword'];
      $data['sphone'] = $_POST['sphone'];
      $data['saddress'] = $_POST['saddress'];
     

      // $stmt->execute([$data['docid'], $data['dname'], $data['demail'] $data['dusername'], $data['dpassword'],
      // $data['dspec'],$data['daddress'],$data['dphone'], $data['dgender'],$data['dblood_group'], $id]);

     updateData($_SESSION['sid'], $data);



//       if (addData( $data)) 
//       {
//         echo 'Successfully Updated';
//       }
//     }
    }  
    
    //header("location:../login.php");
  } 
// } 
  
function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  
?>