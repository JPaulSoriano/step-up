<?php

// database connection
$dbhost = 'localhost';
$dbuser = 'stepified_user';
$dbpass = 'Arcreactor2021!';
$db = 'stepified';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn);	


// insert into database
if(isset($_POST['signup'])) {
	$code=$_POST['code'];
	$created_by=$_POST['created_by'];
	$created_date=$_POST['created_date'];
	mysqli_query($conn, "insert into invitation_codes (code, created_by, created_date) values ('$code', '$created_by', '$created_date')");;
}

?>