
        <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .h1 {
            text-align: center;
            color: #333;
        }

        .btn-success {
            background-color: #4caf50;
            color: #fff;
        }

        table {
            margin-top: 20px;
        }

        table th {
            background-color: #4caf50;
            color: #fff;
        }

        table td, table th {
            text-align: center;
        }

        .btn-warning, .btn-danger {
            margin: 2px;
        }

        .pagination {
            margin: 20px 0;
            text-align: center;
        }

        .pagination li {
            display: inline;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="h1">SportInter</h1>
        <a href="Login.php" class="btn btn-success">Novo Jogo</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Quantidade de Jogos</th>
                    <th>Escola</th>
                    <th>Competicao</th>
                    <th>Modalidade</th>
                    <th>Time Casa</th>
                    <th>Pontos Time Casa</th>
                    <th>Time Visitante</th>
                    <th>Pontos Time Visitante</th>
                    <th>Status</th>
                    <th>Ao Vivo</th>
                    <th>Finalizado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
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

            // Consulta SQL para buscar os dados dos jogos
            $sql = "SELECT * FROM Jogos";
            $result = $conn->query($sql);

            // Inicializa a contagem de jogos
            $quantidadeJogos = 0;

            // Verifique se há resultados e itere sobre eles
            while ($row = $result->fetch_assoc()) {
                $quantidadeJogos++;
                echo "<tr>";
                echo "<td>" . $quantidadeJogos . "</td>"; // Exibe a quantidade de jogos
                echo "<td>" . $row["NomeEscola"] . "</td>";
                echo "<td>" . $row["NomeCompeticao"] . "</td>";
                echo "<td>" . $row["Modalidade"] . "</td>"; // Exibindo a modalidade
                echo "<td>" . $row["Timet1"] . "</td>";
                echo "<td>" . $row["PontosTimet1"] . "</td>";
                echo "<td>" . $row["Timet2"] . "</td>";
                echo "<td>" . $row["PontosTimet2"] . "</td>";
                echo "<td>" . $row["StatusAgendado"] . "</td>";
                echo "<td>" . ($row["AoVivo"] ? "Sim" : "Não") . "</td>";
                echo "<td>" . ($row["Finalizado"] ? "Sim" : "Não") . "</td>";
                echo '<td>
                        <a href="editar.php?id=' . $row["ID"] . '" class="btn btn-warning">Editar</a>
                        <a href="excluir.php?id=' . $row["ID"] . '" class="btn btn-danger" onclick="return confirm(\'Tem certeza de que deseja excluir este jogo?\')">Excluir</a>
                    </td>';

                echo "</tr>";
            }

            // Feche a conexão com o banco de dados
            $conn->close();
            ?>
            </tbody>
        </table>
        <ul class="pagination">
            <!-- ... (seu código existente) ... -->
        </ul>
    </div>
</body>
</html>

    </table>

    <!-- Paginação -->
    <ul class="pagination">
        <!-- ... (seu código existente) ... -->
    </ul>
</div>

</body>
</html>
