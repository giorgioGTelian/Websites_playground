<?php
$from    = 'david@yourwebsite.com';
$to      = 'nobody@example.com';
$subject = 'Your Subject';
// Plain message
$message = 'Hello! How are you today?';
// HTML message
$message = '<p>Hello! How are you today?</p>';
$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'Return-Path: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
mail($to, $subject, $message, $headers);
?>
