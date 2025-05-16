<?php

use Illuminate\Support\Fluent;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager;

require __DIR__.'/../vendor/autoload.php';

//$app = new Illuminate\Container\Container;
$app = new Container;


with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

# 啟動Eloquent ORM模組並進行相關設定
$manager = new Manager();
$manager->addConnection(require '../config/database.php');
$manager->bootEloquent();

require __DIR__.'/../app/Http/routes.php';

$request = Illuminate\Http\Request::createFromGlobals();
$response = $app['router']->dispatch($request);

$response->send();

