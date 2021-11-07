<?php

// database connection
$dbhost = 'localhost';
$dbuser = 'stepified_user';
$dbpass = 'Arcreacto2021!';
$db = 'stepified';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn);	


// insert into database
if(isset($_POST['signup'])) {
	$code=$_POST['code'];
	mysqli_query($conn, "insert into invitation_codes (code, created_by, created_date, used_by, used_date) values ('$code', '1', now(), '0', '0')");
}

?>