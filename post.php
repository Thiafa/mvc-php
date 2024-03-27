<?php


// require('src/Models/User.php');
require('src/conexao.php');
require('src/Models/User.php');

$user = new User("CREATE TABLE IF NOT EXISTS USERS (ID int NOT NULL AUTO_INCREMENT,NOME varchar(255),email varchar(50),PRIMARY KEY (ID))", $conexao);
// $user->create_table();
$a = $user->all();

var_dump($a);
