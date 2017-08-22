<?php


use App\Core\{Router, Request};

require 'vendor/autoload.php';

require 'core/bootstrap.php';

require Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
