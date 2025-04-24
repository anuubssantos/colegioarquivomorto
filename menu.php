<?php 
/*echo '
<div class="navbar">
<nav>
<div class="navigationRail">
    <div class="logo">
      <a href="indexlogado.php">
      <img src="../img/logocolegio.png" class="logoimg">
      </a>
   </div>
   <div class="addButton">
      <a href="cadastrar.php">
      <md-fab size="small" aria-label="Add">
         <md-icon id="fabAdd" slot="icon">add</md-icon>
      </a>
      </md-fab>
   </div>
  
   <a class="mdc-list-item mdc-list-item--activated" aria-current="page"> </a>
      <span class="mdc-list-item_ripple"></span>
      <div class="itemMenu" >
         
         <span class="material-symbols-outlined"  >home </span>
         <span class="mdc-list-item_text">Inicio</span> 
        
      </div>
   
      <div class="itemMenu">
         <span class="material-symbols-outlined">manufacturing</span>
         <span class="mdc-list-item_text">Sistema</span>
      </div>
   
</div>
</nav>
</div>

';*/
echo '
<div class="navbar">
   <nav>
      <div class="navigationRail">
         <!-- Logo --> 
         <div class="logo"> <a href="indexlogado.php"> 
            <img src="../img/logocolegio.png" class="logoimg"> </a> 
         </div>
         <!-- Botão para cadastrar --> 
         <div class="addButton">
            <a href="cadastrar.php">
               <md-fab size="small" aria-label="Add">
                  <md-icon id="fabAdd" slot="icon">add</md-icon>
               </md-fab>
            </a>
         </div>
         <!-- Item Menu: Início --> 
         <div class="itemMenu"> 
            <a href="indexlogado.php" class="mdc-list-item"> 
            <span class="material-symbols-outlined">home</span> <span class="mdc-list-item_text">Início</span> </a> 
         </div>
         <!-- Item Menu: Sistema --> 
         <div class="itemMenu"> <a href="configuracoes.php" class="mdc-list-item"> 
            <span class="material-symbols-outlined">manufacturing</span> <span class="mdc-list-item_text">Sistema</span> 
            </a> 
         </div>
      </div>
   </nav>
</div>';
 ?>

