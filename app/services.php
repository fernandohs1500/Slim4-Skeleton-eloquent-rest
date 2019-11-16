<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use App\Application\Services\PleitoServiceImpl;
use Psr\Container\ContainerInterface;

///////////////////////////////////////////// SERVICES DEPENDENCIES //////////////////////////////////////////////

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([

        PleitoServiceImpl::class => function (ContainerInterface $container)  {
            return new PleitoServiceImpl($container->get(\App\Application\Repositories\PleitoRepositoryImpl::class));
        }

    ]);
};