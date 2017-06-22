<?php

namespace Src\Controllers;

use Slim\Views\Twig as View;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Src\Models\Item as Item;


class AdminController
{
  protected $container;

   // constructor receives container instance
   public function __construct($container) {
       $this->container = $container;
   }

  public function index($request, $response){

    $variables = array(
      'adminnav' => true
    );
    return $this->container->view->render($response, 'admin-add.twig', $variables);

  }
  public function addItem($request, $response){
    return true;
  }

}
