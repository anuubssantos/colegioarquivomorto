<?php
    session_start();
    if(!$_SESSION['usuarioCargo']){
        header('Location: ../index.php');
        exit();
    }

?>