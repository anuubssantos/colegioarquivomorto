<?php
session_start();

?>
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
         <form class="formulario" method="post" action="./scripts/cadastroUsuario.php">
            <h1 class="h1">Cadastrar novo Pronturário</h1>
            <div class="cadastrar">
                <div class="grupoText">
                <div class="textField">
                 <md-outlined-text-field label="Usuário" id="usuarioAcesso" value="" class="apoiobusca" name="usuarioAcesso"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                 <md-outlined-text-field label="Senha" id="usuarioSenha" value="" type="password" class="apoiobusca" name="usuarioSenha"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                 <md-outlined-select>
                  <md-select-option aria-label="blank" class="apoiobusca" id="usuarioPermissoes" name="usuarioPermissoes"></md-select-option>
                  <md-select-option selected value="administrador">
                     <div slot="headline">Administrador</div>
                  </md-select-option>
                  <md-select-option value="secretaria">
                     <div slot="headline">Secretaria</div>
                  </md-select-option>
                  <md-select-option value="sistema">
                     <div slot="headline">Sistema</div>
                  </md-select-option>
                 </md-outlined-select>
                 
               </div>
               


               </div>
            <button class="btnSalvar" type="submit">Salvar</button>
            </div>
          
      </form>   
      </div>
     
   </body>
</html>