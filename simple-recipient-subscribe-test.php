#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\RecipientSubscribe\RecipientSubscribe;
use EB\SDK\RecipientSubscribe\RecipientFactory;

// ** RECIPIENT SUBSCRIBE ** //
// Creating a recipient subscribe object with my credentials
$recipientSubscribe = new RecipientSubscribe('YOUR_PUBLISHER_API_KEY', 'YOUR_PUBLISHER_API_SECRET');

// Posting an simple recipient (minimal information) to Emailbidding API and dumping the result

$wasRecipientSubmittedWithSuccess = false;
try {
    $wasRecipientSubmittedWithSuccess = $recipientSubscribe->post(
        array(RecipientFactory::createSimpleRecipient('email@domain.com', 'FR')),
        851,
        'my_best_database'
    );
} catch (\Exception $recipientSubscribeException) {
    echo 'An excepetion occurred: ' . $recipientSubscribeException->getMessage() . PHP_EOL;

    return;
}

if ($wasRecipientSubmittedWithSuccess) {
    echo 'Success!' . PHP_EOL;

    return;
}

echo 'Failure!' . PHP_EOL;
