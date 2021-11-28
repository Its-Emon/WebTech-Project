<?php 
$hemailErr = "";
$hemail = $msg ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  require 'Controller/checkEmail.php';
  if (!empty($_POST["hemail"]) && $_POST['hemail']==$hemail) 
  {
    $msg ="<h1>We will sent you an Email</h1>";
  }
  else if (empty($_POST["hemail"])) 
  {
    $hemailErr = "Email is required";
  }
  else 
  {
    $hemail = test_input($_POST["email"]);
    if (!filter_var($hemail, FILTER_VALIDATE_EMAIL)) 
    {
      $hemailErr = "Invalid email format";
      $hemail="";
    }
    else
    {
      $hemailErr ="Invalid Email";
      $hemail=""; 
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