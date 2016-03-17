<?php
include_once '../bd/conecta.php';
include_once 'cabecalho.php';
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Cadastro</title>
   </head>
   <body>
     <div class="layout mdl-layout mdl-js-layout">
     <header class="mdl-layout__header mdl-layout__header">
       <div class="mdl-layout__header-row">
         <span class="mdl-layout-title">DashBoard</span>
       </div>

     </header>
<div class="demo-ribbon mdl-color--yellow"></div>
  <main class="demo-main mdl-layout__content">


      <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col"></div>
          <div class="demo-content mdl-cell mdl-cell--8-col mdl-shadow--4dp mdl-color--white">
              <h3 class="mdl-cell mdl-color-text--red" style="font-size:25px;font-family:"Roboto","Helvetica","Arial",sans-serif;">Informações Pessoais</h3>
              <form action="crudaluno.php" method="post" name="inserir">
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
                  <div class="mdl-cell mdl-cell--12-col">
                    <select class="js-example-basic-single">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
</select>
                  </div>



   </body>
 </html>
