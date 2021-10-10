<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

	<?php
		
		$nameErr = $emailErr = $dateofbirthErr = $genderErr = $sscErr = $hscErr = $bscErr = $mscErr = $degreeErr=" "; $bloodgroupErr = "";
		$name = $email = $comment= $websiteErr = $dateofbirth = $gender = $ssc= $hsc= $msc=$bsc = $bloodgroup =  "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
			} else {
				$name = test_input($_POST["name"]);
			
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed";
				$name="";
			}
			}
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			} else {
				$email = test_input($_POST["email"]);
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$email ="";
			}
			}
            if (empty($_POST["website"])) {
				$website = "";
			  } else {
				$website = test_input($_POST["website"]);
				// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
				if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				  $websiteErr = "Invalid URL";
				}
			  }
		
			  if (empty($_POST["comment"])) {
				$comment = "";
			  } else {
				$comment = test_input($_POST["comment"]);
			  }
			 

			if (empty($_POST["date"])) {
				$dateofbirthErr = "Date of Birth is required";
			} else {
				$dateofbirth = test_input($_POST["date"]);
			}
			
			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			} else {
				$gender = test_input($_POST["gender"]);
			}


				

				if (empty($_POST["ssc"])) {
					$sscErr = "SSC ";
				} else {
					$ssc = test_input($_POST["ssc"]);
				}
				if (empty($_POST["hsc"])) {
					$hscErr = "HSC ";
				} else {
					$hsc = test_input($_POST["hsc"]);
				}
				if (empty($_POST["bsc"])) {
					$bscErr = "BSC ";
				} else {
					$bsc = test_input($_POST["bsc"]);
				}
				if (empty($_POST["msc"])) {
					$mscErr = "MSC ";
				} else {
					$msc = test_input($_POST["msc"]);
				}







			if (empty($_POST["bloodgroup"])) {
				$bloodgroupErr = "Blood Group is required";
			} else {
				$bloodgroup = test_input($_POST["bloodgroup"]);
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


		
		
		

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>	
		</fieldset>
		<fieldset>
			<legend>Email</legend>
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
		</fieldset>
		<fieldset>
		Website: <input type="text" name="website">
		<span class="err">
	 		<?php echo $websiteErr;?>
	 	</span><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
		</fieldset>
		<fieldset>

			<legend>Date Of Birth</legend>
			<input type="date" name="date" id="">
			<?php 
			echo $dateofbirth;
					 
				 ?>
			</select>

			<span class="error"><?php echo $dateofbirthErr;?></span>
		</fieldset>
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
			<span class="error">* <?php echo $genderErr;?></span>

			
		</fieldset>
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="ssc" value="ssc">SSC
			<input type="checkbox" name="hsc" value="hsc">HSC
			<input type="checkbox" name="bsc" value="bsc">BSc
			<input type="checkbox" name="msc" value="msc">MSc
			<span class="error">* <?php echo $degreeErr; ?> </span>  <?php
			$degree=" ";
			
			if ($msc=="msc")
			{
				if ($bsc=="bsc")
				{
					if ($hsc=="hsc" && $ssc=="ssc")
					{
						$degree=$ssc." ".$hsc." ".$bsc." ".$msc." ";
					}
					else
					{
						echo  $sscErr."  and ".$hscErr."  is REQUIRED..! ";

					}
				}
				else
				{
					echo  $bscErr." , ".$sscErr."  and ".$hscErr."  is REQUIRED..!";
				}
			}

			else if ($bsc=="bsc")
				{
					if ($hsc=="hsc" && $ssc=="ssc")
					{
						$degree=$ssc." ".$hsc." ".$bsc." ";
					}
					else
					{
						echo  $sscErr." and ".$hscErr." is REQUIRED..!";
					}
				}

			else if ($hsc=="hsc" && $ssc=="ssc")
				{
					$degree=$ssc." ".$hsc." ";
				}
			
			
			
			echo $degree;

			
					
			
				?></span>
		</fieldset>

		<fieldset>
			<legend>B;ood Group</legend>
						<select name="bloodgroup"> 
				<option value=""></option>
			    <option value="O+">O+</option>
			    <option value="O-">O-</option>
			    <option value="A+">A+</option>
			    <option value="A-">A-</option>
			    <option value="B+">B+</option>
			    <option value="B-">B-</option>
			    <option value="AB+">AB+</option>
			    <option value="AB-">AB-</option>
			</select>
			<span class="error">* <?php echo $bloodgroupErr;?></span>
			<br> 
			<br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
			
			
		</form>


	<?php
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $comment; 
		echo "<br>";
	 	echo $websiteErr;
		echo "<br>";
		echo $dateofbirth;
		echo "<br>";
		echo $gender;
		echo "<br>";
		echo $degree;
		echo "<br>";
		echo $bloodgroup;

	?>


</body>
</html>