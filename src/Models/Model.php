<?php

require_once('src/conexao.php');

class Model
{
  use $conexao;
  public $table;
  private $conn;
  private $sql_query;

  public function __construct($sql, $table = null)
  {
    $this->conn = $conexao;
    $this->$table = $table;
    $this->sql_query = $sql;
  }

  public function create_table()
  {
    try {
      $stmt = $this->conn->prepare($this->sql_query);
      $stmt->execute();
      return "Tabela criada com sucesso.";
    } catch (\Throwable $th) {
      return "Erro ao criar tabela: " . $th;
    }
  }

  public function all()
  {
    try {
      $query = "SELECT * FROM $this->table"; // Adicione um espaço após "FROM"
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


      return $result;
    } catch (\Throwable $th) {
      return "Erro ao realizar consulta: " . $th->getMessage(); // Altere de $th para $th->getMessage() para obter a mensagem de erro correta
    }
  }


  // public function store($model){

  // }
}
