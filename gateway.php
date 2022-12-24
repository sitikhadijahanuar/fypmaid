<?php

session_start();

include_once('mysqli_connect.php'); // Connect to the db.

/*	if (empty($errors)) { // If everything's OK. */
	
		// Register the user in the database...
		
$payment = "SELECT * FROM registration INNER JOIN time ON registration.register_id = time.register_id INNER JOIN contract ON registration.register_id = contract.register_id WHERE registration.register_id = '" . $_SESSION['register_id'] . "' ";

$test = mysqli_query ($dbc, $payment);
$row = mysqli_fetch_array ($test);

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

<body style="background-color:#4A546B;">

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
                        <a href="location.php" class="nav-item nav-link">Location</a>
                        <a href="select_task.php" class="nav-item nav-link">Services</a>
						<a href="cancel_booking.php" class="nav-item nav-link">History</a>
                        <a href="give_review.php" class="nav-item nav-link">Feedback</a>
                        <a href="faq.php" class="nav-item nav-link">FAQs</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <?php

    //Create function pull-down for payment method
    function paymentmethod()
    {
        $paymentmethod = array('Select', 'COD (Cash On Delivery)', 'FPX (Online Banking)');
        echo '<select name="paymentmethod_data">';
        foreach ($paymentmethod as $key => $value) {
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';
    }

    // Check for form submission:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        require_once('mysqli_connect.php'); // Connect to the db.
        $errors = array(); // Initialize an error array.
		
		// Check for payment method:
        if (empty($_POST['paymentmethod_data'])) {
            $errors[] = 'You forgot to choose payment method.';
        } else {
            $pm = $_POST['paymentmethod_data'];
        }
		
		if (empty($errors)) {

            // Register the member in the database...

            // Make the query:
            $t = "INSERT INTO paymentmethod (paymentmethod_data) VALUES ('$pm')";
            $r = mysqli_query($dbc, $t); // Run the query.

            if ($r) { // If it ran OK.

                // Print a message:
                echo '<br> <br> <br> <br> <br> <br> <br><h1><center> Thank you </center></h1>
			<p><center> Your booking is secured! </center></p><p><br /></p>';
            } else { // If it did not run OK.

                // Public message:
                echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

                // Debugging message:
                // echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
            } // End of if ($r) IF.

            mysqli_close($dbc); // Close the database connection.
            exit();
			
        } else { // Report the errors.

            echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
            foreach ($errors as $msg) { // Print each error.
                echo " - $msg<br />\n";
            }
			
            echo '</p><p>Please try again.</p><p><br /></p>';
        } // End of if (empty($errors)) IF.
		
    } // End of the main Submit conditional.

    ?>

    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-80">
                <div class="col-10 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-4">
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 col text-center">Payment Gateway</h2>

                            <form action="gateway.php" method="post">


                                First Name: <?php echo $row['f_name']; ?>

                                <br><br>
                                Last Name: <?php echo $row['l_name']; ?>

                                <br><br>
                                Phone Number: <?php echo $row['phonenumber']; ?>

                                <br><br>
                                Booking Date: <?php echo $row['registration_date']; ?>
								
								<br><br>
                                Address: <?php echo $row['address']; ?>

                                <br><br>
                                Time: <?php echo $row['time_data']; ?>

                                <br><br>
                                Contract: <?php echo $row['contract_data']; ?>

                                <br><br>
								Total Amount: <?php echo $row['value']; ?>

                                <br><br>
                                Payment method: &nbsp&nbsp&nbsp

                                <?php

                                paymentmethod();

                                ?>

                                <br><br><br>

                                <div class="col text-center">
                                    <div class="mt-15 pt-15">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Pay Now" />
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>