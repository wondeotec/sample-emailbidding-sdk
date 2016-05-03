#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\SuppressionImport\SuppressedRecipient;

try {
    // Creating a new Suppressed Recipient
    $suppressedRecipient = new SuppressedRecipient();
    $suppressedRecipient->setValue('freddie@domain.com');

    // Test if my recipient has valid data
    $suppressedRecipient->hasValidData();
} catch (\Exception $suppressedRecipientException) {
    // If not, then an exception will occur
    echo 'An exception occurred: ' . $suppressedRecipientException->getMessage() . PHP_EOL;

    return;
}

echo 'Data is valid!' . PHP_EOL;
