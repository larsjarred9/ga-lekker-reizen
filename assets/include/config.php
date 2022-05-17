<?php
$SETTING['root_url'] = realpath(__DIR__.'/../../');
require $SETTING['root_url'].'/vendor/autoload.php';


// Medoo database connectie
use Medoo\Medoo;

$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'ex84644_db',
    'username' => 'ex84644_db',
    'password' => 'aTj2AQ$Qx%Arh!'
]);

