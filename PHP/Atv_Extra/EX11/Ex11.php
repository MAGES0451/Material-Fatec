<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h2>Conversor de Temperatura Celsius para Fahrenheit</h2>
    <form method="post" action="">
        Temperatura em Celsius: <input type="text" name="celsius" required><br><br>
        <input type="submit" name="submit" value="Converter">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        
        $fahrenheit = ($celsius * 9/5) + 32;
        
        echo "<br><strong>$celsius</strong> graus Celsius é equivalente a <strong>$fahrenheit</strong> graus Fahrenheit.";
    }
    ?>
</body>
</html>
