<?php

  include_once 'conecta.php';

  $aluno  =   $_POST['aluno'];
  $user   =   $_POST['user'];
  $pass   =   $_POST['pass'];
  //se inserir
  if(isset($_POST['inserir'])){

    $mysqli->query("INSERT INTO logins (user,pass) values($user,$pass)")or die
    ("erro na inserção de logins");

  }//fim se inserir
  //se listar
  if(isset($_POST['listar'])){

    $result = $mysqli->query("SELECT * FROM logins WHERE idlogins = $aluno")or
    die("erro na listagem de logins");
    $lista  = $result->fetch_assoc();

  }//fim se listar
  //se deletar
  if(isset($_POST['delete'])){

    $mysqli->query("DELETE FROM logins WHERE idlogins = $aluno")or die("erro na
    remocao de login");

  }//fim se delete
  //se editar
  if(isset($_POST['editar'])){

    $mysqli->query("UPDATE logins SET user = $user, pass = $pass WHERE idlogins
      = $aluno")or die("erro na edicao de logins");

  }//fim se editar 
 ?>
