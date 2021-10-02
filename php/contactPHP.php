<?php
	
	//start session
	session_start();

	//DB connection
	require '../config/config.php';




	//check the form data submission
	if(isset($_POST['submit']))
	{

			$cont_name = mysqli_real_escape_string($con,$_POST['cont_name']);
			$cont_email = mysqli_real_escape_string($con,$_POST['cont_email']);
			$cont_sub = mysqli_real_escape_string($con,$_POST['cont_sub']);
			$cont_msg = mysqli_real_escape_string($con,$_POST['cont_msg']);
		
			
						//convert date
			

		//Insert data
			$sqlIns = "INSERT INTO contact (cont_name,cont_email,cont_sub,cont_msg) VALUES ('$cont_name','$cont_email','$cont_sub','$cont_msg');";

			$result = mysqli_query($con,$sqlIns);

			//execute insert query
			if($result){
				header("Location:../contactUs.php?update=success");
			}
			else
			{
				header("Location:../contactUs.php?update=fail");
			}
			}	
	else
	{
		header("Location:../contactUs.php?Error=No_Access");
	}



?>