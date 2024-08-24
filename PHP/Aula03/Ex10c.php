<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10b</title>
</head>
<body>
<?php
     $num = $_POST['num'];
     $a = 0;
     $b = 1;
     $c = 0;
     $piso = 1;
    
     echo "<h3>Sequência de números</h3><br>";

     for($i=1; $i<$num; $i++){

        echo "$c <br>";
        $piso = $piso + $c**2;
        $c = $a + $b;
        
        $a = $b;
        $b = $c;

        
        

        if ($i<2){
            echo "$c <br>";
        }
        
      }

     echo "<p>São necessarios $piso pisos.</p>";


    ?>
    
</body>
</html>