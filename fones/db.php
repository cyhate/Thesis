<?php
// My database connection
$host = "localhost";
$dbusername = "fones1";
$dbpassword = "fonespass1";
$dbname = "fones";

$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

/* if (mysqli_connect_errno()) {
	echo "Failed";
	} else {
	echo "Success";
	} */
?>

