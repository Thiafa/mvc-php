<?php include('../base.php') ?>

<form action="<?php Route::route('user.store') ?>" method="post">
  <label for="nome">Nome</label>
  <input type="text" id="nome" name="nome">
  <input type="submit" value="Enter">
</form>