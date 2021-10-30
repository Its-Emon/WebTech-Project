<?php
 function doctor_appointment_to_jason()
 {
if(file_exists('Json/data_of_requests.json'))  
           {  
                $current_data = file_get_contents('Json/appointment_of_requests.json');  
                $array_data = json_decode($current_data, true);  
                $input = array(  
                     'name'               =>     $_POST['name'],  
                     'phone_number'       =>     $_POST['phone_number'],
                     'e-mail'             =>     $_POST["email"],  
                     'username'           =>     $_POST["username"],  
                     'gender'             =>     $_POST["gender"],  
                     'doctor_name'        =>     $_POST["doctor_name"], 
                     'dob'                =>     $_POST["dob"] ,
                     'booking_date'       =>     $_POST["booking_date"],
                     'booking_time'       =>     $_POST["booking_time"] ,
                     'Hospital_name'      =>     $_POST["Hospital_name"] 
                    
                );  
                $array_data[] = $input;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('Json/appointment_of_requests.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }   
?>