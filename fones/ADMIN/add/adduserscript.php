<?php  
//require('../includes/db.php');
include('db.php');
//require('db.php');

include_once('../includes/functions.php'); 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
// Assigning POST values to variables.
$fullname = $_POST['user_fullname'];
//$password = $_POST['user_pass'];
$encrypted_password = md5($_POST['user_pass']);
$country = $_POST['user_country'];
$place_of_birth = $_POST['user_place_of_birth'];
$birth_date = $_POST['user_birth_date'];
$email = $_POST['user_email'];
$city = $_POST['user_city'];
$level = $_POST['user_level'];
$gender = $_POST['user_gender'];
$language = $_POST['user_language'];
$refugee = $_POST['user_refugee'];
$terms = $_POST['user_terms'];


$sql = "INSERT INTO user_login (full_name, password, place_of_birth, birth_date, country, email_address , city, gender, language, refugee, terms, level) VALUES ('$fullname', '$encrypted_password', '$place_of_birth', '$birth_date', '$country', '$email', '$city', '$gender', '$language', '$refugee', '$terms', '$level')";

if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Registered!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/add/adduser.php";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: login.php');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>




<!---?php  
/**include('db.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']) and isset($_POST['user_country']) and isset($_POST['user_email']) and isset($_POST['user_telephone'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$encrypted_password = md5($_POST['user_pass']);
$country = $_POST['user_country'];
$email = $_POST['user_email'];
$telephone = $_POST['user_telephone'];


$sql = "INSERT INTO user_login (username, password, country, email, telephone, level) VALUES ('$username', '$encrypted_password', '$country', '$email', '$telephone',0)";

if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User registered!");';
    echo 'document.location.href="http://localhost/fones/ADMIN/add/adduser.html";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: http://localhost/Metashop/fones/add/adduser.html');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>