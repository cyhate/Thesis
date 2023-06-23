<?php
	$name = $_POST["name"];
    $email = $_POST["nemail"];
    $subject = "New Newsletter Subscription";
    $message = "Subscription Email: $email";
    $headers = "From: Newsletter Subscription <$email>" . "\r\n" . "Reply-To: $email" . "\r\n";

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 2525;
$mail->Username = 'ebe92d4f564880';
$mail->Password = 'd14ff3e553b012';


$mail->setFrom($email, $name);
$mail->addAddress("a.prodromou@nup.ac.cy", "AP");

$mail->Subject = $subject;
$mail->Body = $message;
$mail->Headers = $headers;

$mail->send();

	$em = "Successfully registered.";
    header("Location:../index.php?error=" . urlencode($em)."#newsletter");
    exit;

?>