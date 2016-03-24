<?php
$sair = 0;
//abre sessão
session_start();
//inclui cabecalho
include_once 'cabecalho.php';
if($sair != 0){
  session_destroy();}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bem Vindo</title>
  </head>
  <body>
    <div class="layout mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">DashBoard</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--5-col">
        </div>
        <div class="mdl-cell mdl-cell--6-col">
          <div class="mdl-cell mdl-cell--6-col mdl-cell--1-offset">
            <h4>Login</h4>
            <br>
          </div>
            <form action="../bd/crudlogin.php" method="post" name="entrar">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="user" name="user">
                <label class="mdl-textfield__label" for="user">Usuario</label>
              </div>
              <div class="mdl-cell mdl-cell--5-col"></div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="pass" name="pass">
                <label class="mdl-textfield__label" for="pass">Senha</label>
              </div>
              <div class="mdl-cell mdl-cell--12-col">
              <input type="submit" value="Entrar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="entrar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="#cadastro" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Cadastro</a>
              </div>
            </form>
        </div>
      </div>
    </main>
  </div>
  <div class="remodal" data-remodal-id="cadastro">
  <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Cadastro</h1>
      <p>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
            <form action="../bd/crudaluno.php" method="post" name="inserir">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                  <input class="mdl-textfield__input" type="text" id="nome" name="nome">
                  <label class="mdl-textfield__label" for="nome">Nome</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                  <input class="mdl-textfield__input" type="text" id="email" name="email">
                  <label class="mdl-textfield__label" for="email">E-mail</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                  <input class="mdl-textfield__input" type="text" id="nasc" name="nasc">
                  <label class="mdl-textfield__label" for="nasc">Data de Nascimento</label>
              </div>
                  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="inserir" value="Confirmar">
            </form>
        </div>
      </div>
      </p>
  </div>
    <br>
      <div class="remodal" data-remodal-id="error">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Opa</h1>
        <p>
          Já existe uma conta com esse email
        </p>
        <br>
        <a href="#cadastro" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Ok</a>
      </div>
  </body>
</html>
