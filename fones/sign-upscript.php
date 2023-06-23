<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    // Assigning POST values to variables.
    $full_name = $_POST['user_full_name'];
    $email_address = $_POST['user_email_address'];
    $place_of_birth = $_POST['user_place_of_birth'];
    $birth_date = $_POST['user_birth_date'];
    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $gender = $_POST['user_gender'];
    $country = $_POST['user_country'];
    $city = $_POST['user_city'];
    $language = $_POST['user_language'];
    $refugee = $_POST['user_refugee'];
    $terms = $_POST['sterms'];
    $level = 0;
	
	if (empty($full_name) || empty($email_address) || empty($birth_date) || empty($password) || empty($gender) || empty($city) || empty($terms)) {
    exit();
	header('Location: sign-up.php');
}
/*
if ( ! filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}
if (strlen($_POST["user_password"]) < 8) {
    die("Password must be at least 8 characters");
}
if ( ! preg_match("/[a-z]/i", $_POST["user_password"])) {
    die("Password must contain at least one letter");
}
if ( ! preg_match("/[0-9]/", $_POST["user_password"])) {
    die("Password must contain at least one number");
}
*/
	
    // Prepare and bind the SQL statement
    $stmt = $con->prepare("INSERT INTO user_login (full_name, email_address, place_of_birth, birth_date, password, gender, country, city, language, refugee, terms, level) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssi", $full_name, $email_address, $place_of_birth, $birth_date, $password, $gender, $country, $city, $language, $refugee, $terms, $level);
    
    // Execute the statement
    if ($stmt->execute()) {
        header('Location: log-in.php');
    } else {
        echo "Error" . $stmt->error;
    }
}
?>