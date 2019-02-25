<?php

require 'vendor/autoload.php';

use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

$settings = require __DIR__ .'/config/settings.php';
$app = new Slim\App($settings);

require __DIR__ . '/config/database.php';  
require __DIR__ . '/config/middleware.php';  

$app->get('/', function (Request $req, Response $res, $args) {
    return $res->write("Welcome to Slim!");   
});

$app->group('/user', function () use($app) {
    $this->get('[/]', "\Facade\UserFacade:getAll");
    $this->get('/{id}', "\Facade\UserFacade:getById");
    $this->post('[/]', "\Facade\UserFacade:register");
    $this->put('/{id}', "\Facade\UserFacade:update");
    $this->delete('/{id}', "\Facade\UserFacade:delete");
});

$app->run();