<?php
session_start();
include_once('mysqli_connect.php');

if (isset($_POST['edit'])) {
	$register_id = $_POST['id'];
	$fn = $_POST['firstname'];
	$ln = $_POST['lastname'];
	// $ad = $_POST['address'];
	$sql = "UPDATE registration SET f_name = '$fn', l_name = '$ln' WHERE register_id = '$register_id'";

	//use for MySQLi OOP
	if ($dbc->query($sql)) {
		$_SESSION['success'] = 'User updated successfully';
	}
	///////////////

	//use for MySQLi Procedural
	// if(mysqli_query($conn, $sql)){
	// 	$_SESSION['success'] = 'Member updated successfully';
	// }
	///////////////

	else {
		$_SESSION['error'] = 'Something went wrong in updating user';
	}
} else {
	$_SESSION['error'] = 'Select user to edit first';
}

header('location: testcrudhiho.php');
