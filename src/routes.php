<?php
// Routes
use Src\Middleware\AuthMiddleware;

$app->get('/', 'HomeController:index')->setName('home');
$app->get('/item/{id}', 'HomeController:item')->setName('item');

$app->get('/auth/registro', 'AuthController:getRegistro')->setName('auth.registro');
$app->post('/auth/registro', 'AuthController:postRegistro');

$app->get('/entrar', 'AuthController:getLogin')->setName('auth.entrar');
$app->get('/auth/login', 'AuthController:getLogin')->setName('auth.login');
$app->post('/auth/login', 'AuthController:postLogin');

$app->group('', function(){

  $this->get('/admin', 'AdminController:index')->setName('admin.home');

  $this->get('/admin/item/agregar', 'AdminController:addItem')->setName('admin.addItem');
  $this->post('/admin/item/agregar', 'AdminController:addItem');

  $this->get('/auth/logout', 'AuthController:getLogout')->setName('auth.logout');

})->add(new AuthMiddleware($container));
