<?php
include_once 'cabecalho.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Calendário</title>
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
        <div class="mdl-cell mdl-cell--12-col">
          <br>
        </div>
<div class="mdl-cell mdl-cell--12-col">




  <div class="calendar hidden-print">
    <header>
      <h2 class="month"></h2>
      <a class="btn-prev fontawesome-angle-left" href="#"></a>
      <a class="btn-next fontawesome-angle-right" href="#"></a>
    </header>
    <table>
      <thead class="event-days">
        <tr></tr>
      </thead>
      <tbody class="event-calendar">
        <tr class="1"></tr>
        <tr class="2"></tr>
        <tr class="3"></tr>
        <tr class="4"></tr>
        <tr class="5"></tr>
      </tbody>
    </table>


    </div>






</div>
    </main>

</body>
</html>
