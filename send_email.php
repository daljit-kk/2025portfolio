<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Your email address
    $subject = "New Message from Contact Form";
    $body = "You have received a new message from $name ($email):\n\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href = '/';</script>";
    } else {
        echo "<script>alert('Message could not be sent. Please try again later.'); window.location.href = '/';</script>";
    }
}
?>
