<?php 
// This page defines two functions used by the login/logout process.

/* This function determines an absolute URL and redirects the user there.
 * The function takes one argument: the page to be redirected to.
 * The argument defaults to index.php.
 */
function redirect_user ($page = 'index.php') {

	// Start defining the URL...
	// URL is http:// plus the host name plus the current directory:
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	
	// Remove any trailing slashes:
	$url = rtrim($url, '/\\'); 
	
	// Add the page:
	$url .= '/' . $page;
	
	// Redirect the user:
	header("Location: $url");
	exit(); // Quit the script.

} // End of redirect_user() function.


/* This function validates the form data (the username and password).
 * If both are present, the database is queried.
 * The function requires a database connection.
 * The function returns an array of information, including:
 * - a TRUE/FALSE variable indicating success
 * - an array of either errors or the database result
 */
function check_login($dbc, $username = '', $password = '') {

	$errors = array(); // Initialize error array.

	// Validate the username:
	if (empty($username)) {
		$errors[] = 'You forgot to enter your username.';
	} else {
		$username = mysqli_real_escape_string($dbc, trim($username));
	}

	// Validate the password:
	if (empty($password)) {
		$errors[] = 'You forgot to enter your password.';
	} else {
		$password = mysqli_real_escape_string($dbc, trim($password)); 
	}

	if (empty($errors)) { // If everything's OK.

		// Retrieve the user_id and f_name for that username/password combination:
		$q = "SELECT admin_id, username, password FROM adminlogin WHERE username='$username' AND password=('$password')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		// Check the result:
		if (mysqli_num_rows($r) == 1) {

			// Fetch the record:
			$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
	
			// Return true and the record:
			return array(true, $row);
			
		} else { // Not a match!
			$errors[] = 'The username and password entered do not match those on file.';
		}
		
	} // End of empty($errors) IF.
	
	// Return false and the errors:
	return array(false, $errors);

} // End of check_login() function.