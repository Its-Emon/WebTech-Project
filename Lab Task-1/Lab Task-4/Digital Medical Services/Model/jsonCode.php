<?php
  function writeToJson() 
  {
    if(file_exists('Json/data.json'))  
      {   

        $current_data = file_get_contents('Json/data.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
        'name'            =>     $_POST['name'],
        'username'        =>     $_POST['username'],
        'email'          =>     $_POST['email'],
        'phone_number'          =>     $_POST['phone_number'],
        'location'       =>     $_POST['location'],
        'password'       =>     $_POST['password'],
        'confirm_password' =>     $_POST['confirm_password'],  
        // 'gender'        =>     $_POST['gender'],
        'registrationid'        =>     $_POST['registrationid'],
        'blood_group'        =>     $_POST['blood_group']
        // 'specialist'        =>     $_POST["specialist"]
      );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data);  
        if(file_put_contents('Json/data.json', $final_data))  
        {  
          echo "Information Updated Successfully";
        } 
      } 
      else  
      {  
        echo "JSON File not exits";  
      }
  }

function readFromJson($file) 
  {
    $data = file_get_contents($file);
    $data = json_decode($data, true);
    return $data;
  }


?>