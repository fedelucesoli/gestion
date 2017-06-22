<?php

namespace Src\Controllers\Auth;

use Slim\Views\Twig as View;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Src\Models\User as User;
use Src\Models\Item as Item;
use Src\Auth as Auth;


class AuthController
{
  protected $container;

   // constructor receives container instance
   public function __construct($container) {
       $this->container = $container;
   }

  public function index($request, $response){

    $items = Item::all();
    $user = User::where('id', 1)->first();

    return $this->container->view->render($response, 'auth/registro.twig');

  }

  public function getRegistro($request, $response)
  {
    return $this->container->view->render($response, 'auth/registro.twig');

  }
  public function postRegistro($request, $response)
  {
    $user = User::create([
      'email' => $request->getParam('email'),
      'usuario' => $request->getParam('usuario'),
      'password' => password_hash($request->getParam('password'), PASSWORD_BCRYPT),
    ]);
    $this->container->flash->addMessage('info', 'Registro exitoso');
    return $response->withRedirect($this->container->router->pathFor('home'));
  }

  public function getLogin($request, $response)
  {
    return $this->container->view->render($response, 'auth/login.twig');
  }

  public function postLogin($request, $response)
  {
    $auth = $this->container->auth->intento($request->getParam('usuario'), $request->getParam('password'));
    if (!$auth) {
      return $response->withRedirect($this->container->router->pathFor('auth.login'));
    }

    if ($auth) {
      $this->container->flash->addMessage('info', 'Usuario logueado');
      return $response->withRedirect($this->container->router->pathFor('admin.home'));
    }
      return $response->withRedirect($this->container->router->pathFor('auth.login'));
  }

  public function getLogout($request, $response){
    $this->container->auth->logout();
    $this->container->flash->addMessage('info', 'Sesion cerrada');

    return $response->withRedirect($this->container->router->pathFor('auth.login'));
  }

}
