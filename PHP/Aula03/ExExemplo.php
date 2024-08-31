<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $dados = array(1,2,4,6,16,32);  
    
    echo "<p>Array original</p>";
    for ($i=0; $i<=5 ; $i++) {

        echo "$dados[$i] <br>";
    }
    for ($i=0; $i<=5 ; $i++) {

        $dados[$i] = $dados[$i] * 3;
        echo "$dados[$i] <br>";
    }



    ?>
</body>
</html>