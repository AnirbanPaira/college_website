<?php
$name = $_PPOST['name'];
$visitor_email = $_PPOST['email'];
$subject = $_PPOST['subject'];
$number = $_PPOST['number'];
$message = $_PPOST['message'];

$email_from = '2002lucky30kail@gmail.com';
$email_subject ='new form submission';
$email_body="user name: $name\n".
            "user Email:$visitor_email.\n".
            "subject:$subject.\n"
            "user number:$number.\n"
            "user message:$message.\n"


$to = 'anirbanpaira123@gmail.com'


$headers =  "From:$email_from \r\n";

$headers =  "Reply_To:$visitor_email\r\n";

mail($to.$email_subject,$email_body,$email_body,$headers);

header("location: contact.html");

?>