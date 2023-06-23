<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MetaShop &copy;</title>
        <!-- Favicon-->
        <link rel="icon" href="http://localhost/MetaShop/Images/tablg.png" type="image/icon type">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    	

<?php 
include('db.php');


if (!empty($_GET['submit'])) {
	


$sql ="SELECT * from user_login";

echo "<table>";
echo "<th>User ID:</th>";
echo "<th>User Name:</th>";
echo "<th>User Email:</th>";
echo "<th>User Place of birth:</th>";
echo "<th>User Birth date:</th>";
echo "<th>User Gender:</th>";
echo "<th>User Country:</th>";
echo "<th>User City:</th>";
echo "<th>User Language:</th>";
echo "<th>User Refugee:</th>";
echo "<th>User Terms:</th>";
echo "<th>User Level:</th>";


if ($result=mysqli_query($con,$sql)) {
 while ($row=mysqli_fetch_row($result))
 {
 echo "<tr><td>",$row[0], "</td><td>",$row[1], "</td><td>",$row[2], "</td><td>",$row[3], "</td><td>",$row[4], "</td><td>",$row[6], "<tr><td>",$row[7], "</td><td>",$row[8], "</td><td>",$row[9], "</td><td>",$row[10], "</td><td>",$row[11], "</td><td>",$row[12], "</td><td>",$row[13], "</td></tr>";
 }
 echo "<table>";
 echo "<br><br><br><br><br><br><br><br><br><br><br>";
 mysqli_free_result($result);
} 

} 

?>

