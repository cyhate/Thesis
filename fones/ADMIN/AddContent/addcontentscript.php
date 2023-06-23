<?php
ini_set("upload_max_filesize", "10M");
include_once('../includes/functions.php'); 

if (isset($_POST['submit']) && isset($_FILES['my_record'])) {
    include "db.php";
    $record_name = $_FILES['my_record']['name'];
    $tmp_name = $_FILES['my_record']['tmp_name'];
    $error = $_FILES['my_record']['error'];

    // Check if file upload was successful
    if ($error !== UPLOAD_ERR_OK) {
        $em = "File upload failed with error code $error.";
        header("Location: addcontent.php?error=" . urlencode($em));
        exit;
    }
    // Validate file extension
    $record_ex = pathinfo($record_name, PATHINFO_EXTENSION);
    $record_ex_lc = strtolower($record_ex);
    $allowed_exs = array("mp3", 'm4a', 'wav', '3gp', 'm3u', 'ogg');
    if (!in_array($record_ex_lc, $allowed_exs)) {
        $em = "You can't upload files of this type";
        header("Location: addcontent.php?error=" . urlencode($em));
        exit;
    }
    // Generate unique filename and move file to upload directory
    $new_record_name = uniqid("record-", true). '.'.$record_ex_lc;
    $record_upload_path = 'UploadsAdmin/'.$new_record_name;
    if (!move_uploaded_file($tmp_name, $record_upload_path)) {
        $em = "Error moving uploaded file.";
        header("Location: addcontent.php?error=" . urlencode($em));
        exit;
    }

    $user_id = $_POST['user_id'];
    $full_name = $_POST['user_fullname'];
    $email_address = $_POST["user_email"];
    $place_of_birth = $_POST["user_place_of_birth"];
	$birth_date = $_POST["user_birth_date"];
	$country = $_POST["user_country"];
	$city = $_POST["user_city"];
	$gender = $_POST["user_gender"];
	$language = $_POST["user_language"];
	$refugee = $_POST["user_refugee"];


		// Insert file path and user data into database using prepared statement
		$stmt = $con->prepare("INSERT INTO records(record_url, userid, full_name, email_address, place_of_birth, birth_date, country, city, gender, language, refugee) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisssssssss", $new_record_name, $user_id, $full_name, $email_address, $place_of_birth, $birth_date, $country, $city, $gender, $language, $refugee);
		if (!$stmt->execute()) {
			$em = "Error inserting file into database. echo $stmt->error;";
			header("Location: addcontent.php?error=" . urlencode($em));
			exit;
		}
	
		
	echo '<script type="text/javascript">';
    echo 'alert("Record Added!");';
    echo 'document.location.href="'; echo getBaseUrl(); echo'ADMIN/AddContent/addcontent.php";';
    echo '</script>';
    exit;
} else {
    header("Location: addcontent.php");
    exit;
}
?>