#!/usr/bin/env php

<?php

require_once('bootstrap.php');

use EB\SDK\RecipientSubscribe\Recipient;

// Creating a new Recipient
$recipient = new Recipient();
$recipient->setEmailAddress('freddie@domain.com');
$recipient->setCountry('UK');
$recipient->setExternalId('my_famous_list');
$recipient->setBirthDate(new \DateTime('1946-09-05'));
$recipient->setFirstName('Freddie');
$recipient->setLastName('Mercury');
$recipient->setGender('M');

try {
    // Test if my recipient has valid data
    $recipient->hasValidData();
} catch (\Exception $recipientSubscribeException) {
    // If not, then an exception will occur
    echo 'An exception occurred: ' . $recipientSubscribeException->getMessage() . PHP_EOL;

    return;
}

echo 'Data is valid!' . PHP_EOL;
