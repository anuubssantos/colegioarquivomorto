<?php 
   include ('dbConnection.php');
    

    if(empty($_POST['usuarioAcesso']) || empty($_POST['usuarioSenha'])){
        header('Location: ../index.php');
        exit();
    }
    $usuario = mysqli_real_escape_string($conn, $_POST['usuarioAcesso']);
    $senha = mysqli_real_escape_string($conn, $_POST['usuarioSenha']);

    $query = "SELECT usuarioAcesso, usuarioSenha FROM cccpv_usuario WHERE usuarioAcesso = '{$usuario}' and usuarioSenha = '{$senha}'";
    
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row==1){
        $_SESSION['usuarioAcesso'] = $usuario;
        header('Location: ../indexlogado.php');
        exit();

    } else {
        header('Location: ../index.php');
        exit();
    }

?>