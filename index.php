<?php
session_start();

$nome = isset($_SERVER["Nome"]) ? " - " + $_SESSION["Nome"] : "";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ARQUIVO MORTO - Colégio Comercial</title>
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
<div class="loginbackground">


    <form class="formulario" method="POST" action="./scripts/login.php">
        <div class="login position-absolute translate-middle">
            <div class="img">
                <img class="logo" src="img/logocolegio.png">
            </div>
            <div class="form container">
               <div class="w-70">
                    <div class="grupologin" >
                        <md-outlined-text-field id="usuarioAcesso" name="usuarioAcesso" label="Username" aria-label="username" type="text"> </md-outlined-text-field>
                    </div>    
                    <div class="grupologin" >
                        <md-outlined-text-field id="usuarioSenha" name="usuarioSenha" label="Senha" aria-label="Password" type="senha"> </md-outlined-text-field>
                    </div>
                    <md-elevated-button id= "testebtn" class="btn" type="submit">Entrar</md-elevated-button>
                    

                    
                </div>
            </div>
        </div>
    </form>
</div>
    
</body>

</html>