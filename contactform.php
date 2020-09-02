<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Enable verbose debug output
    $mail->isSMTP();     // Send using SMTP
    $mail->Host       = 'stmp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true;   // Enable SMTP authentication
    $mail->Username   = 'momohmayowa14@gmail.com';     // SMTP username
    $mail->Password   = 'M@yowatimi1';  // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // From email address and name
    $mail->setFrom($_POST['email'], $_POST['name']);

    // To email addresss
    $mail->addAddress('momohmayowa14@gmail.com');   // Add a recipient
    // $mail->addReplyTo('reply@example.com', 'Reply'); // Recipent reply address
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    $mail->AltBody = $_POST['message'];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}