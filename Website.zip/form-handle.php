<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'southeasterncollege.com';

$email_subject= 'New Form Submission';

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Subject: $subject.\n".
"User Email: $message.\n".;

$to = 'adrianecalvin@gmail.com'

$headers = "From: $email_form\r\n";

$headers .= "Reply-To $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");






?>