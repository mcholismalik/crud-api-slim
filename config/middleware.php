<?php
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

$app->add(function ($req, $res, $next)
{
    return $next($req, $res)
            ->withHeader("Access-Control-Allow-Origin","*")
            ->withHeader("Access-Control-Allow-Headers","Content-type, Authorization")
            ->withHeader("Access-Control-Allow-Methods","GET,POST,PUT,DELETE")
            ->withHeader("content-type","application/json");
});