<?php
// My first database connection
$con = mysqli_connect("localhost","fones1","fonespass1","fones");


if (mysqli_connect_errno())
	{
	echo "Failed";
	}
	else {
	echo "Success";
	}
?>
