<?php include_once("base.php") ?>

<a href="<?php Route::route('user.index') ?>">Users</a>
</br>
<a href="<?= Route::route('user.create') ?>">Criar</a>

<!-- <form action="<= Route::route('user.index') ?>" method="POST"> -->
<!-- <label for="nome">Nome</label>
<input type="text" id="nome" name="nome">
<input type="submit" value="Entrar">
</form> -->