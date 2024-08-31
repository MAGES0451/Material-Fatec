<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
     $letra = $_POST['letra'];
     
     $letras = array("A","B","C","D","E");
     
    
     echo "<h3>Array Alterado</h3><br>";

     for ($i=0; $i<5; $i++){ 

        
        
        if (letras[$i] == $letra)
        {
            $letras[$i] = "X";
        }
        }
        echo $letras[0] . "<br>";
        echo $letras[1] . "<br>";
        echo $letras[2] . "<br>";
        echo $letras[3] . "<br>";
        echo $letras[4] . "<br>";

    ?>
    
</body>
</html>