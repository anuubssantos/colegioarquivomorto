<?php require 'menu.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos - Colégio Comercial<?php echo $nome ?> </title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/light.css">
    <link href="libs/fontawesome-free-6.5.1-web/css/fontawesome.css" rel="stylesheet">
    <link href="libs/fontawesome-free-6.5.1-web/css/brands.css" rel="stylesheet">
    <link href="libs/fontawesome-free-6.5.1-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
    <script type="importmap">
       {
       "imports": {
       "@material/web/": "https://esm.run/@material/web/"
       }
       }
    </script>
    <script type="module">
       import '@material/web/all.js';
       import {
           styles as typescaleStyles
       } from '@material/web/typography/md-typescale-styles.js';
       
       document.adoptedStyleSheets.push(typescaleStyles.styleSheet);
    </script>
   </head>
   <body>
     
      <div class="inicio">
         <form class="formulario" method="post" action="./scripts/cadastroCurso.php">
            <h1 class="h1">Cadastrar novo Pronturário</h1>
            <div class="cadastrar">
                <div class="grupoText">
                <div class="textField">
                 <md-outlined-text-field label="Curso" value="" class="apoiobusca" name="cursoNome"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                 <?php
                  include "./scripts/dbConnection.php";
                  $select = "SELECT * FROM cccpv_eixotec ORDER BY idEixoTec";
                  $resultado = mysqli_query($conn, $select) or die("Erro no sistema.");
                  echo "<md-outlined-select id='EixoTec' name='EixoTec' class='apoiobusca' required>";
                  echo "<md-select-option aria-label='Eixo Tecnologico' selected>
                      <div slot='headline'>Eixo Tecnológico</div></md-select-option>";
                  while ($linha = mysqli_fetch_assoc($resultado)) {
                     echo " <md-select-option selected value='" . $linha["idEixoTec"] . "'>" . $linha["eixoTecNome"] . "</md-select-option>";
                  }
                  echo "</md-outlined-select>";
                  ?>
                 
               </div>
            <button class="btnSalvar" type="submit">Salvar</button>
            </div>
          
      </form>   
      </div>
     
   </body>
</html>