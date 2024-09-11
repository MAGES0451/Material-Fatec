<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Tempo de Viagem</title>
</head>
<body>
    <h2>Calculadora de Tempo de Viagem</h2>
    <form method="post" action="">
        Distância (em km): <input type="number" name="distancia" required><br><br>
        Velocidade média (em km/h): <input type="number" name="velocidade" required><br><br>
        <input type="submit" name="calcular" value="Calcular Tempo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
        $distancia = $_POST['distancia'];
        $velocidade = $_POST['velocidade'];

        $tempo_horas = $distancia / $velocidade;

        $horas = floor($tempo_horas);
        $minutos = round(($tempo_horas - $horas) * 60);

        echo "<p>O tempo estimado de viagem é de $horas horas e $minutos minutos.</p>";
    }
    ?>
</body>
</html>
