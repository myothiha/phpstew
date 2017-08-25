<?php

use Illuminate\Database\Capsule\Manager as Capsule;

use App\Core\App;

$config = App::get('config')['database'];

$capsule = new Capsule;
$capsule->addConnection(
    array(
        'driver'    => $config['connection'],
        'host'      => $config['host'],
        'database'  => $config['name'],
        'username'  => $config['username'],
        'password'  => $config['password'],
        'charset'   => $config['charset'],
        'collation' => $config['collation'],
        'prefix'    => $config['prefix'],
    ),
    "default"
);
$capsule->setAsGlobal();
$capsule->bootEloquent();