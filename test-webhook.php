#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use EB\SDK\Webhook\PayloadFactory;
use EB\SDK\Webhook\Webhook;

// ** WEBHOOK ** //
// Creating an Emailbdding webhook object
$webhook = new Webhook();

try {
    // Posting the and hard bounce to my endpoint 'https://your.server/endpoint' and dumping the result
    $response = $webhook->post(
        PayloadFactory::createHardBounce('email@domain.com', '654321'),
        'http://your.server/endpoint'
    );
} catch (\Exception $webhookException) {
    echo 'An exception occurred: ' . $webhookException->getMessage() . PHP_EOL;

    return;
}

echo 'Success';
