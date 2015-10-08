#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\RecipientSubscribe\Recipient;
use EB\SDK\RecipientSubscribe\RecipientFactory;

try {
    // Getting hash from the email address
    $hash = RecipientFactory::getEmailAddressHash('lady.gaga@domain.com');

    // Creating a new Recipient
    $recipient = new Recipient();
    $recipient->setHash($hash);

    // In anonymous mode, setting the provider domain is mandatory
    $recipient->setProvider('domain.com');

    // Country is always mandatory
    $recipient->setCountry('US');

    // Setting other fields
    $recipient->setExternalId('my_famous_list_1');
    $recipient->setBirthDate(new \DateTime('1986-03-28'));
    $recipient->setFirstName('Lady');
    $recipient->setLastName('Gaga');
    $recipient->setGender('F');

    // Test if my recipient has valid data
    $recipient->hasValidData();
} catch (\Exception $recipientSubscribeException) {
    // If not, then an exception will occur
    echo 'An exception occurred: ' . $recipientSubscribeException->getMessage() . PHP_EOL;

    return;
}

echo 'Data is valid!' . PHP_EOL;
