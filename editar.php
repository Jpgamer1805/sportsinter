<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
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

        .form-control {
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 5px 0;
        }

        select {
            width: 100%;
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="h1">Editar Jogo</h1>
        <form action="editar.php?id=<?php echo $jogo_id; ?>" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="escola">Nome da Escola:</label>
                    <input type="text" class="form-control" id="escola" name="escola" value="<?php echo $jogo['NomeEscola']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="competicao">Nome da Competição:</label>
                    <input type="text" class="form-control" id="competicao" name="competicao" value="<?php echo $jogo['NomeCompeticao']; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="time1">Time 1:</label>
                    <input type="text" class="form-control" id="time1" name="time1" value="<?php echo $jogo['Timet1']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="time2">Time 2:</label>
                    <input type="text" class="form-control" id="time2" name="time2" value="<?php echo $jogo['Timet2']; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="pontos_time1">Pontos Time 1:</label>
                    <input type="number" class="form-control" id="pontos_time1" name="pontos_time1" value="<?php echo $jogo['PontosTimet1']; ?>" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="pontos_time2">Pontos Time 2:</label>
                    <input type="number" class="form-control" id="pontos_time2" name="pontos_time2" value="<?php echo $jogo['PontosTimet2']; ?>" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="Agendado" <?php echo ($jogo['StatusAgendado'] == 'Agendado') ? 'selected' : ''; ?>>Agendado</option>
                        <option value="Ao Vivo" <?php echo ($jogo['StatusAgendado'] == 'Ao Vivo') ? 'selected' : ''; ?>>Ao Vivo</option>
                        <option value="Finalizado" <?php echo ($jogo['StatusAgendado'] == 'Finalizado') ? 'selected' : ''; ?>>Finalizado</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="modalidade">Modalidade:</label>
                    <select class="form-control" id="modalidade" name="modalidade">
                        <option value="Futsal" <?php echo ($jogo['Modalidade'] == 'Futsal') ? 'selected' : ''; ?>>Futsal</option>
                        <option value="Vôlei" <?php echo ($jogo['Modalidade'] == 'Vôlei') ? 'selected' : ''; ?>>Vôlei</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="ao_vivo">Ao Vivo:</label>
                    <input type="checkbox" class="form-control" id="ao_vivo" name="ao_vivo" <?php echo ($jogo['AoVivo'] == 1) ? 'checked' : ''; ?>>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="finalizado">Finalizado:</label>
                    <input type="checkbox" class="form-control" id="finalizado" name="finalizado" <?php echo ($jogo['Finalizado'] == 1) ? 'checked' : ''; ?>>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
        <a href="index.php" class="btn btn-secondary">Voltar para a Lista de Jogos</a>
    </div>
</body>
</html>
