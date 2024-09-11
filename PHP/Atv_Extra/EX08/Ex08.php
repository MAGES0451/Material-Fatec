<!DOCTYPE html>
<html>
<head>
    <title>Validador de CPF</title>
</head>
<body>
    <h2>Validador de CPF</h2>
    <form method="post">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Formato válido: 123.456.789-09"><br><br>
        <input type="submit" value="Verificar CPF">
    </form>

    <?php
    function validarCPF($cpf) {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $cpf[$i] * (10 - $i);
        }
        $resto = $soma % 11;
        $digito_verificador_1 = ($resto < 2) ? 0 : 11 - $resto;

        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $cpf[$i] * (11 - $i);
        }
        $resto = $soma % 11;
        $digito_verificador_2 = ($resto < 2) ? 0 : 11 - $resto;

        if ($cpf[9] != $digito_verificador_1 || $cpf[10] != $digito_verificador_2) {
            return false;
        }

        return true; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cpf = $_POST['cpf'];
        if (validarCPF($cpf)) {
            echo "<p style='color: green;'>CPF válido!</p>";
        } else {
            echo "<p style='color: red;'>CPF inválido!</p>";
        }
    }
    ?>
</body>
</html>
