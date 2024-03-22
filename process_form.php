<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/phpmailer/src/Exception.php';
require 'assets/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/src/SMTP.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error";
        exit;
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lopez.kean.work@gmail.com';
    $mail->Password = 'lrpd jyjh edsp yoyq'; // app password 
    $mail->SMTPSecure = 'tls'; // Use TLS encryption
    $mail->Port = 587; // Use port 587 for SMTP over SSL

    $mail->setFrom('lopez.kean.work@gmail.com');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = $name;
    $mail->Body = $message;

    try {
        $mail->send();

        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
