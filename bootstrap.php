<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'food',
    'username'  => 'root',
    'password'  => '',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
