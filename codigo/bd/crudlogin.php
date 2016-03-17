<?php
  error_reporting(0);
  session_start();
  include_once 'conecta.php';

  $aluno  =   $_POST['aluno'];
  $user   =   $_POST['user'];
  $pass   =   $_POST['pass'];
  //se inserir
  if(isset($_POST['inserir'])){
    $result = $mysqli->query("SELECT * FROM logins WHERE user = $user");
    $lista = $result->fetch_assoc();
    if($lista == null){
    $mysqli->query("INSERT INTO logins (user,pass) values($user,$pass)")or die
    ("erro na inserção de logins");
  }else{

    echo "erro";
  }

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
  if(isset($_POST['entrar'])){

    $result = $mysqli->query("SELECT * FROM logins WHERE user = '$user' and pass = '$pass'")or die($mysqli->error);
    $resultlogin = $result->fetch_assoc();



    if($resultlogin != null){
      $id = $resultlogin['idlogins'];
      $result = $mysqli->query("SELECT * FROM alunos WHERE matricula = $id")or die($mysqli->error);
      $resultaluno = $result->fetch_assoc();
      $_SESSION['user'] = $user;
      $_SESSION['pass'] = $pass;
      $_SESSION['aluno'] = $resultaluno['nome'];
      echo "<script>window.location='../paginas/home.php'</script>";

    }else{

      echo "<script>window.location='../paginas/login.php?error=1'</script>";

    }
  }
 ?>
