<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $desc1 = $_POST['desc1'];
    $desc2 = $_POST['desc2'];

    echo "<h3>Calcula Desconto</h3>";

    echo "O valor do 1º produto com desconto é: R$ " . $n1 - ($n1 * ($desc1 / 100))."<br><br>";

    echo "O valor do 2º produto com desconto é: R$ " . $n2 - ($n2 * ($desc2 / 100))."<br><br>";

    echo "O valor total é: R$ " . ($n1 - ($n1 * ($desc1 / 100))) + ($n2 - ($n2 * ($desc2 / 100)));






    ?>
    
</body>
</html>