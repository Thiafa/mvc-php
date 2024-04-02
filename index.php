<?php

$database = require 'src/core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require Router::load('routes.php')->direct(Request::uri());
