<?php
include_once '../bd/conecta.php';
include_once 'cabecalho.php';
session_start();
$aluno = $_SESSION['matricula'];
$result = $mysqli->query("SELECT * FROM alunos WHERE matricula = $aluno");
$lista = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro</title>
</head>
<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
  mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Dashboard</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#login" class="mdl-layout__tab">Informações de Logon</a>
      <a href="#escola" class="mdl-layout__tab">Informções Escolares</a>
    </div>
  </header>
  <div class="demo-ribbon mdl-color--yellow"></div>
  <main class="demo-main mdl-layout__content">

    <section class="mdl-layout__tab-panel" id="login">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--2-col"></div>
        <div class="demo-content mdl-cell mdl-cell--8-col mdl-shadow--4dp mdl-color--white">
          <h3 class="mdl-cell mdl-color-text--red" style="font-size:25px;font-family:"Roboto","Helvetica","Arial",sans-serif;">Informações Login</h3>
          <form action="../bd/crudlogin.php" method="post" name="inserir">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
              <input class="mdl-textfield__input" type="text" id="user" name="user">
              <label class="mdl-textfield__label" for="user">Usuario</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
              <input class="mdl-textfield__input" type="text" id="email" name="email" value="<?php echo $lista['email'];?>">
              <label class="mdl-textfield__label" for="email">E-mail</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
              <input class="mdl-textfield__input" type="text" id="nasc" name="nasc" value="<?php echo $lista['nasc'];?>">
              <label class="mdl-textfield__label" for="nasc">Data de Nascimento</label>
            </div>
            <div class="mdl-cell mdl-cell--12-col">
              <select class="js-example-basic-single" style="width: 50%" name="cidade">
                <?php $sql = "SELECT * FROM cidades";
                $con = $mysqli->query($sql) or die($mysqli->error);
                $dados = $con->fetch_assoc();
                $total = $con->num_rows;
                if ($total > 0) {
                  do {
                    ?> <option  value="<?php echo $dados['idcidades'] ?>"><?php echo $dados['nome'] ?></option><?php
                  } while ($dados = mysqli_fetch_assoc($con));
                }
                ?>
              </select>
            </div>
            <input type="hidden" name="aluno" value="<?php echo $aluno;?>">
            <div class="mdl-cell mdl-cell--12-col">
              <input type="submit" name="editar">
            </div>
          </form>

        </section>

        <div class="remodal" data-remodal-id="cidade" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">


        <h1>Remodal</h1>

          <div class="mdl-grid">

          <form class="" action="index.html" method="post">
<select class="js-example-basic-single" style="width: 50%" name="cidade">

          <?php $sql = "SELECT * FROM cidades";
          $con = $mysqli->query($sql) or die($mysqli->error);
          $dados = $con->fetch_assoc();
          $total = $con->num_rows;
          if ($total > 0) {
            do {
              ?> <option  value="<?php echo $dados['idcidades'] ?>"><?php echo $dados['nome'] ?></option><?php
            } while ($dados = mysqli_fetch_assoc($con));
          }
          ?>
        </select>
        <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
        <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
        </form>
        </div>
      </div>


      <script type="text/javascript">
      var inst = $('[data-remodal-id=cidade]').remodal();
      inst.open();

      </script>

    </body>
    </html>
