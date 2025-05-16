<?php

use App\Http\Controllers\WelcomeController;

$app['router']->get('/', function() {
  return '<h1>路由成功！</h1>';
});

$app['router']->get('/welcome', WelcomeController::class . '@index');