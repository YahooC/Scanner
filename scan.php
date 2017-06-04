<?php
namespace Tico\PHP\Url;

require 'vendor/autoload.php';
use League\Csv\Reader;
use GuzzleHttp\Client;

$client = new Client();
$csv = Reader::createFromPath('urls.csv');
print_r ($csv);

foreach($csv as $csvRow){
	try {

		$httpResponse = $client->get($csvRow[0]);
		if($httpResponse->getStatusCode() >= 400){
			throw new \Exception();
		}
	} catch (\Exception $e){
		echo $csvRow[0] . "</br>";
//		echo $httpResponse->getStatusCode().'\n';
	}	
}