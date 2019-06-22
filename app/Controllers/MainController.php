<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class MainController extends Controller
{
    public function home (Request $request,Response $response)
    {
        $title = "Home";
        return $this->container->view->render($response,'main/home.twig',compact('title'));
    }
}