<?php
session_start();

ini_set("upload_max_filesize", "10M");
ini_set("post_max_size", "10M");

if (isset($_POST['submit']) && isset($_FILES['my_record'])) {
    include "db.php";
    $record_name = $_FILES['my_record']['name'];
    $tmp_name = $_FILES['my_record']['tmp_name'];
    $error = $_FILES['my_record']['error'];

    // Check if file upload was successful
    if ($error !== UPLOAD_ERR_OK) {
        $em = "File upload failed with error code $error.";
        header("Location: record.php?error=" . urlencode($em)."#upload");
        exit;
    }

    // Validate file extension
    $record_ex = pathinfo($record_name, PATHINFO_EXTENSION);
    $record_ex_lc = strtolower($record_ex);
    $allowed_exs = array("mp3", 'm4a', 'wav', '3gp', 'm3u', 'ogg');
    if (!in_array($record_ex_lc, $allowed_exs)) {
        $em = "You can't upload files of this type";
        header("Location: record.php?error=" . urlencode($em)."#upload");
        exit;
    }

    // Generate unique filename and move file to upload directory
    $new_record_name = uniqid("recordupload-", true). '.'.$record_ex_lc;
    $record_upload_path = 'Uploads/'.$new_record_name;
    if (!move_uploaded_file($tmp_name, $record_upload_path)) {
        $em = "Error moving uploaded file.";
        header("Location: record.php?error=" . urlencode($em)."#upload");
        exit;
    }

	if ($_SESSION["loggedin"] == true){
	
    // Get user data from session
    
    $user_id = $_SESSION['userid'];
    $full_name = $_SESSION['full_name'];
    //$loggedin = $_SESSION["loggedin"];
    $email_address = $_SESSION["email_address"];
    $place_of_birth = $_SESSION["place_of_birth"];
	$birth_date = $_SESSION["birth_date"];
	$gender = $_SESSION["gender"];
	$country = $_SESSION["country"];
	$city = $_SESSION["city"];
	$language = $_SESSION["language"];
	$refugee = $_SESSION["refugee"];


		// Insert file path and user data into database using prepared statement
		$stmt = $con->prepare("INSERT INTO records(record_url, userid, full_name, email_address, place_of_birth, birth_date, gender, country, city, language, refugee) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisssssssss", $new_record_name, $user_id, $full_name, $email_address, $place_of_birth, $birth_date, $gender, $country, $city, $language, $refugee);
		if (!$stmt->execute()) {
			$em = "Error inserting file into database.";
			header("Location: record.php?error=" . urlencode($em)."#upload");
			exit;
		}
	} else {
		$stmt = $con->prepare("INSERT INTO records(record_url) VALUES(?)");
		$stmt->bind_param("s", $new_record_name);
		if (!$stmt->execute()) {
			$em = "Error inserting file into database.";
			header("Location: record.php?error=" . urlencode($em)."#upload");
			exit;
		} 
	}
		
	$em = "File uploaded successfully.";
    header("Location: record.php?error=" . urlencode($em)."#upload");
    exit;
} else {
	$em = "Invalid request.";
    header("Location: record.php?error=" . urlencode($em)."#upload");
	exit;
}
?>