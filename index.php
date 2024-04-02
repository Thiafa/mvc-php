<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'src/Routes/routes.php';

$router()->direct();
