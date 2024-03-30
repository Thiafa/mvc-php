<?php require('src/Routes/web.php') ?>

<form action="<?= Route::route('user.index') ?>" method="POST">
  <label for="nome">Nome</label>
  <input type="text" id="nome" name="nome">
  <input type="submit" value="Entrar">
</form>