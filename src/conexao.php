<?php
trait Conexao
{
  public function connect()
  {
    try {
      $sql['DB_HOST'] = "localhost";
      $sql['DB_PORT'] = "3306";
      $sql['DB_DATABASE'] = "projetodb";
      $sql['DB_USERNAME'] = "";
      $sql['DB_PASSWORD'] = "";
      $conexao = new PDO("mysql:host=" . $sql['DB_HOST'] . ";dbname=" . $sql['DB_DATABASE'], $sql['DB_USERNAME'], $sql['DB_PASSWORD']);
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexao;
    } catch (PDOException $e) {
      echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
      exit;
    }
  }
}
