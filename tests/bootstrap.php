<?php

use Symfony\Component\Dotenv\Dotenv;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';
ini_set('xdebug.max_nesting_level', 4000);

(new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');
