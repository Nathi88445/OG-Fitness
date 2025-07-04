<?php
$name =$_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = 'olgampolwini@gmail.com';
$subject = 'Qoute request from ' . $name;
$body = 'Name: ' . $name . "\nEmail: " . $email . " \nPhone: ". $phone ." \nMessage: " . $message;

mail($to, $subject, $body);
header('Location: thank-you.html');
exit;
?>