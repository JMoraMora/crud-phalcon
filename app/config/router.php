<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', [
  'namespace'  => 'App\Controllers',
  'controller' => 'index',
  'action'     => 'index',
]);

$router->add('/tasks', [
  'namespace'  => 'App\Controllers',
  'controller' => 'tasks',
  'action'     => 'index',
]);

$router->handle($_SERVER['REQUEST_URI']);
