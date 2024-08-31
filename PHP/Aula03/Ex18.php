<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];


    if($sexo == "masculino" && $idade >=18)
    {
        echo "$nome, você já pode fazer o alistamento";
    }
    else if ($sexo == "masculino" && $idade < 18) {
        echo "$nome, você só pode se alistar quando completar 18 anos";
    }
    
    else{
    echo "$nome, você não pode se alistar";
    }


    ?>

    
</body>
</html>