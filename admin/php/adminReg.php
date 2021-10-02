<?php
	
	//start session
	session_start();

	//DB connection
	require '../config/config.php';




	//check the form data submission
	if(isset($_POST['submit']))
	{

			$name = mysqli_real_escape_string($con,$_POST['name']);
			$username = mysqli_real_escape_string($con,$_POST['username']);
			$psw = mysqli_real_escape_string($con,$_POST['psw']);
			

			//convert date
			
			 
  


		//Insert data
			$sqlIns = "INSERT INTO admin (name,username,psw) VALUES ('$name','$username','$psw');";

			$result = mysqli_query($con,$sqlIns);

			//execute insert query
			if($result){
				header("Location:../AdminReg.php?update=success");
			}
			else
			{
				header("Location:../AdminReg.php?update=fail");
			}
			}	
	else
	{
		header("Location:../AdminReg.php?Error=No_Access");
	}