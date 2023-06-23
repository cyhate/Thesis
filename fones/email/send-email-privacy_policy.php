<?php

    $name = $_POST["pname"];
    $email = $_POST["pemail"];
    $subject = "Inquire Data";
    $message = "Message: " .$_POST["pselect"]. "\r\n \r\nUser Info:[ Email:$email, Name:$name ]";
    $headers = "From: <$email>" . "\r\n" . "Reply-To: $email" . "\r\n";

    require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    try {
        $mail = new PHPMailer();

        // Uncomment the following line for debugging purposes
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;
        $mail->Username = 'ebe92d4f564880';
        $mail->Password = 'd14ff3e553b012';

        $mail->setFrom($email, $name);
        $mail->addAddress("a.prodromou@nup.ac.cy", "AP");

        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();

        $em = "Successfully Inquired!";
        header("Location:../privacy-policy.php?error=" . urlencode($em) . "#PrivacyForm");
        exit;
    } catch (Exception $e) {
        echo "An error occurred while sending the email: " . $mail->ErrorInfo;
    }
	
?>
