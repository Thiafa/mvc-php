<?php

require('src/Models/Model.php');


class User extends Model
{
  public $table = 'users';
  public function __construct()
  {
    parent::__construct($this->table);
  }
}
