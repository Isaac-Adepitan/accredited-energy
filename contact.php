<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'Accredited Energy Website';
$email_subject = 'Contact Form';
$email_body = "Name: $fname.\n".
               "Email: $email.\n".
               "Message: $message.\n";

$to = "isaacadepitan@yahoo.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: ./confirm.html")
?>