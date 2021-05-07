<?php

$router = app()->router;

$router->group(['prefix' => 'v1', 'namespace' => 'Codeex\\IssueTracking\\Http\\Controllers'], function () use ($router) {
    $router->group(['prefix' => 'it', 'middleware' => 'auth'], function () use ($router) {
    });
});


