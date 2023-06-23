<?php

if (!isset($_SESSION['level']) || $_SESSION['level'] != "1") {
    header("Location: index.php");
    exit(0);
}

?>