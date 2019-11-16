<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use App\Application\Repositories\PleitoRepositoryImpl;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {

///////////////////////////////////////////// REPOSITORIES DEPENDENCIES //////////////////////////////////////////////

    $containerBuilder->addDefinitions([

        PleitoRepositoryImpl::class => function (ContainerInterface $container) {
            return new PleitoRepositoryImpl(new \App\Application\Models\Pleito());
        }

     ]);
};