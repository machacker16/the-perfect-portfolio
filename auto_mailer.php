<?php
// from: (http://php.net/manual/en/function.mail.php)
$to      = 'alex@hackingedu.co';
$subject = 'Reminder: HackingEDU Meeting [Core Team]';
$message = "Hey everyone!

Don't forget about the meeting tonight at 9:30pm!  Excited to see everyone! :)

Alex";
$headers = 'From: alex@alexcory.com' . "\r\n" .
    'Reply-To: alex@alexcory.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);
?>