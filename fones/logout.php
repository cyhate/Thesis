<?php
session_start();
unset($_SESSION["loggedin"]);
session_destroy();
header("Location:log-in.php");
exit();
?>