<?php
	session_start();
	include_once('mysqli_connect.php');

	if(isset($_GET['register_id'])){
		$sql = "DELETE FROM registration WHERE register_id = '".$_GET['register_id']."'";

		//use for MySQLi OOP
		if($dbc->query($sql)){
			$_SESSION['success'] = 'User deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting user';
		}
	}
	else{
		$_SESSION['error'] = 'Select user to delete first';
	}

	header('location: testcrudhiho.php');
?>