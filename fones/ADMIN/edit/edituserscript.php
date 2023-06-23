<?php  
require('db.php');
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

$sql = "UPDATE user_login SET full_name='$fullname', password='$encrypted_password', country='$country', place_of_birth='$place_of_birth', birth_date='$birth_date', email_address='$email', city='$city', gender='$gender', language='$language', refugee='$refugee', terms='$terms', level='$level' WHERE userid LIKE '".$_POST["currentid"]."%' AND email_address LIKE '".$_POST["currentemail"]."%' ";



//SET lastname='Doe' WHERE id=2";
//$sql = "SELECT * from products WHERE name LIKE '".$_GET["search"]."%' OR description LIKE '".$_GET["search"]."%'";
//$sql = "UPDATE user_login (username, password, country, email, telephone,level) VALUES ('$username', '$password', '$country', '$email', '$telephone',0)";


if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Edited!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/edit/edituser.php";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: http://localhost/fones/ADMIN/edit/edituser.html');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>