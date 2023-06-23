<?php
$con = mysqli_connect("localhost","fones1","fonespass1","fones");

if (mysqli_connect_errno()) {
    echo "Failed";
} else {
    echo "";
}

$sql = "SELECT user_login.userid, user_login.full_name FROM user_login";

$result = $con->query($sql);

if ($result === false) {
    echo "Error executing query: " . $con->error;
} elseif ($result->num_rows > 0) {
    $userid = array();
    $fullname = array();
    $i = 0;

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $userid[$i] = $row["userid"];
        $fullname[$i] = $row["full_name"];
        $i++;
    }
} else {
    echo "0 results";
}

$con->close();


    ?>