<?php
 

  function updatepassword_from_jason($username,$password,$new_password)
  {
    // echo " boss baby";
    $index = 0;
    if(file_exists('Json/data.json'))  
		  { 

        $current_data = file_get_contents('Json/data.json');  
			  $array_data = json_decode($current_data, true);
        foreach($array_data as $row)
       {
        //echo $password;
      //  echo $username;
        
        if($row["username"]==$username )
        {
          $name = $username= $email = $phone_number = $location =$registrationid=$blood_group= '';
          echo $row["username"];
          // echo $row["password"];
          //echo $password;
         // echo $new_password;
        
        if($row["password"]==$password )
        {
          // $usernamee = $row["username"];
          // $passwordd = $row["password"];

         echo " yes ";
          // $row["password"]==$new_password;





          $name=$row['name'];
          $username =$row['username'];
          $email =$row['email'];
          $phone_number =$row['phone_number'];
          $location =$row['location'];
          // $username =$row['username'];
          // $username =$row['username'];
          // $gender =$row['gender'];
          $registrationid =$row['registrationid'];
          $blood_group =$row['blood_group'];
          // $specialist =$row['specialist'];
        

    


          $extra = array(  
            'name'            =>    $name,
            'username'        =>    $username,
            'email'           =>    $email,
            'phone_number'    =>    $phone_number,
            'location'        =>    $location,
            'password'           =>     $_POST['new_password'],
            'confirm_password'   =>     $_POST['new_password'], 
            // 'gender'          =>    $gender,
            'registrationid'  =>    $registrationid,
            'blood_group'     =>    $blood_group
            // 'specialist'      =>    $specialist 
            
            );
          
            $array_data[$index] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('Json/data.json', $final_data))  
            {  
              echo "Information Updated Successfully";
              header("Location:Controller/logout.php");
            } 
          } 
          else  
          {  
            echo "unSuccessful";  
          }
        

        }
          $index++;
      }
    
      
      }
       // if ($_POST['husername']==$husernamee && $_POST['password']==$passwordd) {
        //   $_SESSION['husername'] = $usernamee;
        //   header("location:Welcome.php");
        // }


    
      }











// function readfromjason($file) 
//   {

//     $data = file_get_contents($file);
//     $data = json_decode($data, true);
//     return $data;
//   }


  function updateprofile_from_jason($username,$password)
  {
    // echo " boss baby";
    $index = 0;
    if(file_exists('Json/data.json'))  
		  { 

        $current_data = file_get_contents('Json/data.json');  
			  $array_data = json_decode($current_data, true);
        foreach($array_data as $row)
       {
      
        
        if($row["username"]==$username )
        {
         // echo $row["username"];
           //echo $row["password"];
        if($row["password"]==$password )
        {
          // $usernamee = $row["username"];
          // $passwordd = $row["password"];

         



          $extra = array(  
            'name'            =>     $_POST['name'],
            'username'        =>     $_POST['username'],
            'email'           =>     $_POST['email'],
            'phone_number'    =>     $_POST['phone_number'],
            'location'        =>     $_POST['location'],
            'password'        =>     $_POST['password'],
            'confirm_password'=>     $_POST['confirm_password'],  
            // 'gender'          =>     $_POST['gender'],
            'registrationid'  =>     $_POST['registrationid'],
            'blood_group'     =>     $_POST['blood_group']
            // 'specialist'      =>     $_POST["specialist"] 
          );
            $array_data[$index] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('Json/data.json', $final_data))  
            {  
              echo "Information Updated Successfully";
              header("Location:Controller/logout.php");
            } 
          } 
          else  
          {  
            echo "unSuccessful";  
          }
        

        }
          $index++;
      }

      
      }
       // if ($_POST['husername']==$husernamee && $_POST['password']==$passwordd) {
        //   $_SESSION['husername'] = $usernamee;
        //   header("location:Welcome.php");
        // }


    
      }
  



 
?>