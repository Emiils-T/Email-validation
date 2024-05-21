<?php

$emailToValidate = (string)readline("Enter email address to validate: ");
$apiKey = "ema_live_GhcbYPfvrjLqQqWsHNEWVt3tzCX66b9iaq9HQ6LA";
$api = "https://api.emailvalidation.io/v1/info?apikey=$apiKey&email=$emailToValidate";
$emailData = file_get_contents($api);
$emailData = json_decode($emailData);

if ($emailData->reason == 'valid_mailbox') {
    echo "$emailToValidate is a valid email address\n";
} else {
    echo "$emailToValidate is not a valid email address\n";
}
