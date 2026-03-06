<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "jethro256qwerty@gmail.com";   // email of the site designer
$subject = "New Contact Form Message";

$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message:\n$message";

$headers = "From: $email";

mail($to, $subject, $body, $headers);

echo "Message sent successfully!";
?>
