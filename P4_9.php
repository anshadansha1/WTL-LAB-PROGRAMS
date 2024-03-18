<!--Write the PHP script to send an email.
In order to send follow below steps:
1) Go to "Manage Your google account ->Security->Less secure app access" and  Enable it.
2)Install phpMailer :
C:\wamp64\www\phplab> composer require phpmailer/phpmailer -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>

<h2>Email Sender</h2>

<form method="post">
    <label for="email">Your Email Address:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Your Email Password:</label><br>
    <input type="password" id="password" name="password" required><br>
    <label for="to">Recipient's Email Address:</label><br>
    <input type="email" id="to" name="to" required><br>
    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" required><br>
    <label for="body">Message Body:</label><br>
    <textarea id="body" name="body" rows="4" required></textarea><br>
    <button type="submit">Send Email</button>
</form>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

    // Include PHPMailer autoloader
    require 'vendor/autoload.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // SMTP configuration for Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email; // Sender's email address
    $mail->Password = $password; // Sender's email password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    // Sender and recipient
    $mail->setFrom($email);
    $mail->addAddress($to);

    // Email subject and body
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Send email
    if($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }
}
?>

</body>
</html>
