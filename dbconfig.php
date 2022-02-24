<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('abc.json')

->withDatabaseUri('abc');
$database = $factory->createDatabase();

?>
