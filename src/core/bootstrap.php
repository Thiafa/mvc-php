<?php

$app = [];

$app['config'] = require 'config.php';

require 'src/core/Router.php';
require 'src/core/Request.php';
require 'src/core/database/Connection.php';
require 'src/core/database/QueryBuilder.php';

$app['database'] = new QueryBuider(
  Connection::make($app['config']['database'])
);
