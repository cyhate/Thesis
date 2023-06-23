<?php  
include('db.php');
include_once('../includes/functions.php'); 

$sql = "DELETE FROM records";

if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">';
    echo 'alert("All Records Deleted!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/DeleteContent/deletecontent.php";';
    echo '</script>';
} else {
    echo "Error: " . mysqli_error($con);
}

?>
