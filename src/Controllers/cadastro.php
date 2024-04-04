<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $dados  = $app['database']->find('cadastros', $id);
  $cadastro = $dados[0];
  require 'src/Views/cadastro.show.view.php';
} else {
  $cadastros = $app['database']->selectAll('cadastros');
  require 'src/Views/cadastro.view.php';
}
