#!/usr/bin/env php

<?php

require_once('bootstrap.php');

use EB\SDK\Webhook\PayloadFactory;
use EB\SDK\Webhook\Webhook;
use EB\SDK\RecipientSubscribe\RecipientSubscribe;
use EB\SDK\RecipientSubscribe\RecipientFactory;

// ** WEBHOOK ** //
// Creating an Emailbdding webhook object
$webhook = new Webhook();

// Posting the and hard bounce to my endpoint 'https://your.server/endpoint' and dumping the result
var_dump($webhook->post(
    PayloadFactory::createHardBounce('email@domain.com', '654321'),
    'https://your.server/endpoint'
));

// ** RECIPIENT SUBSCRIBE ** //
// Creating a recipient subscribe object with my credentials
$recipientSubscribe = new RecipientSubscribe('YOUR_PUBLISHER_API_KEY', 'YOUR_PUBLISHER_API_SECRET');

// Posting an simple recipient (minimal information) to Emailbidding API and dumping the result
var_dump($recipientSubscribe->post(
    array(RecipientFactory::createSimpleRecipient('email@domain.com', 'FR')),
    851,
    'my_best_database'
));

// Posting an anonymous recipient to Emailbidding (NOTE: the email address WILL NOT be sent to Emailbidding)
// The email address 'email@domain.com' will be transformed in '7328fddefd53de471baeb6e2b764f78a'
var_dump($recipientSubscribe->post(
    array(RecipientFactory::createSimpleAnonymousRecipient('email@domain.com', 'FR')),
    851,
    'my_best_database'
));
