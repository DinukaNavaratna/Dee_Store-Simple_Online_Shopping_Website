<?php
	
	//start session
	session_start();

	//DB connection
	require '../config/config.php';




	//check the form data submission
	if(isset($_POST['submit']))
	{

			$feed_fname = mysqli_real_escape_string($con,$_POST['feed_fname']);
			$feed_lname = mysqli_real_escape_string($con,$_POST['feed_lname']);
			$feed_email = mysqli_real_escape_string($con,$_POST['feed_email']);
			$feed_msg = mysqli_real_escape_string($con,$_POST['feed_msg']);
		
			
						//convert date
			

		//Insert data
			$sqlIns = "INSERT INTO feedback (feed_fname,feed_lname,feed_email,feed_msg) VALUES ('$feed_fname','$feed_lname','$feed_email','$feed_msg');";

			$result = mysqli_query($con,$sqlIns);

			//execute insert query
			if($result){
				header("Location:../feedback.php?update=success");
			}
			else
			{
				header("Location:../feedback.php?update=fail");
			}
			}	
	else
	{
		header("Location:../feedback.php?Error=No_Access");
	}



?>