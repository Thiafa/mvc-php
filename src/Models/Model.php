<?php

// require 'src/core/Database/QueryBuilder.php';
class Model extends QueryBuider
{

  public $table;
  public $structure;

  public function __construct()
  {
    var_dump($this);
    $this->create_table();
  }

  public function create_table()
  {
    try {
      $statement = $this->pdo->prepare($this->structure);
      $statement->execute();
      return $statement->fetchAll(PDO::FETCH_CLASS);
    } catch (\Throwable $th) {
      return "Erro ao criar tabela: " . $th;
    }
  }
}
