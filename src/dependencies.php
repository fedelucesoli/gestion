<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
// $container['view'] = function ($c) {
//     $settings = $c->get('settings')['renderer'];
//     return new Slim\Views\PhpRenderer($settings['template_path']);
// };

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) {
    return $capsule;
};
//
// $container[App\WidgetController::class] = function ($c) {
//     $view = $c->get('view');
//     $logger = $c->get('logger');
//     $table = $c->get('db')->table('table_name');
//     return new \App\WidgetController($view, $logger, $table);
// };

$container['AuthController'] = function($container){
  return new \Src\Controllers\Auth\AuthController($container);
};

$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['auth'] = function($container){
  return new \Src\Auth($container);
};

$container['view'] = function ($c) {
    $settings = $c->get('settings')['renderer'];

    $view = new \Slim\Views\Twig($settings["template_path"]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('layout.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));
    $view->getEnvironment()->addGlobal('auth', [
      'check' => $c->auth->check(),
      'user' => $c->auth->user(),
    ]);
    $view->getEnvironment()->addGlobal('flash', $c->flash);

    return $view;
};


// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['HomeController'] = function($container){
  return new \Src\Controllers\HomeController($container);
};
$container['AdminController'] = function($container){
  return new \Src\Controllers\AdminController($container);
};
