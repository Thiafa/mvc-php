<?php

require('src/Models/Model.php');


class User extends Model
{
  public $table = 'tapetes';

  public $structure = "
  CREATE TABLE IF NOT EXISTS USERS (ID int NOT NULL AUTO_INCREMENT,NOME varchar(255),email varchar(50),PRIMARY KEY (ID))
  ";
}
