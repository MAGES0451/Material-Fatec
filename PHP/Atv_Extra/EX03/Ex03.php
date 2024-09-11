<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moedas</title>
</head>
<body>
    <h2>Conversor de Moedas</h2>
    <form method="post">
        <label for="valor_dolar">Valor em Dólares:</label>
        <input type="text" id="valor_dolar" name="valor_dolar" required><br><br>

        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $api_key = "sua_api_key_aqui";

        $valor_dolar = $_POST['valor_dolar'];

        $api_url = "https://open.er-api.com/v6/latest/USD?app_id=" . $api_key;

        $response = file_get_contents($api_url);

        $data = json_decode($response);

        if ($data && isset($data->rates->BRL)) {
            $taxa_cambio = $data->rates->BRL;

            $valor_reais = $valor_dolar * $taxa_cambio;

            echo "<h3>O valor em Reais é: R$ " . number_format($valor_reais, 2, ',', '.') . "</h3>";
        } else {
            echo "<p style='color: red;'>Erro ao obter a taxa de câmbio.</p>";
        }
    }
    ?>
</body>
</html>
