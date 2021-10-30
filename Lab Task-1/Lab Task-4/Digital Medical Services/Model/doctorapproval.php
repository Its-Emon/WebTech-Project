
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
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
<th>Doctor name</th> 
<th>Date of birth</th> 
<th>Booking date</th>
<th>Booking time</th>
<th>Hospital name</th>
<th>Approval</th>  
</tr>  

<?php 
                                  
$data = file_get_contents("Json/appointment_of_requests.json");  
$data = json_decode($data, true);  
$index=0;
foreach($data as $row)  
{  
echo '<tr>
<td>'.$row["name"].'</td>
<td>'.$row["phone_number"].'</td>
<td>'.$row["e-mail"].'</td>
<td>'.$row["username"].'</td>
<td>'.$row["gender"].'</td>
<td>'.$row["doctor_name"].'</td>
<td>'.$row["dob"].'</td>
<td>'.$row["booking_date"].'</td>
<td>'.$row["booking_time"].'</td>
<td>'.$row["Hospital_name"].'</td>
<td>Pending </td> 
</tr><br><br>'; 

if((isset($_POST["name"]) == $row["name"]) && isset($_POST["submit"]))
{
     if ($_POST["name"] == $row["name"] && isset($_POST["submit"]))
     {
     $current_data = file_get_contents('Json/approved_appointment.json');  
	$data = json_decode($current_data, true);
     $extra = array(  
     'name'               =>     $row['name'],  
     'phone_number'       =>     $row['phone_number'],
     'e-mail'             =>     $row["e-mail"],  
     'username'           =>     $row["username"],  
     'gender'             =>     $row["gender"],
     'doctor_name'        =>     $row["doctor_name"],    
     'dob'                =>     $row["dob"] ,
     'booking_date'       =>     $row["booking_date"],
     'booking_time'       =>     $row["booking_time"] ,
     'Hospital_name'      =>     $row["Hospital_name"]); 
      array_push($data, $extra);                         
      $final_data = json_encode($data); 
      if(file_put_contents('Json/approved_appointment.json', $final_data))  
      {  
      echo "Information Updated Successfully";
      }                                       
      else  
      {  
      echo "JSON File not exits";  
      }
     }
     $index++;   
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
     if (empty($_POST["name"])) 
     {
     $nameErr = "Name is required";
     } 
     else 
     {
     $name = test_input($_POST["name"]);                                
     }
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
     </table> 
     </div>
 </div>              
</body>
</html>