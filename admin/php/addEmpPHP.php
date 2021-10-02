<?php
	
	//start session
	session_start();

	//DB connection
	require '../config/config.php';




	//check the form data submission
	if(isset($_POST['submit']))
	{

			$emp_fname = mysqli_real_escape_string($con,$_POST['emp_fname']);
			$emp_lname = mysqli_real_escape_string($con,$_POST['emp_lname']);
			$emp_bday = mysqli_real_escape_string($con,$_POST['emp_bday']);
			$emp_gender = mysqli_real_escape_string($con,$_POST['emp_gender']);
			$emp_address = mysqli_real_escape_string($con,$_POST['emp_address']);
			$emp_phone = mysqli_real_escape_string($con,$_POST['emp_phone']);	
			$emp_email = mysqli_real_escape_string($con,$_POST['emp_email']);
			$emp_type = mysqli_real_escape_string($con,$_POST['emp_type']);	
							//convert date
			//$emp_type= 'name';
			 
            
        


		//Insert data
			$sqlIns = "INSERT INTO employee (emp_fname,emp_lname,emp_bday,emp_gender,emp_address,emp_phone,emp_email,emp_type) VALUES ('$emp_fname','$emp_lname','$emp_bday','$emp_gender','$emp_address','$emp_phone','$emp_email','$emp_type');";

			$result = mysqli_query($con,$sqlIns);

			//execute insert query
			if($result){
				header("Location:../form-advance.php?update=success");
			}
			else
			{
				header("Location:../form-advance.php?update=fail");
			}
			}	
	else
	{
		header("Location:../form-advance.php?Error=No_Access");
	}



?>