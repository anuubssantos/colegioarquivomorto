<?php /*
    include "./scripts/dbConnection.php";

    $curso = $_GET ('cursoNome'); 

    $select = $conn -> prepare ("SELECT idEixoTec, eixoTecNome 
    FROM cccpv_eixotec 
    WHERE fk_idEixoTec =: idEixoTec");

    $dados = ['idEixoTec' => $curso];
    $query -> execute($data);
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    
    echo "
<md-outlined-text-field label='Label' value=''>
</md-outlined-text-field>"
*/?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $opcaoSelecionada = $_POST["opcao"] ?? null;

    // Simula uma consulta ao banco de dados para buscar sub-opções com base na opção escolhida
    $dados = [
        "1" => [
            ["id" => "1.1", "nome" => "Sub-Opção 1.1"],
            ["id" => "1.2", "nome" => "Sub-Opção 1.2"]
        ],
        "2" => [
            ["id" => "2.1", "nome" => "Sub-Opção 2.1"],
            ["id" => "2.2", "nome" => "Sub-Opção 2.2"]
        ],
        "3" => [
            ["id" => "3.1", "nome" => "Sub-Opção 3.1"],
            ["id" => "3.2", "nome" => "Sub-Opção 3.2"]
        ]
    ];

    // Retorna os dados correspondentes à opção selecionada ou um array vazio
    echo json_encode($dados[$opcaoSelecionada] ?? []);
}
?>