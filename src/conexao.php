<?php
try {
  $sql['DB_HOST'] = "";
  $sql['DB_PORT'] = "";
  $sql['DB_DATABASE'] = "";
  $sql['DB_USERNAME'] = "";
  $sql['DB_PASSWORD'] = "";
  $conexao = new PDO("mysql:host=" . $sql['DB_HOST'] . ";dbname=" . $sql['DB_DATABASE'], $sql['DB_USERNAME'], $sql['DB_PASSWORD']);
  $conexao = mysqli_connect($sql['DB_HOST'], $sql['DB_USERNAME'], $sql['DB_PASSWORD'], $sql['DB_DATABASE'], $sql['DB_PORT']);
} catch (\Throwable $th) {
  echo $th;
}
