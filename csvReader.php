<?php 
require 'vendor/autoload.php';
use League\Csv\Reader;
use GuzzleHttp\Client;

//open File
$csv = Reader::createFromPath('data.csv');

//Fetch One Row Example
$headers = $csv->fetchOne();
print_r($headers);

//Offset Example
$res = $csv->setOffset(2)->setLimit(2)->fetchAll();
print_r($res);
?>