
<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "root", "blogtest");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH','/wamp/www/blogtest');
	define('BASE_URL', 'http://localhost:8081/');
?>