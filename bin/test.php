<?php
require_once 'SseClient.php';

// example callback function
function someCallbackFunction($message){
    print_r($message);
}
$url = 'https://eventsource.firebaseio-demo.com/.json';

$client = new SseClient($url);

// returns generator
$messages = $client->getMessages();

// blocks until new message arrive
foreach ($messages as $message) {
    // pass message to callback function
    someCallbackFunction($message);
}