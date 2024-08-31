<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $carros = array("gol", "corsa", "pálio", 15, 0, true);

    print_r($carros);

    echo "<br/ >    " . $carros[3] *3;

    ?>
</body>
</html>