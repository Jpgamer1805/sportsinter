<?php
// Conexão com o banco de dados (substitua com suas próprias credenciais)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jogo_id"])) {
    $jogo_id = $_POST["jogo_id"]; // Obtenha o ID do jogo do formulário

    // Consulta SQL para excluir o jogo com base no ID
    $sql = "DELETE FROM Jogos WHERE ID = $jogo_id";

    if ($conn->query($sql) === TRUE) {
        echo "Jogo excluído com sucesso.";
    } else {
        echo "Erro ao excluir o jogo: " . $conn->error;
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>
