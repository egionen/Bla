<?php
  error_reporting(0);
  session_start();
  include_once 'conecta.php';



  if($_POST["inserir"])
  {


    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $select = $mysqli->query("SELECT * FROM login WHERE user = '$user'")or die($mysqli->error );
    $lista  = $select->fetch_assoc();
    if($lista == null)
    {



    }else{

      


    }




    //$mysqli->query("INSERT INTO login (user,pass) values('$user','$pass')")or
    //die($mysqli->error);


  }






  ?>
