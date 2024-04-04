<?php include('src/Views/partials/head.php'); ?>
<div class="my-4">
  <h1 class="text-center">Cadastro</h1>
  <table class="table-info m-auto">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="1">Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <?= $cadastro->id ?></td>
        <td> <?= $cadastro->nome ?></td>
        <td> <?= $cadastro->email ?></td>
        <td>
        <td>
          <a href="/cadastros/excluir?id=<?= $cadastro->id ?>">Excluir</a>
        </td>
        </form>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<?php include('src/Views/partials/footer.php'); ?>