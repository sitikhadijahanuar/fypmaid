<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MaidForYou</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

	<!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
			
                </div>
                <div class="col-md-12 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">M</span>aid<span class="text-primary">F</span>or<span class="text-primary">Y</span>ou</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
						<a href="adminindex.php" class="nav-item nav-link">Dashboard</a>
						<a href="adminlogout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<?php 
// This script retrieves all the records from the members and pet_info table.
// This new version links to edit and delete pages.

$page_title = 'Booking List';

echo '<br><h2><center> Booking List </center></h2>';

require ('../mysqli_connect.php');
		
	// Define the query:
	$q = "SELECT f_name, l_name, phonenumber, DATE_FORMAT(registration_date, '%M %d, %Y') AS registration_date, address, username, password, register_id 
	FROM registration ORDER BY registration_date ASC";	
	$r = @mysqli_query ($dbc, $q);

	// Count the number of returned rows:
    $num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.

	// Print how many members there are:
	echo "<p><center> There are currently $num booking(s) </center></p>\n";

	// Table header:

	echo '<br>
		<div class="table-responsive table-responsive data2">
		<table class="table table-data2 table-hover" id="user_table">
		<thead>
	<tr>
		<td align="left"><b>First Name</b></td>
		<td align="left"><b>Last Name</b></td>
		<td align="left"><b>Phone Number</b></td>
		<td align="left"><b>Registration Date</b></td>
		<td align="left"><b>Address</b></td>
		<td align="left"><b>Username</b></td>
		<td align="left"><b>Password</b></td>
	</tr>
		</thead>
		</div>
';
	
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr>
			<td align="left">' . $row['f_name'] . '<p> </td>
			<td align="left">' . $row['l_name'] . '<p> </td>
			<td align="left">' . $row['phonenumber'] . '<p> </td>
			<td align="left">' . $row['registration_date'] . '<p></td>
			<td align="left">' . $row['address'] . '<p></td>
			<td align="left">' . $row['username'] . '<p></td>
			<td align="left">' . $row['password'] . '<p></td>
		</tr>
		';
	}

	echo '</table>';
	mysqli_free_result ($r); // Free memory associated with $r	

} else { // If no records were returned.

	echo '<p><center> There are currently no registered members. </center></p>';
}

mysqli_close($dbc); // Close database connection

?>