<?php
declare(strict_types=1);

use App\Application\Controllers\User\ListUsersAction;
use App\Application\Controllers\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Application\Models\Bootstrap;
use App\Application\Controllers\PleitoController;

return function (App $app) {

    $container = $app->getContainer();
    Bootstrap::load($container);

    $app->get('/', function (Request $request, Response $response) {

        $response->getbody()->write(json_encode(\App\Application\Models\Pleito::all()->toArray()));

        //$response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/pleito', function (Group $group) use($container) {
        $group->get('', $container->get(PleitoController::class));
    });

};
