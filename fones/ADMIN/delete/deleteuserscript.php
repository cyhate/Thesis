<?php  
include('db.php');
include_once('../includes/functions.php'); 

if (isset($_POST['deleteuser_id'])){
	

$deleteuserid = $_POST['deleteuser_id'];



$sql = "DELETE FROM user_login WHERE userid=$deleteuserid";



if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("User Deleted!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/delete/deleteuser.php";';
    echo '</script>';

//echo "<script>window.location.href='http://localhost/fones/ADMIN/DeleteContent/deletecontent.html';</script>";	
//echo '<script>alert("Product Deleted!");</script>';
//Header('Location: http://localhost/fones/ADMIN/DeleteContent/deletecontent.html');
} else {
 echo "Error" . mysqli_error($con);
}

}

?>