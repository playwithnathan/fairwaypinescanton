<?php

$name = $_POST['contact_name'];
$email = $_POST['contact_email'];
$phone = $_POST['contact_phone'];
$address= $_POST['contact_address'];
$message = $_POST['contact_message'];

$to = "web2@fairwaypinescanton.com";
$email_subject = "Fairway Pines Website Submission: $name";
$email_body = "A new person has requested to be added to the mailing list:\n\n Name: $name\n Email: $email\n Phone: $phone\n Address: $address\n Message: $message";
$headers = "From: mailinglist@fairwaypinescanton.com\n";

mail($to,$email_subject,$email_body,$headers);
header('Location: /thankyou');

?>
