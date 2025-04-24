<?php
session_start();

?>
<?php require 'menu.php' ?>
<!DOCTYPE html>
<html lang="ptbr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Busca de Arquivos - Colégio Comercial</title>
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
      <div class="inicioBemvindo">
         <div>
            <h1 class="h1text">Buscar prontuários</h1>
            <form class="formbusca" method="post" action='./scripts/buscaFiltros.php'>

            <md-outlined-select name='filtro' >
               
            <md-select-option name="ra" selected>
               <div slot="headline">RA</div>
            </md-select-option>
            <md-select-option  value="rg">
               <div slot="headline">RG</div>
            </md-select-option>
            <md-select-option value="cpf">
               <div slot="headline">CPF</div>
            </md-select-option>
            <md-select-option value="nomeAluno">
               <div slot="headline">Nome do Aluno</div>
            </md-select-option>
            <md-select-option value="curso">
               <div slot="headline">Curso</div>
            </md-select-option>
            <md-select-option value="periodo">
               <div slot="headline">Período</div>
            </md-select-option>

            </md-outlined-select>
               <md-outlined-text-field name="SearchBar" id="SearchBar" placeholder="Encontrar prontuários" type="search">
                  <md-icon id="leading-icon" slot="leading-icon">search</md-icon>

               </md-outlined-text-field>

               <md-icon-button class="" type="submit">
                  <md-icon>search</md-icon>
               </md-icon-button>
         </div>

         </form>

         <md-list id="listaResultado">
            <md-list-item>
               Resultados
            </md-list-item>
            <md-divider></md-divider>
            <md-list-item>
               Apple
            </md-list-item>
            <md-list-item>
               Banana
            </md-list-item>
            <md-list-item>
               <div slot="headline">Cucumber</div>
               <div slot="supporting-text">Cucumbers are long green fruits that are just as long as this multi-line description</div>
            </md-list-item>
            
         </md-list>

      </div>
   </div>
 
   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.7/underscore-umd-min.js"> </script>
   <script src="scripts/js/searchbar.js"> </script>

</body>

</html>