
<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
        <link rel="stylesheet" href="CSS/style.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <?php
        
           session_start();

           if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
           else{header("location:Login.php");}
      require 'Model/doctorapproval.php';  
      ?>




               <div class="div">
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
               <fieldset>
               <label for="name">Enter name you want to append:</label>
               <input type="text" id="name" name="name">
               <br><br>
               <input type="submit" name="submit" value="Submit" class="btn btn-info">
               </fieldset>
               </div>
               </form>                
          
      </body>  
 </html>  