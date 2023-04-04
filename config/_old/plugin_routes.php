<?php
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $workingDir = getcwd ();
    $path = sprintf('%s/plugins/vendor/wirdesign-communication-ag/wirhub-kws-variety-guide/Controller/', $workingDir);
    if(true === is_dir($path)) {
        $routes->import($path, 'annotation')->prefix('pluginbar/kws-variety-guide');
    }
};
