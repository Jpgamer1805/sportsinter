 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }

        .login-container {
            margin: 100px auto;
            width: 300px;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .login-button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
        }

        h2 {
            color: #333;
        }
    </style>






<?php
// Usuário e senha predefinidos
$usuario_predefinido = "SportInter";
$senha_predefinida = "Sport010219";

// Inicializa a mensagem de erro como vazia
$erro = "test";

// Verificar se os dados do formulário foram enviados
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar se o usuário e a senha correspondem aos valores predefinidos
    if ($usuario === $usuario_predefinido && $senha === $senha_predefinida) {
        // Redirecione para a página principal ou execute a ação desejada
        header("Location: incluir.php");
        exit();
    } else {
        // Se as credenciais estiverem incorretas, defina a mensagem de erro
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login Cadastro Jogos</title>
    <!-- Seu cabeçalho (meta, título, estilo etc.) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .login-container {
            margin: 100px auto;
            width: 300px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Cadastro Jogos</h2>
        <!-- Exiba a mensagem de erro apenas se houver uma mensagem de erro definida -->
        <?php if (!empty($erro)) { ?>
            <p class="error-message"><?php echo $erro; ?></p>
        <?php } ?>
        <form method="POST">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <br>
            <input type="submit" class="login-button" value="Login">
        </form>
    </div>
</body>
</html>
