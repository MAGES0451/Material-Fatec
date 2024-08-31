<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $paises = array("Brasil", "Chile", "Equador", "Guatemala", "Mexico", "Moçambique", "Uruguai");

    
    for ($i=0; $i<7; $i+=2){
    echo "<br/ >" . $paises[$i];
    
    }
    ?>
</body>
</html>