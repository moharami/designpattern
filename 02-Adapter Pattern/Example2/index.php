<?php

include_once 'MailgunEmailAdapter.php';


$emailAdapter = new MailgunEmailAdapter('apikey', 'domain', 'from');

$emailAdapter->send(
    'username@emailservice.com',
    'Hi! Thanks for signing up!',
    'Here is your verification code 12345'
);

dd('Email sent!');