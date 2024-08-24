<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <?php
     $num = $_POST['num'];
     $a=1;

     echo "<h3>Sequência de números</h3><br>";

     while ($a <= $num) {
        
        echo "$a <br>";
        $a+=2;
     }

     echo "<p>Sequência encerrada</p>";

    ?>
    
</body>
</html>