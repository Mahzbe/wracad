<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Replace this with your email
    $to = "mosoanat9@gmail.com";  
    $subject = "New Message from $name via Wraca United";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!');window.location.href='/index.html';</script>";
    } else {
        echo "<script>alert('Message failed to send. Please try again.');window.location.href='/index.html';</script>";
    }
}
?>
