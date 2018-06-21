<?php
require_once "vendor/autoload.php";
$mobile=$_POST['mobile'];

$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic('65a6a045', '78mT84nDJXMUT8ID'));     
$message = $client->message()->send([
    'to' => '918838293954',
    'from' => 'NEXMO',
    'text' => 'rohit'
]);

echo "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL;
?>
