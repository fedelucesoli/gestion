<?php
namespace Src\Middleware;

class AuthMiddleware {
  protected $container;

   // constructor receives container instance
   public function __construct($container) {
       $this->container = $container;
   }

  public function __invoke($request, $response, $next){

    if (!$this->container->auth->check()) {
      $this->container->flash->addMessage('error', "No estas logueado");
      return $response->withRedirect($this->container->router->pathFor('auth.login'));
    }

    $response = $next($request, $response);
    return $response;
  }
}
