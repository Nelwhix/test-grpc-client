<?php

declare(strict_types=1);

namespace Nelwhix\ClientPHP;

use Chat\ChatServiceClient;
use Chat\Message;
use Grpc\ChannelCredentials;

require __DIR__ . '/../vendor/autoload.php';

$client = new ChatServiceClient('localhost:9000', [
    'credentials' => ChannelCredentials::createInsecure(),
]);

$message = new Message([
    'body' => 'Hi from PHP!'
]);

$response = $client->SayHello($message)->wait();

/** @var Message $responseMsg */
$responseMsg = $response[0];
echo "Response from server is: " . $responseMsg->getBody() . "\n";