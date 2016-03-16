<?php
include_once 'cabecalho.php';

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Turmas</title>
   </head>
   <body>
     <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Turmas</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="home.php?sair=1"><i class="material-icons">power_settings_new</i></a>
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
      <div class="mdl-cell--2-col"></div>
      <div class="page-content mdl-shadow--6dp mdl-cell--8-col">
        <table class="mdl-data-table mdl-cell--12-col mdl-js-data-table mdl-shadow--2dp">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric">Turma</th>
              <th>Professor</th>
              <th>Materia</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="mdl-data-table__cell--non-numeric"><a href="login.php"></a></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <a href="#modal">Modal №1</a><br>

    <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div>
        <h2 id="modal1Title">Remodal</h2>
        <p id="modal1Desc">
          Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin
          with declarative state notation and hash tracking.
        </p>
      </div>
      <br>

      <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
    </div>

  </main>


</div>
<script type="text/javascript">
$(document).on('confirmation', '.remodal', function () {
console.log('Confirmation button is clicked');
window.location = 'home.php';
});


</script>
   </body>
 </html>
