<?php  
include('db.php');
include_once('../includes/functions.php'); 

$sql = "DELETE FROM user_login";

if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("All Users Deleted!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/delete/deleteuser.php";';
    echo '</script>';
} else {
    echo "Error: " . mysqli_error($con);
}

?>
