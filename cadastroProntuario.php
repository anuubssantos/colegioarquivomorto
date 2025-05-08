<?php 
session_start();
include ('dbConnection.php');

// Capturar os valores do formulário
$codCaixa = $_POST["codCaixa"];
$numProntuario = $_POST["numProntuario"];
$nomeCompleto = $_POST['nomeCompleto'];
$localNasc = $_POST["localNasc"];
$datalNasc = $_POST["dataNasc"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$ra = mysqli_real_escape_string($conn, $_POST["ra"]);
$nomeMae = $_POST["nomeMae"];
$nomePai = $_POST["nomePai"];
$contatoRespon = $_POST["contatoRespon"];
$emailRespon = $_POST["emailRespon"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$dataIngresso = $_POST["dataIngresso"];
$curso = $_POST["cursoNome"];
$eixoTec = $_POST["EixoTec"];
$statusMatricula = $_POST["statusMatricula"];
$dataFormatura = $_POST["dataFormatura"];
$historico = $_POST["historico"];
$contrato = $_POST["contrato"];
$outrosdocs = $_POST["outrosdocs"];




$query = "INSERT INTO cccpv_prontuario (prontuarioCodCaixa, prontuarioNumero,prontuarioNome, 
  prontuarioLocalNasc, prontuarioDataNasc, prontuarioRG, prontuarioCPF, prontuarioRA, prontuarioMae,
   prontuarioPai,  prontuarioContatoResponsavel, prontuarioEmailResponsavel, prontuarioEndereco, 
   prontuarioCEP,  prontuarioDataIngresso, fk_idTipoFormacao, fk_IdCurso, fk_idEixoTec, 
   prontuarioDataFormatura, prontuarioHistorico, prontuarioContrato, prontuarioOutrosDocs) 
      VALUES ('$codCaixa', '$numProntuario', '$nomeCompleto', '$localNasc', '$datalNasc', 
    '$rg', '$cpf', '$ra', '$nomeMae', '$nomePai', 
    '$contatoRespon', '$emailRespon', '$endereco', '$cep', 
    '$dataIngresso', '$statusMatricula', '$curso', '$eixoTec', '$dataFormatura', 
    '$historico', '$contrato', '$outrosdocs')";
    



if (mysqli_query($conn, $query)) {
  header("Location: ../indexlogado.php");
  exit();
} else {
  echo "Erro: " . mysqli_error($conn);
}
?> 
