<?php

// database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'demo';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn);	


// insert into database
if(isset($_POST['signup'])) {
	$code=$_POST['code'];
	$created_by=$_POST['created_by'];
	$created_date=$_POST['created_date'];
	mysqli_query($conn, "insert into invitation_codes (code, created_by, created_date) values ('$code', '$created_by', '$created_date')");;
}

?>