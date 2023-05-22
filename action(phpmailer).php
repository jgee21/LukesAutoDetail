<?php
// Include PHPMailer library
require_once 'path/to/PHPMailer/src/PHPMailer.php';
require_once 'path/to/PHPMailer/src/SMTP.php';
require_once 'path/to/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Get the form data
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_username';
    $mail->Password = 'your_password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Set the email content
    $mail->setFrom($email, $name);
    $mail->addAddress('lukesautodetailing.oh@gmail.com');
    $mail->Subject = 'New message from '.$name;
    $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    $mail->send();

    // Redirect to thank you page
    header('Location: /thank-you.html');
    exit;
} catch (Exception $e) {
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}
?>
