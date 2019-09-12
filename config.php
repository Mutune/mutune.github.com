
	<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "tony");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define('ROOT_PATH', dirname(__FILE__));
	define('BASE_URL', 'http://localhost/complete-blog-php/');
?>