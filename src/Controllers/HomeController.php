<?php

namespace Src\Controllers;

use Slim\Views\Twig as View;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Src\Models\Item as Item;


class HomeController
{
  protected $container;

   // constructor receives container instance
   public function __construct($container) {
       $this->container = $container;
   }

  public function index($request, $response){

    $items = Item::with('categoria')->get();

    // foreach ($items as $item) {
    //
    //     $item['categoria'] = $item->categoria->nombre;
    //     var_dump($item);die();
    //     $items[$item];
    //     // $items[$item]= $item->categoria->nombre;
    // }
    $data['items'] = $items;

    return $this->container->view->render($response, 'items.twig', $data);

  }
  public function item($request, $response, $args){

    $item = Item::find($args['id']);

    $data['item'] = $item;

    return $this->container->view->render($response, 'item.twig', $data);

  }

}
