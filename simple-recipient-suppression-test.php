#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\RecipientSuppress\RecipientSuppress;
use EB\SDK\RecipientSuppress\RecipientFactory;
use EB\SDK\RecipientSuppress\Suppression;


// ** SUPPRESSED RECIPIENT SUPPRESSION ** //
// Creating a suppression recipient object with my credentials
$recipientSuppress = new RecipientSuppress('YOUR_PUBLISHER_API_KEY', 'YOUR_PUBLISHER_API_SECRET');

// Posting a suppressed recipient to Emailbidding API and dumping the result
$wasRecipientSuppressedWithSuccess = false;
try {
    $wasRecipientSuppressedWithSuccess = $recipientSuppress->post(
        array(RecipientFactory::createSimpleSuppressedRecipient('email@domain.com')),
        851,
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
