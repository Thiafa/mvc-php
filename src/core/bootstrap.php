<?php

$app = [];

$app['config'] = require 'config.php';

require 'src/core/Router.php';
require 'src/core/Request.php';
require 'src/core/Database/Connection.php';
require 'src/core/Database/QueryBuilder.php';

$app['database'] = new QueryBuider(
  Connection::make($app['config']['database'])
);
