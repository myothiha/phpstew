<?php

use App\Core\Router;
use App\Core\Request;
use App\Models\Order;

use Illuminate\Database\Capsule\Manager as Capsule;

require "vendor/autoload.php";
require "core/bootstrap.php";
require "config/database.php";

$router = Router::load('app/routes.php');

$router->direct(
	Request::uri(),
	Request::method()
);

