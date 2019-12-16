<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST ['MESSAGE'];


$email_from = 'osborn.taylor@gmail.com';

$email_subject = "Photo Email";

$email_body = "User Name: $name.\n."
                "User Email: $visitor_email.\n"
                    "User Message: $message.\n";


$to = "osborn.taylor@gmail.com";

$headers = "From: $email_from \r\n";

$headers .="Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");






?>