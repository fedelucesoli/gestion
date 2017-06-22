<?php
namespace Src;

use Src\Models\User as User;

class Auth{
  protected $container;

   // constructor receives container instance
   public function __construct($container) {
       $this->container = $container;
   }
  public function user(){
    return User::find($_SESSION['usuario']);
  }

  public function check(){
    return isset($_SESSION['usuario']);
  }

  function logout(){
    unset($_SESSION['usuario']);
  }

  public function intento($usuario, $password){

    $user = User::where('usuario', $usuario)->first();

    if (!$user) {
      $this->container->flash->addMessage('warning', 'No existe el usuario');

      return false;
    }

    if (password_verify($password, $user->password)) {
      $_SESSION['usuario'] = $user->id;
      return true;
    }
    $this->container->flash->addMessage('warning', 'Contraseña incorrecta');

    return false;

  }
}
