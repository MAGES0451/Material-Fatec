<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>
<body>
    <?php

    $t1 = $_POST['t1'];
    $tq = $_POST['tq'];
    $razao = $_POST['razao'];

    $aux = $t1;

    echo "<h3>Progressão geométrica</h3>";

  
    for ($i=$t1; $i <= $tq ; $i++) { 

        echo $aux. "<br>";
        $aux = $aux * $razao;

        




    }




    ?>
    
</body>
</html>