<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<link rel="stylesheet" href="CSS/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>
<body>   
<div class="container" style="width:1200px;">              
<div class="table-responsive"> 
<table class="table table-bordered">  
<tr>  
<th>Name</th> 
<th>phone_number</th> 
<th>E-mail</th>  
<th>User name</th>   
<th>Gender</th>   
<th>Date of birth</th> 
<th>Booking date</th>
<th>Seats books</th>
<th>Hospital name</th>
<th>Approval</th>  
</tr>  
<?php 
session_start();
if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}
$apprval_request="yes"  ;    
$data = file_get_contents("Json/approved_data.json");  
$data = json_decode($data, true);  
foreach($data as $row)  
{  
    echo '<tr>
<td>'.$row["name"].'</td>
<td>'.$row["phone_number"].'</td>
<td>'.$row["e-mail"].'</td>
<td>'.$row["username"].'</td>
<td>'.$row["gender"].'</td>
<td>'.$row["dob"].'</td>
<td>'.$row["booking_date"].'</td>
<td>'.$row["seats_books"].'</td>
<td>'.$row["Hospital_name"].'</td>
<td>Request sent </td> 
    </tr><br><br>';
}    
?>
</table> 
</div>
</div>              
</body>
</html>