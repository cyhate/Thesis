<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
        exit;
    }

    // Create email headers
    $to = "a.prodromou@nup.ac.cy.com"; // Replace with your own email address
    $subject = "New Newsletter Subscription";
    $message = "Email: $email";
    $headers = "From: Newsletter Subscription <$email>" . "\r\n" . "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for subscribing to our newsletter!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
	
		$em = "Successfully registered.";
    header("Location:../index.php?error=" . urlencode($em)."#newsletter");
    exit;
} else {
	$em = "Invalid request.";
    header("Location:../index.php?error=" . urlencode($em)."#newsletter");
	exit;
}
?>