<?php

require_once('src/conexao.php');

class Model
{
  use Conexao;

  public $table;
  public $structure;

  public function __construct()
  {
    $this->create_table();
  }

  public function create_table()
  {
    try {
      $conn = $this->connect();
      $stmt = $conn->prepare($this->structure);
      $stmt->execute();
      return true;
    } catch (\Throwable $th) {
      return "Erro ao criar tabela: " . $th;
    }
  }

  public function all()
  {
    try {
      $conn = $this->connect();
      $stmt = $conn->prepare("SELECT * FROM " . $this->table);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (\Throwable $th) {
      return "Erro ao realizar consulta: " . $th->getMessage();
    }
  }


  public function find($id = null)
  {
    try {
      if (is_null($id)) {
        return false;
      }
      $conn = $this->connect();
      $sql = "select * from $this->table where id = $id";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (\Throwable $th) {
      return "Erro ao realizar consulta: " . $th->getMessage();
    }
  }


  // public function store($model){

  // }
}
