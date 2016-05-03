#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\SuppressionImport\SuppressedRecipientSuppression;
use EB\SDK\SuppressionImport\SuppressedRecipientFactory;
use \EB\SDK\SuppressionImport\Suppression;


// ** SUPPRESSED RECIPIENT SUPPRESSION ** //
// Creating a suppression recipient object with my credentials
$suppressedRecipientSuppression = new SuppressedRecipientSuppression('YOUR_PUBLISHER_API_KEY', 'YOUR_PUBLISHER_API_SECRET');

// Posting a suppressed recipient to Emailbidding API and dumping the result

$wasRecipientSuppressedWithSuccess = false;
try {
    $wasRecipientSubmittedWithSuccess = $suppressedRecipientSuppression->post(
        array(SuppressedRecipientFactory::createSimpleSuppressedRecipient('email@domain.com'),
            SuppressedRecipientFactory::createSimpleSuppressedRecipient('email2@domain.com')),
        851,
        'my_best_database',
        Suppression::EMAIL_SUPPRESSION_TYPE
    );
} catch (\Exception $recipientSuppressionException) {
    echo 'An exception occurred: ' . $recipientSuppressionException->getMessage() . PHP_EOL;

    return;
}

if ($wasRecipientSuppressedWithSuccess) {
    echo 'Success!' . PHP_EOL;

    return;
}

echo 'Failure!' . PHP_EOL;
