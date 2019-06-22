<?php

require "../vendor/autoload.php";

use \Slim\App as SlimApp;

ini_set('display_errors','on');
error_reporting(E_ALL);
define('INC_ROOT',dirname(__DIR__));
session_start();

$app = new SlimApp ([
    'settings' => [
        'displayErrorDetails' => true,
    ],
]);

$c = $app->getContainer();

$c['view'] = function ($c) {
    $views_directory = INC_ROOT . '/resources/views/';
    $view = new \Slim\Views\Twig ($views_directory,[
        'cache' => false,
    ]);

    $slimRouter = $c->get('router');
    $baseUrl = $c->request->getUri();

    $slimTwigExtension = new \Slim\Views\TwigExtension ($slimRouter,$baseUrl);
    $view->addExtension($slimTwigExtension);

    return $view;
};

$c['config'] = function ($c) {
    if (file_exists(INC_ROOT . '/mode')) {
        $app_mode = file_get_contents(INC_ROOT . '/mode');
        $app_mode = strtolower(trim($app_mode));
        $valid_modes = ['development','production'];
        if (in_array($app_mode,$valid_modes))
            $config_file = sprintf(INC_ROOT . '/config/%s.php',$app_mode);
        else
            $config_file = INC_ROOT . '/config/production.php';
    }
    else
        $config_file = INC_ROOT . '/config/production.php';
    
    return new \App\Util\Config ($config_file);
};

require "../app/database.php";
require "../app/controllers.php";
require "../routes/web.php";
require "../routes/api.php";