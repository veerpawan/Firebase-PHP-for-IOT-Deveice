<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('fir-sampleapp-a2e33-firebase-adminsdk-26yi5-44117d553f.json')

->withDatabaseUri('https://fir-sampleapp-a2e33-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();

?>