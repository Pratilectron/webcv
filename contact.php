<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    // Add any additional processing or validation here

    // Prepare email message
    $to = "anas.taieb@pm.me"; // Replace with your email address
    $subject = "New Inquiry from $name";
    $email_body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";

    // Send email
    if (mail($to, $subject, $email_body)) {
        // Email sent successfully
        // Redirect to thank you page or display success message
        header("Location: thank_you.html"); // Replace with the URL of your thank you page
        exit;
    } else {
        // Failed to send email
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>
