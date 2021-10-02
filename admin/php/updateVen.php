<?php
include_once 'config.php';
if ($_POST['action'] == 'update' && $_POST['ven_id']) {	
	$updateField='';
	if(isset($_POST['ven_fname'])) {
		$updateField.= "ven_fname='".$_POST['ven_fname']."'";
	} else if(isset($_POST['ven_lname'])) {
		$updateField.= "ven_lname='".$_POST['ven_lname']."'";
	} else if(isset($_POST['ven_email'])) {
		$updateField.= "ven_email='".$_POST['ven_email']."'";
	}
	if($updateField && $_POST['ven_id']) {
		$sqlQuery = "UPDATE vendor SET $updateField WHERE ven_id='" . $_POST['ven_id'] . "'";	
		mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['ven_id']) {
	$sqlQuery = "DELETE FROM vendor WHERE ven_id='" . $_POST['ven_id'] . "'";	
	mysqli_query($con, $sqlQuery) or die("database error:". mysqli_error($con));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>