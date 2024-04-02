<?php

$app = [];

$app['config'] = require 'config.php';

// require 'src/Routes/Router.php';
// require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
echo "<pre>";
$teste = Connection::make($app['config']['database']);
var_dump($teste);
echo "</pre>";
// $app['database'] = new QueryBuider();
