<?php  
include('db.php');
include_once('../includes/functions.php'); 

if (isset($_POST['recordID'])){
	


$recordid = $_POST['recordID'];





$sql = "DELETE FROM records WHERE id=$recordid";



if (mysqli_query($con,$sql)) {
	echo '<script type="text/javascript">';
    echo 'alert("Record Deleted!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/DeleteContent/deletecontent.php";';
    echo '</script>';

//echo "<script>window.location.href='http://localhost/fones/ADMIN/DeleteContent/deletecontent.php';</script>";	
//echo '<script>alert("Product Deleted!");</script>';
//Header('Location: http://localhost/fones/ADMIN/DeleteContent/deletecontent.php');
} else {
 echo "Error" . mysqli_error($con);
}

}

?>