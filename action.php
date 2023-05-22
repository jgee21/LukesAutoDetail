<?php
// Get the form data
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

// Set up the email
$to = 'lukesautodetailing.oh@gmail.com';
$subject = 'New message from ' . $name;
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email\r\nReply-To: $email\r\n";

// Send the email and check for success
if (mail($to, $subject, $body, $headers)) {
    // Email was sent successfully
    header('Location: thankyou.php?success=true');
} else {
    // Email failed to send
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    header('Location: thankyou.php?success=false');
}
exit;

?>
