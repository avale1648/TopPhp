<?php

use FirstProject\App\Controller\Test;
use FirstProject\App\Response\Response;
use FirstProject\App\Response\HtmlResponse;
use FirstProject\App\Response\JsonResponse;
use FirstProject\App\Request\Request;

class Factorial
{
  public function index():Response
  {
    //$controller = new Test();
    //die();
    return new HtmlResponse('управление индекс');
  }

  public function custom(Request $request): Response
  {
    return new JsonResponse(['custom' => 'Функция custom']);
    //echo 'управление custom';
    //echo '<br>';
    //print_r($request);
    //return 'управление custom';
  }
}

//$factorial = new Factorial();

//echo $factorial(5);
