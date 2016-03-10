<?php
  include_once 'conecta.php';


  //crud Estado
  if($_POST["dif"] = 1){
    //recebe parametros
    $estado =   $_POST['estado'];
    $nome   =   $_POST['nome'];
    $abrev  =   $_POST['abrev'];
    //se inserir
    if(isset($_POST["inserir"])){

      $mysqli->query("INSERT INTO estados (nome,abrev) values($nome,$abrev)")
      or die ("erro na insercao de estado");

    }//fim se inserir
    //se listar
    if(isset($_POST["listar"])){

      $result =   $mysqli->query("SELECT * FROM estados")or die("erro na
      listagem de estados");
      $lista  =   $result->fetch_assoc();

    }//fim se listar
    //se deletar
    if(isset($_POST["deletar"])){

      $mysqli->query("SET foreign_key_checks = 0");
      $mysqli->query("DELETE FROM estados WHERE idestados = $estado")or die("
      erro na remocao de estado");

    }//fim se deletar
    //se editar
    if(isset($_POST["editar"])){

      $mysqli->query("UPDATE estados SET nome = $nome , abrev = $abrev WHERE
      idestados = $estado")or die("erro na edicao de estado");

    }//fim se editar
  }//fim se estado
  //se cidade
  if($_POST["dif"] = 2){
    //recebe parametros
    $cidade   =   $_POST['cidade'];
    $nome     =   $_POST['nome'];
    $estado   =   $_POST['estado'];
    //se inserir
    if(isset($_POST["inserir"])){

      $mysqli->query("INSERT INTO cidades (nome,id_estado) values($nome,$estado)
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

      $mysqli->query("UPDATE cidades SET nome = $nome, id_estado = $estado")or
      die("erro na edicao de cidades");

    }//fim se deletar
  }/*fim se cidade*/
  else{
    //se nao receber parametro
    echo "ERRO NO PARAMETRO";
  }//fim else

 ?>
