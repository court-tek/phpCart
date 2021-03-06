<?php

namespace Cart\Controllers;

use Slim\Views\Twig;
use Cart\Models\Product;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CartController
{
  public function index(Request $request, Response $response, Twig $view, Product $product)
  {
    return $view->render($response, 'cart/index.twig');

  }

  public function add()
  {

  }
}
