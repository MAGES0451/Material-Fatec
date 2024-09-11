<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se todos os campos foram preenchidos
        if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color: red;'>Por favor, insira um email válido.</p>";
            } else {
                if (strlen($senha) < 6) {
                    echo "<p style='color: red;'>A senha deve conter pelo menos 6 caracteres.</p>";
                } else {
                    echo "<h3>Usuário cadastrado com sucesso!</h3>";
                    echo "<p>Nome: $nome</p>";
                    echo "<p>Email: $email</p>";
                }
            }
        } else {
            echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        }
    }
    ?>
</body>
</html>
