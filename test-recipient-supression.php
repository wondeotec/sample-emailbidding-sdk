#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\RecipientSuppress\Recipient;

try {
    // Creating a new Suppressed Recipient
    $recipient = new Recipient();
    $recipient->setValue('freddie@domain.com');

    // Test if my recipient has valid data
    $recipient->hasValidData();
} catch (\Exception $suppressedRecipientException) {
    // If not, then an exception will occur
    echo 'An exception occurred: ' . $suppressedRecipientException->getMessage() . PHP_EOL;

    return;
}

echo 'Data is valid!' . PHP_EOL;
