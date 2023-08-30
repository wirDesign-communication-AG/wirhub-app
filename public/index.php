<?php

use App\Kernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    if ('prod' === $context['APP_ENV']) {
        $_SERVER['HTTPS'] = 'on';
    }

    return new Kernel($context['APP_ENV'], (bool)$context['APP_DEBUG']);
};

