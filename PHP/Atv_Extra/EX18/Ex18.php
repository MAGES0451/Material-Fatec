<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Frete</title>
</head>
<body>
    <h2>Calculadora de Frete</h2>
    <form method="post" action="">
        Peso do pacote (em kg): <input type="text" name="peso" required><br><br>
        Destino:
        <select name="destino">
            <option value="Nacional">Nacional</option>
            <option value="Internacional">Internacional</option>
        </select><br><br>
        <input type="submit" name="calcular" value="Calcular Frete">
    </form>

    <?php
    $precos = array(
        "Nacional" => array(
            "0-1" => 10,
            "1-5" => 20,
            "5-10" => 30,
            "10+" => 50
        ),
        "Internacional" => array(
            "0-1" => 50,
            "1-5" => 100,
            "5-10" => 150,
            "10+" => 200
        )
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
        $peso = $_POST['peso'];
        $destino = $_POST['destino'];

        if ($peso <= 1) {
            $faixa = "0-1";
        } elseif ($peso <= 5) {
            $faixa = "1-5";
        } elseif ($peso <= 10) {
            $faixa = "5-10";
        } else {
            $faixa = "10+";
        }

        if (array_key_exists($destino, $precos)) {
            if (array_key_exists($faixa, $precos[$destino])) {
                $valor_frete = $precos[$destino][$faixa];
                echo "<p>O valor do frete para um pacote de $peso kg com destino $destino é R$ $valor_frete.</p>";
            } else {
                echo "<p>Não foi possível calcular o frete para o peso informado.</p>";
            }
        } else {
            echo "<p>Destino inválido.</p>";
        }
    }
    ?>
</body>
</html>
