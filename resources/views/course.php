<?php
declare(strict_types=1);

/* OPERATORS */

// Switch and Match
$paymentStatus = 1;

switch ($paymentStatus) {
    case 1:
            echo 'Paid';
            break;
    case 2:
    case 3:
        echo 'Payment Declined';
        break;
    case 4:
        echo 'Pending Payment';
        break;
    default:
        echo 'Unknown Payment Status';
}

echo '<br>';

// Match
$paymentStatusDisplay = match($paymentStatus) {
    1 => 'Paid',
    2,3 => 'Payment Declined',
    0 => 'Pending Payment',
    default => 'Unknown Payment Status'
};

echo $paymentStatusDisplay;
