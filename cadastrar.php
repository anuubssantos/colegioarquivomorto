<?php require 'menu.php' ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arquivos - Colégio Comercial
   </title>
   <link rel="stylesheet" href="css/estilo.css">
   <link rel="stylesheet" href="css/light.css">
   <link href="libs/fontawesome-free-6.5.1-web/css/fontawesome.css" rel="stylesheet">
   <link href="libs/fontawesome-free-6.5.1-web/css/brands.css" rel="stylesheet">
   <link href="libs/fontawesome-free-6.5.1-web/css/solid.css" rel="stylesheet">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
   <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
   <link hrel="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" />
   


  
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
      <form class="formulario" method="post" action="./scripts/cadastroProntuario.php">
         <div class="grupoText">
               <md-linear-progress class="stepbystep" value="0.20"></md-linear-progress>
               
            </div>
         <h1 class="h1text">Cadastrar novo pronturário</h1>
         <h5 class="">Identificação</h5>
         <div class="cadastrar">
         
            <div class="grupoText">
               <div class="textField">
                  

                  <md-outlined-text-field label="Caixa" name="codCaixa"  class="apoiobusca"
                     type="text"></md-outlined-text-field>
                  <md-outlined-text-field label="Pronturário" name="numProntuario"  class="apoiobusca"
                     ></md-outlined-text-field>
                     <md-outlined-text-field label="Nome Completo" name="nomeCompleto" class="apoiobusca"
                     type="text"></md-outlined-text-field>
               </div>
               <div class="textField">
                  <md-outlined-text-field label="Local de Nascimento"  class="apoiobusca"
                  name="localNasc" id="localNasc"></md-outlined-text-field>
                  <span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Data de Nascimento" value="" type="date" class="apoiobusca"
                     name="dataNasc"></md-outlined-text-field>
                  <span class="material-symbols-outlined"></span>

               </div>
               <div class="textField">
                  <md-outlined-text-field label="RG" value="" onKeyPress="formatar('##.###.###-#',this)" class="apoiobusca" name="rg" required></md-outlined-text-field>
                  <span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="CPF" value="" onKeyPress="formatar('###.###.###-##',this)" class="apoiobusca"
                     name="cpf"></md-outlined-text-field>
                  <span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="RA" value="" class="apoiobusca" id="ra"></md-outlined-text-field>
                  <span class="material-symbols-outlined"></span>
               </div>
               <div class="textField">
                  <md-outlined-text-field label="Nome da Mãe" value="" class="apoiobusca"
                     name="nomeMae"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Nome do Pai" value="" class="apoiobusca"
                     name="nomePai"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Contato do Responsável" 
                  onKeyPress="formatar('(##) ####-#####',this)" value="" class="apoiobusca" name="contatoRespon">
               </md-outlined-text-field><span class="material-symbols-outlined"></span>
               </div>
               <div class="textField">
                  <md-outlined-text-field label="E-mail do Responsável" value="" class="apoiobusca"
                     name="emailRespon"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Endereço" value="" class="apoiobusca"
                     name="endereco"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="CEP" value="" onKeyPress="formatar('#####-###',this)" class="apoiobusca"
                     name="cep"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Data Ingresso" value="" type="date" class="apoiobusca"
                     name="dataIngresso"></md-outlined-text-field><span class="material-symbols-outlined"></span>
               </div>
               <div class="textField">

                  <?php
                  include "./scripts/dbConnection.php";
                  $select = "SELECT *FROM cccpv_curso ORDER BY idCurso";
                  
                  $resultado = mysqli_query($conn, $select) or die("Erro no sistema.");

                  echo "<md-outlined-select name='cursoNome' id='cursoNome' class='apoiobusca' required>";
                  echo "<md-select-option aria-label='Curso Matriculado' selected>
                     <div slot='headline'>Curso Matriculado</div></md-select-option>";
                  while ($linha = mysqli_fetch_assoc($resultado)) {
                     echo " <md-select-option  value='" . $linha["idCurso"] . "'>" . $linha["cursoNome"] 
                     . "</md-select-option>";
                    
                  }

                  echo "</md-outlined-select>";
                
                ?>

               <?php
                  include "./scripts/dbConnection.php";
                  $select = "SELECT *FROM cccpv_eixotec ORDER BY idEixoTec";
                  
                  $resultado = mysqli_query($conn, $select) or die("Erro no sistema.");

                  echo "<md-outlined-select name='EixoTec' id='EixoTec' class='apoiobusca' required>";
                  echo "<md-select-option aria-label='Eixo Tecnológico' selected>
                     <div slot='headline'>Eixo Tecnológico</div></md-select-option>";
                  while ($linha = mysqli_fetch_assoc($resultado)) {
                     echo " <md-select-option  value='" . $linha["idEixoTec"] . "'>" 
                     . $linha["eixoTecNome"] . "</md-select-option>";
                    
                  }

                  echo "</md-outlined-select>";
                
                ?>
                 
                  <?php
                  include "./scripts/dbConnection.php";
                  $select = "SELECT idStatusMatricula, statusMatricula FROM cccpv_statusmatricula ORDER BY statusMatricula";
                  $resultado = mysqli_query($conn, $select) or die("Erro no sistema.");
                  echo "<md-outlined-select name='statusMatricula' id='statusMatricula' class='apoiobusca' required>";
                  echo "<md-select-option label='Status da Matricula' selected> 
                     <div slot='headline'>Status da Matricula</div></md-select-option>";
                  while ($linha = mysqli_fetch_assoc($resultado)) {
                     echo " <md-select-option value='" . $linha["idStatusMatricula"] . "'>" 
                     . $linha["tipoFormacao"] . "</md-select-option>";
                  }
                  echo "</md-outlined-select>";
                  ?>
                  
               </div>
               <div class="textField">

                  <md-outlined-text-field label="Data da Formatura" value="" type="date" class="apoiobusca"
                     name="dataFormatura"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Histórico" value="" class="apoiobusca"
                     name="historico"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Contrato" value="" class="apoiobusca"
                     name="contrato"></md-outlined-text-field><span class="material-symbols-outlined"></span>
                  <md-outlined-text-field label="Outros Documentos" value="" class="apoiobusca"
                     name="outrosdocs"></md-outlined-text-field><span class="material-symbols-outlined"></span>
               </div>

            </div>
            <button class="btnSalvar" type="submit">Salvar</button>
         </div>

      </form>
   </div>
   <script src="scripts/js/funcoes.js"> </script>
   <script>
      function formatar(mascara, telefone) {
         let i = telefone.value.length;
         let saida = '#';
         let texto = mascara.substring(i);
         while (texto.substring(0, 1) != saida && texto.length) {
            telefone.value += texto.substring(0, 1);
            i++;
            texto = mascara.substring(i);
         }
      }
      function imprime (){
         var select   = document.getElementById("cursoNome");
         var variavel = '';
         select.onchange = function(){
            variavel = this.value;
            console.log(variavel);
         }
      }
     
      
    
   </script>
   
</body>

</html>