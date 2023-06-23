<?php  
require('db.php');

if (isset($_POST['user_fullname']) and isset($_POST['user_pass']) and isset($_POST['user_country']) and isset($_POST['user_email']) and isset($_POST['user_date'])){
	
// Assigning POST values to variables.
$fullname = $_POST['user_fullname'];
$password = $_POST['user_pass'];
$country = $_POST['user_country'];
$email = $_POST['user_email'];
$date = $_POST['user_date'];



$sql = "UPDATE user_login SET full_name='$fullname', email_address='$email', birth_date='$date', password='$password', country='$country' WHERE password LIKE '".password_verify($_POST["currentpass"], 'password')."%' AND email_address LIKE '".$_POST["currentemail"]."%' ";  


//SET lastname='Doe' WHERE id=2";
//$sql = "SELECT * from products WHERE name LIKE '".$_GET["search"]."%' OR description LIKE '".$_GET["search"]."%'";
//$sql = "UPDATE user_login (username, password, country, email, telephone,level) VALUES ('$username', '$password', '$country', '$email', '$telephone',0)";


if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Edited!");';
    echo 'document.location.href="http://localhost/fones/settings/account_settings.php";';
    echo '</script>';
//echo '<script>alert("User registered!");</script>';
//Header('Location: http://localhost/fones/ADMIN/edit/edituser.html');
} else {
 echo "Error" . mysqli_error($con);
}

}
?>