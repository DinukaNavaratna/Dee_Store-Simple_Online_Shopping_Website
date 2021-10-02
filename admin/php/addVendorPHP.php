<?php
	
	//start session
	session_start();

	//DB connection
	require '../config/config.php';




	//check the form data submission
	if(isset($_POST['submit']))
	{

			$ven_fname = mysqli_real_escape_string($con,$_POST['ven_fname']);
			$ven_lname = mysqli_real_escape_string($con,$_POST['ven_lname']);
			$ven_email = mysqli_real_escape_string($con,$_POST['ven_email']);
			$ven_phone = mysqli_real_escape_string($con,$_POST['ven_phone']);
			$ven_type = mysqli_real_escape_string($con,$_POST['ven_type']);
			$item_details = mysqli_real_escape_string($con,$_POST['item_details']);	
			$item_color = mysqli_real_escape_string($con,$_POST['item_color']);
			$item_size = mysqli_real_escape_string($con,$_POST['item_size']);
			$item_qty = mysqli_real_escape_string($con,$_POST['item_qty']);
			$item_price = mysqli_real_escape_string($con,$_POST['item_price']);	
							

			//convert date
			
			 
          


		//Insert data
			$sqlIns = "INSERT INTO vendor (ven_fname,ven_lname,ven_email,ven_phone,ven_type,item_details,item_color,item_size,item_qty,item_price) VALUES ('$ven_fname','$ven_lname','$ven_email','$ven_phone','$ven_type','$item_details','$item_color','$item_size','$item_qty','$item_price');";

			$result = mysqli_query($con,$sqlIns);

			//execute insert query
			if($result){
				header("Location:../addVendor.php?update=success");
			}
			else
			{
				header("Location:../addVendor.php?update=fail");
			}
			}	
	else
	{
		header("Location:../addVendor.php?Error=No_Access");
	}



?>