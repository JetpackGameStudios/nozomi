<?php

use Slim\Http\Request;
use Slim\Http\Response;

spl_autoload_register(function ($classname) {
    require(__DIR__ . "/../nozomi/classes/" . $classname . ".php");
});

// Routes
$app->get('/[{name:.*}]', function (Request $request, Response $response, array $args) {
    $conf = new Configuration();
    if ($args) $name = $args['name'];
    else $name = 'index';
    $content = new Content();
    if ($conf->ConfigExists() == false) return $this->nozomiRenderer->render($response, 'installconfirm.html');
    else return $content->RenderPage($response, $this, $name);
});
