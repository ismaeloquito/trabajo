<?php
if (!isset($_POST['submit'])) {
    //This page should not be accessed directly. Need to submit the form.
    echo 'Error; you need to submit the form!';
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if (empty($name) || empty($visitor_email)) {
    echo 'Name and email are mandatory!';
    exit();
}
$email_from = 'ismaelocrdz@gmail.com';
$email_subject = 'New form Submission';
$email_body =
    "You have received a new message  from the user $name.\n" .
    "email address: $visitor_email\n" .
    "Here is the message:\n $message" .
    ($to = 'ismaelocrdz@gmail.com');
$headers = "From: $email_from \r\n";

//Send the email
mail($to, $email_subject, $email_body, $headers);
