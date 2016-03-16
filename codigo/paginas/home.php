<?php
session_start();
include_once 'cabecalho.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <style media="screen">

.mdl-card-wide.mdl-card {
width: 512px;
}
    </style>
    <meta charset="utf-8">
    <title>DashBoard</title>
  </head>
  <body>
    <div class="layout mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">DashBoard</span>

      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="login.php?sair=1"><i class="material-icons">power_settings_new</i></a>

      </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
   <span class="mdl-layout-title">Menu</span>
   <nav class="mdl-navigation">
     <a class="mdl-navigation__link" href="perfil.php"><i class="material-icons">person</i>Perfil</a>
     <a class="mdl-navigation__link" href="calendario.php"><i class="material-icons">today</i>Calendario</a>
     <a class="mdl-navigation__link" href="historico.php"><i class="material-icons">assessment</i>Historico</a>
     <a class="mdl-navigation__link" href="turmas.php"><i class="material-icons">people</i>Turmas</a>
   </nav>
 </div>
 <main class="mdl-layout__content">
   


   <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--3-col"></div>
  <div class="mdl-cell mdl-cell--4-col">
    <br><br><br><br>
        <div class="mdl-card-wide mdl-card mdl-shadow--6dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Cursando</h2>
          </div>
        <div class="mdl-card__actions mdl-card--border">
          <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Introdução ao Direito</a><br>
          <span>TITITITITI</span>
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Orientação a
           objetos</a><br>
           <span>TITITITITI</span>
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Redes</a>
          <br>
          <span>TITITITITI</span>
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Lógica de Programação</a>
          <br>
          <span>TITITITITI</span>
        </div>
        <div class="mdl-card__menu">
          <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
            <i class="material-icons">mode_edit</i>
          </button>
        </div>
        </div>
  </div>

    <div class="mdl-cell mdl-cell--4-col">
      <br><br><br><br>
        <div class="mdl-card mdl-shadow--6dp">
          <img src="http://www.morelosmich.gob.mx/wp-content/uploads/2016/01/perfil.png" width="200" />
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text"><?php echo $_SESSION['aluno']; ?></h2>
          </div>
        <div class="mdl-card__supporting-text mdl-card--border">
          Cursando *curso* no *semestre*º Semestre
        </div>
        <div class="mdl-card__menu">
          <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
            <i class="material-icons">mode_edit</i>
          </button>
        </div>
        </div>
    </div>



        <div class="mdl-card mdl-shadow--6dp" style="background-color:red;min-height:10px;width:5024px"></div>
        <div class="mdl-cell--3-col"></div>
        <div class="mdl-cell mdl-cell--4-col">
          <div class="mdl-card mdl-shadow--6dp" style="width:850px">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">FEED DE NOTICIAS</h2>
            </div>
          <div class="mdl-card__supporting-text mdl-card--border">
            BLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLA
            BLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLA
            BLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLA
            BLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLA
            BLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLABLA
          </div>
          </div>
        </div>



</div>
 </main>


  </body>
</html>
