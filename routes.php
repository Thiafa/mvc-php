<?php

$router->define([
  '' => 'src/controllers/index.php',
  'cadastros' => 'src/controllers/cadastro.php',
  'cadastros/visualizar' => 'src/controllers/cadastro.php',
  'cadastros/excluir' => 'src/controllers/cadastro.php',
]);
