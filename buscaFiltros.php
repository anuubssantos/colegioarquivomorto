<?php
    session_start();
    include ('dbConnection.php');

   /* $busca = $_POST['SearchBar'];*/
    /*$filtro = $_POST['filtro'];*/

    $select = "SELECT * FROM cccpv_prontuario ORDER BY idProntuario";
    $resultados = mysqli_query($conn, $select);
    
    while ($linha=mysqli_fetch_assoc($resultados)) {
        echo "<b>   Prontuario <b>";
        echo "<b> Código da Caixa</b>:".$linha["prontuarioCodCaixa"];
        echo "<b> Número</b>:".$linha["prontuarioNumero"];
        echo "<b> Nome</b>:".$linha["prontuarioNome"];
    }

    if(!empty($_POST)){
        $select .= " WHERE (1=1)";
        if (isset ($_POST["prontuarioCPF"])){
            $cpf = $_POST["prontuarioCPF"];
            $select .= "AND prontuarioCPF = '$cpf'";
        }     
    }

/*    echo $busca;

    
        if(isset($_POST['filtro'])){
        $filtro = $_POST['filtro'];
        echo $filtro;

    if($busca != "" ){
        switch ($filtro) {
            case 'ra':
                echo "i é igual a 0";
                break;
            case 1:
                echo "i é igual a 1";
                break;
            case 2:
                echo "i é igual a 2";
                break;
        }
    }}*/
?>