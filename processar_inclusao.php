<?php
// Verifique se o formulário de inclusão foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados (substitua pelas suas informações)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escola";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Coleta dos dados do formulário
    $escola = $_POST['escola'];
    $competicao = $_POST['competicao'];
    $modalidade = $_POST['modalidade']; // Adicione esta linha para obter a modalidade
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $pontos_time1 = $_POST['pontos_time1'];
    $pontos_time2 = $_POST['pontos_time2'];
    $status = $_POST['status'];
    $ao_vivo = isset($_POST['ao_vivo']) ? 1 : 0;
    $finalizado = isset($_POST['finalizado']) ? 1 : 0;

    // Preparar a instrução SQL para a inserção de dados
    $sql = "INSERT INTO Jogos (NomeEscola, NomeCompeticao, Modalidade, Timet1, Timet2, PontosTimet1, PontosTimet2, StatusAgendado, AoVivo, Finalizado)
            VALUES ('$escola', '$competicao', '$modalidade', '$time1', '$time2', $pontos_time1, $pontos_time2, '$status', $ao_vivo, $finalizado)";

    if ($conn->query($sql) === TRUE) {
        echo "Jogo cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o jogo: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
} else {
    // Redirecionar para a página de inclusão se o formulário não foi enviado
    header("Location: incluir.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Seu cabeçalho (meta, título, estilo etc.) -->
    <style>
        .btn-primary {
            background-color: #007bff; /* Cor de fundo */
            color: #fff; /* Cor do texto */
            padding: 10px 20px; /* Preenchimento interno */
            border: none; /* Sem borda */
            border-radius: 5px; /* Borda arredondada */
            text-decoration: none; /* Sem sublinhado no texto */
            display: inline-block; /* Exibir como bloco em linha */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Cor de fundo ao passar o mouse */
        }
    </style>
</head>
<body>

<!-- Seu código HTML existente -->

<div class="container mt-4">
    <!-- ... Seu conteúdo existente ... -->
    <br>
    <a href="index.php" class="btn btn-primary">OK</a>
</div>

</body>
</html>
