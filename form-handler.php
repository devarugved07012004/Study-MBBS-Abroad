<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    $to = "your-email@example.com"; 
    $subject = "New MBBS Abroad Application";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCountry: $country";
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Application submitted successfully.";
    } else {
        echo "Error submitting the form.";
    }
}
?>
