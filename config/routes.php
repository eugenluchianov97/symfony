<?php

// config/routes.php

use App\Controller\HomeController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('home', '/test')->controller([HomeController::class, 'index'])->methods(['GET']);

};
