<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Gorjeta</title>
</head>
<body>
    <h2>Calculadora de Gorjeta</h2>
    <form method="post">
        <label for="total_conta">Valor Total da Conta:</label>
        <input type="text" id="total_conta" name="total_conta" required><br><br>

        <label for="percentual_gorjeta">Percentual de Gorjeta (%):</label>
        <input type="text" id="percentual_gorjeta" name="percentual_gorjeta" required><br><br>

        <input type="submit" value="Calcular Gorjeta">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['total_conta']) && !empty($_POST['percentual_gorjeta'])) {
            $total_conta = $_POST['total_conta'];
            $percentual_gorjeta = $_POST['percentual_gorjeta'];

            $gorjeta = $total_conta * ($percentual_gorjeta / 100);

            // Exibe o resultado
            echo "<h3>Valor da Gorjeta: R$ " . number_format($gorjeta, 2, ',', '.') . "</h3>";
        } else {
            echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
        }
    }
    ?>
</body>
</html>
