<?php

$to = "wpoceanmarketing@gmail.com"; // Receiver email address
$from = $_POST['email']; // Sender's email address
$sender_name = $_POST['name'];
$phone = $_POST['phone']; // Phone is received here
$subject = $_POST['subject']; // Subject is received here
$note = $_POST['note']; // Message body or note

// Make sure no empty values are sent in the message
if (!empty($sender_name) && !empty($from) && !empty($phone) && !empty($subject) && !empty($note)) {
    $subject_line = "Form submission from " . $sender_name;
    $message = "You have received a message from: " . $sender_name . "\n";
    $message .= "Email: " . $from . "\n";
    $message .= "Phone: " . $phone . "\n";
    $message .= "Subject: " . $subject . "\n\n";
    $message .= "Message: \n" . $note . "\n";

    $headers = 'From: ' . $from;

    // Send email
    if (mail($to, $subject_line, $message, $headers)) {
        echo 'Success'; // Can be handled as a success response for the AJAX call
    } else {
        echo 'Failure'; // If the mail fails to send
    }
} else {
    echo 'Error: Missing required fields';
}
?>
