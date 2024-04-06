<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "cove.enquiry@outlook.com";
    $subject = "New Subscription";
    $message = "Email: " . $email;
    $headers = "From: " . $email;
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Subscribed successfully!');</script>";
    } else {
        echo "<script>alert('Failed to subscribe. Please try again later.');</script>";
    }
}
?>
