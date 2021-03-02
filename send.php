<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$cname = $_POST['cname'];
$product = $_POST['product'];
$tprice = $_POST['tprice'];
$message = $_POST['message'];

$email_from = 'Accredited Energy Website';
$email_subject = 'Quotation Request';
$email_body = "Name: $fname.\n".
               "Email: $email.\n".
               "Company Name: $cname.\n".
               "Product: $product.\n".
               "Traget Price: $tprice.\n".
               "Message: $message.\n";

$to = "sales@accreditedeng.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: ./confirm.html")
?>