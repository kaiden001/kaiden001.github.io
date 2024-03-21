<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];

// Construct email message
$to = 'lopez.kean.work@gmail.com';
$subject = 'New message from your website';
$body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";

// Set headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    // If mail sent successfully
    echo 'Message sent successfully!';
} else {
    // If mail sending failed
    echo 'Failed to send message. Please try again later.';
}
