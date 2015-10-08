#!/usr/bin/env php

<?php

require_once('bootstrap.php');

use EB\SDK\Webhook\PayloadFactory;
use EB\SDK\Webhook\Webhook;

// ** WEBHOOK ** //
// Creating an Emailbdding webhook object
$webhook = new Webhook();

// Posting the and hard bounce to my endpoint 'https://your.server/endpoint' and dumping the result
var_dump($webhook->post(
    PayloadFactory::createHardBounce('email@domain.com', '654321'),
    'http://requestb.in/szk6whsz'
));
