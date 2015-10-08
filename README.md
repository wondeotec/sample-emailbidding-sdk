# Emailbidding PHP SDK Testing case
The propose of these scripts is to help you using and testing Emailbidding SDK.

## Requirements
You'll need to be install on your server the PHP 5.4 version or higher and add the package 'wondeotec/sample-emailbidding-sdk' 
to you [composer](https://getcomposer.org/) dependencies.

## Installation
You can run './install' script that will download composer and install the dependencies or you can do it by your own.

## Testing Recipient
If you want to build an Emailbidding recipient and testing if your data is valid, you can edit 
'test-anonymous-recipient-subscribe.php' and run it with:
```bash
$ php test-recipient-subscribe.php
```

There exists a similar version for testing anonymous integration:
```bash
$ php test-anonymous-recipient-subscribe.php
```

If you want to submit recipients to Emailbidding platform , your can edit 'simple-recipient-subscribe-test.php' and 
run the script with:
```bash
$ php simple-recipient-subscribe-test.php
```

In similar way to anonymous integration:
```bash
$ php simple-anonymous-recipient-subscribe-test.php
```

## Testing Webhook
To test if your server will fit with Emailbidding webhooks, you can edit script 'test-webhook.php' and running it with:
```bash
$ php test-webhook.php
```
