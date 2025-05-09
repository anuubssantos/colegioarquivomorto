<?php 
 include ('dbConnection.php');

$prepare = $conn-> prepare('select idProntuario, prontuarioNome');
