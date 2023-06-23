<?php  
include('db.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {
	

//$deleteuserid = $_POST['deleteuser_id'];
$deleteuserpass = $_POST['deleteuser_pass'];
$deleteuseremail = $_POST['deleteuser_email'];


$sql = "DELETE FROM user_login WHERE password LIKE '".password_verify($deleteuserpass, 'password')."%' AND email_address LIKE '".$deleteuseremail."%' ";



if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Deleted!");';
    echo 'document.location.href="http://localhost/fones/settings/account_settings.php";';
    echo '</script>';

//echo "<script>window.location.href='http://localhost/fones/ADMIN/DeleteContent/deletecontent.html';</script>";	
//echo '<script>alert("Product Deleted!");</script>';
//Header('Location: http://localhost/fones/ADMIN/DeleteContent/deletecontent.html');
} else {
 echo "Error" . mysqli_error($con);
}

}

?>