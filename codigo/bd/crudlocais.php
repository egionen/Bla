<?php
  include_once 'conecta.php';



    $cidade   =   $_POST['cidade'];
    $nome     =   $_POST['nome'];


    //se inserir
    if(isset($_POST["inserir"])){

      $mysqli->query("INSERT INTO cidades (nome) values($nome)
      ")or die("erro na inserçao de cidade");

    }//fim se inserir
    //se listar
    if(isset($_POST["listar"])){

      $result = $mysqli->query("SELECT * FROM cidades")or die("erro na listagem
      de cidades");
      $lista  = $result->fetch_assoc();

    }//fim se listar
    //se deletar
    if(isset($_POST["deletar"])){

      $mysqli->query("SET foreign_key_checks = 0");
      $mysqli->query("DELETE FROM cidades WHERE idcidades = $cidade")or die("
      erro na remocao de cidade");

    }//fim se deletar
    //se editar
    if(isset($_POST["editar"])){

      $mysqli->query("UPDATE cidades SET nome = $nome")or
      die("erro na edicao de cidades");

    }//fim se deletar



 ?>
