<?php
/*
 * This file creates a payment and tells the PSP what webhook URL to use for updates
 * After creating the payment, we get a URL to send the customer to in order to pay at the PSP
 */
$payment = [
    'order_id' => 123,
    'amount' => 25.00,
    'description' => 'Test payment',
    'redirect_url' => 'http://webhook.example.vagrant/redirect.php',
    'webhook_url' => 'https://39741ffc.ngrok.io/webhook.php',
];

$payment = $paymentProvider->createPayment($payment);
header("Location: " . $payment->getPaymentUrl());
