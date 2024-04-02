<?php

$database = require 'src/core/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri());
