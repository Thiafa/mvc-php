<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  switch ($_GET['url']) {
    case 'cadastros/visualizar':
      $dados = $app['database']->find('cadastros', $id);
      $cadastro = $dados[0];
      require 'src/Views/cadastro.show.view.php';
      break;
    case 'cadastros/excluir':
      $dados = $app['database']->delete('cadastros', $id);
      $cadastros = $app['database']->selectAll('cadastros');
      header("Location: /cadastros");
      break;
    default:
      require 'src/Views/not.found.php';
  }
} elseif ($_GET['url'] == 'cadastros') {
  $cadastros = $app['database']->selectAll('cadastros');
  require 'src/Views/cadastro.view.php';
} else {
  require 'src/Views/not.found.php';
}
