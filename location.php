<?php

include_once('mysqli_connect.php'); // Connect to the db.
session_start();
$address = "SELECT * FROM registration WHERE register_id=".$_SESSION['register_id'];
$r = mysqli_query($dbc, $address); // Run the query.
$row = mysqli_fetch_array ($r);



//$address = "1600 Pennsylvania Ave NW Washington DC 20500";
///$address = str_replace(" ", "+", $address);
$address = $row['address'];
$region = "USA";

//$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?key=AIzaSyC-fKZbtzIpfwQuc0FhxwzoKMX3BzaWJZY&address=$address&sensor=false&region=$region");
//$json2 = json_decode($json);

/*
 $lat = $json2->results[0]->geometry->location->lat;
  $long = $json2->results[0]->geometry->location->lng;
 echo $lat."
 ".$long;

echo "<br>";
$placeid= $json2->results[0]->place_id;

echo $placeid;*/

$mapAPI = "https://maps.google.com/maps?key=AIzaSyC-fKZbtzIpfwQuc0FhxwzoKMX3BzaWJZY&q=".$address."&t=&z=15&ie=UTF8&iwloc=&output=embed";
?>

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
                        <a href="home.php" class="nav-item nav-link">Home</a>
						<a href="select_task.php" class="nav-item nav-link">Services</a>
						<a href="give_review.php" class="nav-item nav-link">Feedback</a>
						<a href="faq.php" class="nav-item nav-link">FAQs</a>
						<a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Under Nav Start -->
    <div class="container-fluid bg-white py-3">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <!-- Under Nav End -->

<div><h2><span class="glyphicon glyphicon-map-marker text-center"></span><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLocation</br></h2>

<br>
<br>
<div class="bg-gray property-quantity px-4 pt-4 w-100">
<div class="well"><iframe
  width="100%"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="<?php echo $mapAPI; ?>">
</iframe> 

</div>
</div>
</div>

