<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->map(['GET', 'POST'], '/login', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $body = $request->getParsedBody();
    $body['isLogged'] = ($body['email'] === 'toto@gmail.com' && $body['password'] === 'pass');

    // Render index view
    return $this->view->render($response, 'login.twig', [
        'body' => $body
    ]);
})->setName('login');

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'index.twig', [
        'args' => $args
    ]);
})->setName('index');