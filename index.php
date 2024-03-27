<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Calculadora de IMC</title>
</head>

<body class="bg-dark">
  <h1 class="title">Calculadora de IMC</h1>
  <form action="post.php" method="POST" class="card">
    <div class="box">
      <label for="altura" class="label">Altura</label>
      <input type="text" id="altura" name="altura" class="input">
    </div>
    <div class="box">
      <label for="peso" class="label">Peso</label>
      <input type="text" id="peso" name="peso" class="input">
    </div>
    <button type="submit" class="button">Enviar</button>
  </form>



  <?php
  include('base.php')
  ?>
</body>

</html>