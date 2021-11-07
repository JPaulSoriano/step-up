<?php

// database connection
$dbhost = 'localhost';
$dbuser = 'stepified_user';
$dbpass = 'Arcreactor2021!';
$db = 'stepified';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn);	

// create function for generate random password
function generate_password($len = 8){
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$code = substr( str_shuffle( $chars ), 0, $len );
	return $code;
}

// insert into database
if(isset($_POST['generate'])) {
	$code = generate_password();
	mysqli_query($conn, "insert into invitation_codes (created_by, created_date, code) values (1, now(), '$code')");
	header("location: create.php");
}

?>
