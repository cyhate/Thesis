<?php
session_start();

ini_set("upload_max_filesize", "10M");
ini_set("post_max_size", "10M");

include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['audio_data'])) {
    $uploadDir = 'Uploads/'; // Provide the desired upload directory path

    $file = $_FILES['audio_data'];
    $filename = $file['name'];
    $tmpFilePath = $file['tmp_name'];
	$error = $_FILES['audio_data']['error'];


    // Check if file upload was successful
    if ($error !== UPLOAD_ERR_OK) {
        $em = "File upload failed with error code $error.";
        header("Location: record.php?error=" . urlencode($em));
        exit;
    }


    // Move the temporary file to the desired location // Generate a unique filename to avoid conflicts
    $uniqueFilename = uniqid('recordLIVE-', true) . '.wav';
    $uploadFilePath = $uploadDir . $uniqueFilename;
    if (!move_uploaded_file($tmpFilePath, $uploadFilePath)) {
        $em = "Error moving uploaded file.";
        header("Location: record.php?error=" . urlencode($em));
        exit;
    }
		
		// Check if the user is logged in
    if ($_SESSION["loggedin"] == true){
	
    // Get user data from session
	
        $user_id = $_SESSION['userid'];
        $full_name = $_SESSION['full_name'];
        $email_address = $_SESSION["email_address"];
        $place_of_birth = $_SESSION["place_of_birth"];
        $birth_date = $_SESSION["birth_date"];
        $gender = $_SESSION["gender"];
        $country = $_SESSION["country"];
        $city = $_SESSION["city"];
        $language = $_SESSION["language"];
        $refugee = $_SESSION["refugee"];
		
       
        // Insert file path and user data into database using prepared statement
        $stmt = $con->prepare("INSERT INTO records (record_url, userid, full_name, email_address, place_of_birth, birth_date, gender, country, city, language, refugee) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisssssssss", $uniqueFilename, $user_id, $full_name, $email_address, $place_of_birth, $birth_date, $gender, $country, $city, $language, $refugee);
        if (!$stmt->execute()) {
            $em = "Error inserting file into database.";
            header("Location: record.php?error=" . urlencode($em));
            exit;
        }
    } else {
        // Insert only the
        $stmt = $con->prepare("INSERT INTO records (record_url) VALUES (?)");
        $stmt->bind_param("s", $uniqueFilename);
        if (!$stmt->execute()) {
            $em = "Error inserting file into database.";
            header("Location: record.php?error=" . urlencode($em));
            exit;
        }
    }

    $em = "File uploaded successfully.";
    header("Location: record.php?error=" . urlencode($em));
    exit;
} else {
    $em = "Invalid request.";
    header("Location: record.php?error=" . urlencode($em));
    exit;
}
?>
