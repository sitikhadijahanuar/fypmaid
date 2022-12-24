<?php
require('includes/login_functions.inc.php');
session_start();

if (!isset($_SESSION['register_id'])) {

    // Need the functions:

    redirect_user();
}

$register_id = $_SESSION['register_id'];

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

    <script src="assets/jquery.3.2.1.min.js"></script>

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
                        <a href="gateway.php" class="nav-item nav-link">Payment</a>
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

    //Create function pull-down for time
    function duration()
    {
        $duration = array('Select', '8.00AM-12.00PM', '12.00PM-4.00PM', '4.00PM-8.00PM', 'Permanent');
        echo '<select name="time_data">';
        foreach ($duration as $key => $value) {
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';
    }

    ?>

    <?php

    // Check for form submission:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        require('mysqli_connect.php'); // Connect to the db.
        $errors = array(); // Initialize an error array.

        // Check for living room:
        if (empty($_POST['livingroom_data'])) {
            $errors[] = 'You forgot to enter task for living room.';
        } else {
            $livingRoom = $_POST['livingroom_data'];
            foreach ($livingRoom as $lvr) {

                $data = $lvr;

                $query = "INSERT into livingroom (livingroom_data) VALUES ('$data')";
                $r = mysqli_query($dbc, $query); // Run the query.

            }
        }

        // Check for kitchen:
        if (empty($_POST['kitchen_data'])) {
            $errors[] = 'You forgot to enter task for kitchen.';
        } else {
            $kitchen = $_POST['kitchen_data'];
            foreach ($kitchen as $kcn) {

                $data = $kcn;

                $query = "INSERT into kitchen (kitchen_data) VALUES ('$data')";
                $r = mysqli_query($dbc, $query); // Run the query.

            }
        }

        // Check for bedroom:
        if (empty($_POST['bedroom_data'])) {
            $errors[] = 'You forgot to enter task for bedroom.';
        } else {
            $bedRoom = $_POST['bedroom_data'];
            foreach ($bedRoom as $bdr) {

                $data = $bdr;

                $query = "INSERT into bedroom (bedroom_data) VALUES ('$data')";
                $r = mysqli_query($dbc, $query); // Run the query.

            }
        }

        // Check for bathroom:
        if (empty($_POST['bathroom_data'])) {
            $errors[] = 'You forgot to enter task for bathroom.';
        } else {
            $bathRoom = $_POST['bathroom_data'];
            foreach ($bathRoom as $btr) {

                $data = $btr;

                $query = "INSERT into bathroom (bathroom_data) VALUES ('$data')";
                $r = mysqli_query($dbc, $query); // Run the query.

            }
        }

        // Check for time:
        if (empty($_POST['time_data'])) {
            $errors[] = 'You forgot to enter time.';
        } else {
            $duration = $_POST['time_data'];
        }

        // Check for contract:
        if (empty($_POST['contractdata'])) {
            $errors[] = 'You forgot to enter contract.';
        } else {
            $contract = $_POST['contractdata'];
        }

        $value = $_POST['value'];

        if (empty($errors)) {

            // Register the member in the database...

            // Make the query:
            $t = "INSERT INTO time (register_id, time_data) VALUES ('$register_id', '$duration')";
            $c = "INSERT INTO contract (register_id, contract_data, value) VALUES ('$register_id', '$contract', '$value')";

            $r = mysqli_query($dbc, $t); // Run the query.
            $r = mysqli_query($dbc, $c); // Run the query.

            if ($r) { // If it ran OK.

                // Print a message:
                echo '<br> <br> <br> <br> <br> <br> <br><h1><center> Thank you </center></h1>
			<p><center> You have selected the tasks, chose time and contract! </center></p><p><br /></p>';
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
                            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 col text-center">Select tasks</h2>

                            <h3>Living Room</h3>

                            <form action="select_task.php" method="post"> <br>

                                <input type="checkbox" name="livingroom_data[]" value="Vacuum and mop floors">
                                <label for="livingroom1"> Vacuum and mop floors </label><br>
                                <input type="checkbox" name="livingroom_data[]" value="Dust all surfaces">
                                <label for="livingroom2"> Dust all surfaces </label><br>
                                <input type="checkbox" name="livingroom_data[]" value="Clean windows">
                                <label for="livingroom3"> Clean windows </label><br>
                                <input type="checkbox" name="livingroom_data[]" value="Clear clutter">
                                <label for="livingroom4"> Clear clutter </label><br>
                                <input type="checkbox" name="livingroom_data[]" value="Straighten pillow and rugs">
                                <label for="livingroom5"> Straighten pillow and rugs </label><br><br>

                                <h3>Kitchen</h3>

                                <br>

                                <input type="checkbox" name="kitchen_data[]" value="Collect and dispose trash">
                                <label for="kitchen1"> Collect and dispose trash </label><br>
                                <input type="checkbox" name="kitchen_data[]" value="Cook and wash dishes">
                                <label for="kitchen2"> Cook and wash dishes </label><br>
                                <input type="checkbox" name="kitchen_data[]" value="Wipe kitchen counters and tables">
                                <label for="kitchen3"> Wipe kitchen counters and tables </label><br>
                                <input type="checkbox" name="kitchen_data[]" value="Clean microwave">
                                <label for="kitchen4"> Clean microwave </label><br>
                                <input type="checkbox" name="kitchen_data[]" value="Sweep and mop floors">
                                <label for="kitchen5"> Sweep and mop floors </label><br><br>

                                <h3>Bedroom</h3>

                                <br>

                                <input type="checkbox" name="bedroom_data[]" value="Make bed">
                                <label for="bedroom1"> Make bed </label><br>
                                <input type="checkbox" name="bedroom_data[]" value="Change sheets">
                                <label for="bedroom2"> Change sheets </label><br>
                                <input type="checkbox" name="bedroom_data[]" value="Vacuum and mop floors">
                                <label for="bedroom3"> Vacuum and mop floors </label><br>
                                <input type="checkbox" name="bedroom_data[]" value="Wipe all dusts">
                                <label for="bedroom4"> Wipe all dusts </label><br>
                                <input type="checkbox" name="bedroom_data[]" value="Wipe mirrors">
                                <label for="bedroom5"> Wipe mirrors </label><br><br>

                                <h3>Bathroom</h3>

                                <br>

                                <input type="checkbox" name="bathroom_data[]" value="Clean toilets">
                                <label for="bathroom1"> Clean toilets </label><br>
                                <input type="checkbox" name="bathroom_data[]" value="Refill toilet papers">
                                <label for="bathroom2"> Refill toilet papers </label><br>
                                <input type="checkbox" name="bathroom_data[]" value="Scrub bathtub">
                                <label for="bathroom3"> Scrub bathtub </label><br>
                                <input type="checkbox" name="bathroom_data[]" value="Clean sinks">
                                <label for="bathroom4"> Clean sinks </label><br>
                                <input type="checkbox" name="bathroom_data[]" value="Scrub floors">
                                <label for="bathroom5"> Scrub floors </label><br><br>

                                <h3> Time duration </h3>

                                <br>

                                Choose time: &nbsp&nbsp&nbsp

                                <?php

                                duration();

                                ?>

                                <br><br>

                                Choose contract: &nbsp&nbsp&nbsp

                                <select name="contract_data" id="contract_data">
                                    <option value="" disabled selected>Select</option>
                                    <option value="RM224.00">Every Week</option>
                                    <option value="RM448.00">Every 2 weeks</option>
                                    <option value="RM672.00">Every 3 weeks</option>
                                    <option value="RM960.00">Permanent</option>
                                </select><br>
                                <input type="hidden" name="contractdata" id="contract_data_hidden"><br>
                                <input type="hidden" name="value" id="value">

                                <br>

                                <div class="col text-center">
                                    <div class="mt-15 pt-15">
                                        <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        $(function() {
            $("#contract_data").change(function() {
                var displayjumlah = $("#contract_data option:selected").val();
                $("#value").val(displayjumlah);
            })
        });

        $(function() {
            $("#contract_data").change(function() {
                var displayjumlah1 = $("#contract_data option:selected").text();
                $("#contract_data_hidden").val(displayjumlah1);
            })
        });
    </script>
</body>

</html>