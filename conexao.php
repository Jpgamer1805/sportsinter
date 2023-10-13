<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // Altere para o nome do seu servidor
$username = "root"; // Altere para o seu nome de usuário
$password = ""; // Altere para a sua senha
$dbname = "escola"; // Altere para o nome do seu banco de dados

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
