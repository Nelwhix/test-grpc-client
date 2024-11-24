<?php

declare(strict_types=1);

namespace Nelwhix\ClientPHP;

use Chat\ChatServiceClient;
use Chat\Message;
use Grpc\ChannelCredentials;
use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

//$coll = new Collection(['hello', 'world']);
//
//$coll->each(function ($name) {
//    var_dump($name);
//});
//die();

$client = new ChatServiceClient('localhost:9000', [
    'credentials' => ChannelCredentials::createInsecure(),
]);

$message = new Message([
    'Body' => 'Hi from PHP!'
]);

$response = $client->SayHello($message)->wait();
var_dump($response);