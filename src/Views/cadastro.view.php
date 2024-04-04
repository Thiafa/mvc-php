<?php require('src/Views/partials/head.php'); ?>
<div class="my-4">
  <h1 class="text-center">Cadastro</h1>
  <table class="table-info m-auto">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="2">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cadastros as $key => $cadastro) { ?>
        <tr>
          <td> <?= $cadastro->id ?></td>
          <td> <?= $cadastro->nome ?></td>
          <td> <?= $cadastro->email ?></td>
          <td>
          <td><a href="cadastro/visualizar?id=<?= $cadastro->id ?>"> Ver</a></td>
          <td><a href="cadastro/excluir?id=<?= $cadastro->id ?>"> Excluir</a></td>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php require('src/Views/partials/footer.php'); ?>