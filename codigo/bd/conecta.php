<?php

      $host       =     "localhost";
      $user       =     "root";
      $pass       =     "1122448816";
      $bd         =     "projeto";

      $mysqli = new mysqli($host, $user, $pass, $bd);

      if($mysqli->connect_errno){
          echo "Falha na conexao (".$mysqli->connect_errno.")".$mysqli->connect_error;
        }
