<?php
require 'Model/model.php';
$usernameErr = $passwordErr = $categoryErr = "";
$susername = $spassword = $category = "";

// $usernameErr = $passwordErr = '';
// $username = $password =  '';
if (isset($_POST['susername'])) 
{
  require 'Controller/checkloginData.php';
	if ($_POST['susername']==$susername && $_POST['spassword']==$spassword) 
  {
		$_SESSION['susername'] = $susername;
    $_SESSION['spassword'] = $spassword;
    //$_SESSION['name'] ="";

   
	

      $fetch = getID(	$_SESSION['susername'],$_SESSION['spassword']);

        $_SESSION['sid']= test_input($fetch[0]);
        
         $_SESSION['pic'] = test_input($fetch[7]);
      


    }

		header("location:welcome.php");
	}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["category"])) 
  {
    $categoryErr = "Category required";
  } 
  // else if($_POST['category']!=$category) 
  // {
  //   $categoryErr = "Category Invalid "; 
  // }

  if (empty($_POST["susername"])) 
  {
    $usernameErr = "susername is required";
  } 
  else 
  {
    $susername = test_input($_POST["susername"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$susername))
    {
      $usernameErr = "Only letters, white space, period, dash allowed";
      $susername="";
    }
    else if (str_word_count($susername)<2 ) 
    {
      $usernameErr = "Minimum two words";
      $susername="";
    } 
    else if($_POST['susername']!=$susername) 
    {
      $usernameErr = "susername Invalid "; 
      $susername="";
    }
  }

  if (empty($_POST["spassword"])) 
  {
    $passwordErr = "spassword is required";
  } 
  else 
  {
    $spassword = test_input($_POST["spassword"]);
    if (strlen($spassword) <= 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $spassword="";
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$spassword)) 
    {
      $passwordErr = "spassword must contain at least one of the special character (!,@,#,$,%,^,&)";
      $spassword ="";
    } 
    else if($_POST['spassword']!=$spassword) 
    {
      $passwordErr = "spassword Invalid "; 
      $spassword ="";
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>