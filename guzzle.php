<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$res = $client->request('GET', 'https://api.github.com/user', [
    'auth' => ['yahooc', 'zero200199']
]);
echo $res->getStatusCode();
$httpResponse = $client->get('http://localhost/salary.html');

//print_r ($httpResponse->getStatusCode());
print_r ($httpResponse);
