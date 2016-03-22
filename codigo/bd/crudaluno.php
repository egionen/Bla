<?php
session_start();
include_once '../paginas/cabecalho.php';
//inclui conexao
include_once 'conecta.php';
//matricula do aluno

//se inserir
if(isset($_POST['inserir'])){
  //parametros
  $nome   =   $_POST['nome'];
  $email  =   $_POST['email'];
  $nasc   =   $_POST['nasc'];

  //INSERT

  $result = $mysqli->query("SELECT * FROM alunos WHERE email = '$email'")or die($mysqli->error);
  $lista = $result->fetch_assoc();
  if($lista == null){
    $mysqli->query("INSERT INTO alunos (nome,nasc,email) values('$nome','$nasc','$email')")
    or die($mysqli->error);
    $result = $mysqli->query("SELECT * FROM alunos WHERE email = '$email'")or die($mysqli->error);
    $result = $result->fetch_assoc();
    $_SESSION["matricula"] = $result['matricula'];
    echo "<script>location.href = '../paginas/cadastro.php'</script>";}else{

      echo "<script>location.href = '../paginas/login.php#error'</script>";
    }

  }
  //se listar
  if(isset($_POST['listar'])){
    //SELECT
    $result = $mysqli->query("SELECT * FROM alunos WHERE matricula = $aluno")or die("erro na listagem");
    $result = $result->fetch_assoc();
  }
  //se deletar
  if(isset($_POST['deletar'])){
    //DELETE
    $mysqli->query("SET foreign_key_checks = 0");
    $mysqli->query("DELETE FROM alunos WHERE matricula = $aluno")or die("erro na remoção");
    echo "<script>window.location.href = '../paginas/login.php?delete=1'</script>";
  }
  //se editar
  if(isset($_POST['editar'])){
    //parametros
    $aluno  =   $_POST['aluno'];
    $nome   =   $_POST['nome'];
    $email  =   $_POST['email'];
    $cidade =   $_POST['cidade'];
    $nasc =   $_POST['nasc'];


    //UPDATE
    $mysqli->query("UPDATE alunos SET nome = '$nome',email = '$email',id_cidade = '$cidade',nasc = '$nasc' WHERE matricula = $aluno")or die("<script>
    swal({
    title: 'Good job!',
    text: 'You clicked the button!',
    type: 'success',
    confirmButtonText: 'Yes, delete it!',
    closeOnConfirm: false
  },
  function(isConfirm){
    if(isConfirm){
      window.location.href '../paginas/cadastro.php'
    };
  })
    </script>");
    echo "<script>window.location.href = '../paginas/cadastro.php'</script>";}




?>
