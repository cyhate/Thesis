<?php  
require('db.php');

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Assigning POST values to variables.
    $email_address = mysqli_real_escape_string($con, $_POST['user_email_address']);
    $password = mysqli_real_escape_string($con, $_POST['user_password']);

    // CHECK FOR THE RECORD FROM TABLE
	
	
    $stmt = mysqli_prepare($con, "SELECT * FROM `user_login` WHERE email_address=?");
    mysqli_stmt_bind_param($stmt, 's', $email_address);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    
    /**
     * Set cookie if user clicked remember
     */

    if ($count == 1 && password_verify($password, $row['password'])){

        session_start();

        // Store data in session variables
        $_SESSION["session_id"] = bin2hex(random_bytes(16));
        $_SESSION["loggedin"] = true;
		$_SESSION["userid"] = $row['userid'];
		$_SESSION["full_name"] = $row['full_name'];
        $_SESSION["email_address"] = $row['email_address'];
		$_SESSION["place_of_birth"] = $row['place_of_birth'];
		$_SESSION["birth_date"] = $row['birth_date'];
		$_SESSION["password"] = $row['password'];
		$_SESSION["gender"] = $row['gender'];
		$_SESSION["country"] = $row['country'];
		$_SESSION["city"] = $row['city'];
		$_SESSION["language"] = $row['language'];
		$_SESSION["refugee"] = $row['refugee'];
		$_SESSION["terms"] = $row['terms'];
        $_SESSION["level"] = $row['level'];

        if(!empty($_POST["rememberusername"])) {
            setcookie ("rememberusernamecookie", $_POST["rememberusername"], time()+ (10 * 365 * 24 * 60 * 60), '/', 'example.com', true, true); //set a cookie called rememberusername with name rememberusernamecookie to the current time + 10 years
        } else { //leave cookie empty
            if(isset($_COOKIE["rememberusernamecookie"])) {
                setcookie ("rememberusernamecookie", "", time() - 3600, '/', 'example.com', true, true);
            }
        }

        /*
         * redirect according to user level
        */ 
        if ($row['level'] == 0) {
            header('Location: index.php');
			exit;
        } else {
            header('Location: indexadmin.php');
			exit;
        }
    } /* else {
        echo '<script>alert("Wrong Login");</script>';
		exit;
        //header('Location: log-in.php');
        //echo "Email or password seems to be incorrect!";
        //header("location: ../log-in.php?error=wronglogin"); 
    }*/
	
	$is_invalid = true;
}
?>