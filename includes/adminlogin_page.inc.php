<?php 
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}

// Display the form:
?>

	<section class="vh-150 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-80">
      <div class="col-10 col-lg-9 col-xl-6">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-4">
            <h2 class="mb-4 pb-2 pb-md-0 mb-md-5 col text-center">Admin Login</h2>
		
		<form action="adminlogin.php" method="post">

			    <div class="row">
                
				<div class="col-md-12 mb-4">
                  <div class="form-outline">
                    <input type="text" name="username" class="form-control form-control-lg" required>
                    <label class="form-label" for="username">Username</label>
                  </div>
                </div>
				
				</div>

				<div class="row">
				
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                    <input type="password" name="password" class="form-control form-control-lg" required>
                    <label class="form-label" for="password">Password</label>
                  </div>
                </div>
				
				</div>
			  
                
				<div class="col text-center">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Login" />
			    </div>

        </form>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</section>