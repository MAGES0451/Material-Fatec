<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $frutas = array("Abacate", "Banana", "Cajú", "Maracujá", "Morango", "Melância", "Jabuticaba");

    
    for ($i=1; $i<7; $i+=2){
    echo "<br/ >" . $frutas[$i];
    
    }
    ?>
</body>
</html>