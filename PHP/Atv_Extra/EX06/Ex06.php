<!DOCTYPE html>
<html>
<head>
    <title>Gerador de Senhas</title>
</head>
<body>
    <h2>Gerador de Senhas</h2>
    <form method="post">
        <label for="comprimento">Comprimento da Senha:</label>
        <input type="number" id="comprimento" name="comprimento" min="6" max="20" value="10" required><br><br>

        <label for="incluir_numeros">Incluir Números:</label>
        <input type="checkbox" id="incluir_numeros" name="incluir_numeros"><br><br>

        <label for="incluir_caracteres">Incluir Caracteres Especiais:</label>
        <input type="checkbox" id="incluir_caracteres" name="incluir_caracteres"><br><br>

        <input type="submit" value="Gerar Senha">
    </form>

    <?php
    function gerarSenha($comprimento, $incluirNumeros, $incluirCaracteres) {
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if ($incluirNumeros) {
            $caracteres .= '0123456789';
        }
        if ($incluirCaracteres) {
            $caracteres .= '!@#$%^&*()-_=+';
        }

        $tamanhoCaracteres = strlen($caracteres);

        $senha = '';

        for ($i = 0; $i < $comprimento; $i++) {
            $senha .= $caracteres[rand(0, $tamanhoCaracteres - 1)];
        }

        return $senha;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $comprimento = $_POST['comprimento'];
        $incluirNumeros = isset($_POST['incluir_numeros']) ? true : false;
        $incluirCaracteres = isset($_POST['incluir_caracteres']) ? true : false;

        $senhaGerada = gerarSenha($comprimento, $incluirNumeros, $incluirCaracteres);
        echo "<h3>Sua senha gerada é: $senhaGerada</h3>";
    }
    ?>
</body>
</html>
