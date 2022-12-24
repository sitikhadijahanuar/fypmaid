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
						<a href="index.php" class="nav-item nav-link">Home</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<?php
// This page lets the user logout.
// This version uses sessions.
session_start(); // Access the existing session.

// If no session variable exists, redirect the user:
if (!isset($_SESSION['register_id'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	
	
} else { // Cancel the session:

	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0); // Destroy the cookie.

}

// Set the page title and include the HTML header:
$page_title = 'Logged Out!';

// Print a customized message:
echo "<br> <br> <br> <br> <br> <br> <br> <br><h1><center> Logged Out </center></h1>
<p><center> We hope to see you again! </center></p>";

?>