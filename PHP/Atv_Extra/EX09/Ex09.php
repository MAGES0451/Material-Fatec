<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form method="post">
        <label for="peso">Peso (em KG):</label>
        <input type="text" id="peso" name="peso" required><br><br>

        <label for="altura">Altura (em METROS):</label>
        <input type="text" id="altura" name="altura" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);

        echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";

        if ($imc < 18.5) {
            echo "<p>Você está abaixo do peso.</p>";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "<p>Seu peso está normal.</p>";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "<p>Você está com sobrepeso.</p>";
        } else {
            echo "<p>Você está obeso.</p>";
        }
    }
    ?>
</body>
</html>
