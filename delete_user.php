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
	
</body>
</html>

<?php # delete_user.php
// This page is for deleting a user record.
// This page is accessed through cancel_booking.php.

session_start();

$page_title = 'Delete a Booking';


// Check for a valid user ID, through GET or POST:

if ( (isset($_GET['register_id'])) && (is_numeric($_GET['register_id'])) ) { // From cancel_booking.php
	$register_id = $_GET['register_id'];
} elseif ( (isset($_POST['register_id'])) && (is_numeric($_POST['register_id'])) ) { // Form submission.
	$register_id = $_POST['register_id'];
} else { // No valid ID, kill the script.
    echo "test";
	echo '<p><center> class="error">This page has been accessed in error.</center></p>'; 
	//exit();
}

require ('../mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['sure'] == 'Yes') { // Delete the record.

		// Make the query:
		$q = "DELETE FROM registration WHERE register_id=$register_id LIMIT 1";		
		$r = @mysqli_query ($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

			// Print a message:
			echo '<br> <br> <br> <br> <br> <br> <br><h1><center> Thank you </center></h1>
			<p><center> Your booking has been deleted! </center></p><p><br /></p>';	

		} else { // If the query did not run OK.
			echo '<p> class="error">The booking could not be deleted due to a system error.</p>'; // Public message.
			echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
		}
	
	} else { // No confirmation of deletion.
		echo '<br> <br> <br> <br> <br> <br> <br><h1><center> Thank you </center></h1>
			<p><center> Your booking has not been deleted! </center></p><p><br /></p>';	
	}

} else { // Show the form.

	// Retrieve the user's information:
	$q = "SELECT CONCAT(f_name, ' ', l_name ,',') FROM registration WHERE register_id=$register_id";
	$r = @mysqli_query ($dbc, $q);

	if (mysqli_num_rows($r) == 1) { // Valid user ID, show the form.

		// Get the user's information:
		$row = mysqli_fetch_array ($r, MYSQLI_NUM);
		
		// Display the record being deleted:
		echo 
		
		'<section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-80">
                <div class="col-10 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-4">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 col text-center">Delete Booking</h2>';
		
		echo
		
		"<p><h3>$row[0]</h3>
		Are you sure you want to cancel your booking?</p>";
		
		// Create the form:
		echo '<form action="delete_user.php" method="post">
	<input type="radio" name="sure" value="Yes" /> Yes 
	
	<br>
	
	<input type="radio" name="sure" value="No" checked="checked" /> No
	
	</br>
	
	<div class="col text-center">
    <div class="mt-15 pt-15">
	<button  class="btn btn-primary btn-lg">Submit</button>
	</div>
	</div>
	<input type="hidden" name="register_id" value="' . $register_id . '" />
	</form> </div>
                    </div>
                </div>
            </div>
        </div>

    </section>';
	
	} else { // Not a valid user ID.
	echo $register_id;
		echo '<p> class="error">This page has been accessed in error.</p>';
	}

} // End of the main submission conditional.

mysqli_close($dbc);

?>

