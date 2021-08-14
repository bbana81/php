<?php
$to      = 'bbana81@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
//print_r($headers);
//exit();
mail($to, $subject, $message, $headers);