<?php
/*
 * This file gets called by the PSP and in the $_POST they submit an 'id'
 * We can use this ID to get the latest status from the PSP and update our internal systems afterward
 */
 
$paymentId = $_POST['id'];
$paymentInfo = $paymentProvider->getPayment($paymentId);
$status = $paymentInfo->getStatus();

// Perform actions in here to update your system
if ($status === 'paid') {
    ..
}
elseif ($status === 'cancelled') {
    ..
}
