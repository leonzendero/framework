<?php

// dirname(__DIR__) - exit onto this folder
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \webshop\App();

// debug(\webshop\Router::getRoutes());