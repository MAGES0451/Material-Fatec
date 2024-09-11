<!DOCTYPE html>
<html lang="">
<head>
    <title>Verificador de Palíndromos</title>
</head>
<body>
    <h1>Verificador de Palíndromos</h1>
    <form action="" method="post">
        <label for="palavra">Digite uma palavra ou frase:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit">Verificar</button>
    </form>




<?php
function ehPalindromo($palavra) {
    
    $palavra = strtolower(preg_replace('/\s+/', '', $palavra));
    
   
    $palavra = preg_replace('/[^a-z0-9]/i', '', $palavra);
    
    
    $palavraInvertida = strrev($palavra);
    
    
    return $palavra === $palavraInvertida;
}

$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $palavra = $_POST['palavra'];
    
    
    if (ehPalindromo($palavra)) {
        $resultado = '"' . htmlspecialchars($palavra) . '" é um palíndromo.';
    } else {
        $resultado = '"' . htmlspecialchars($palavra) . '" não é um palíndromo.';
    }
}



    
    if (!empty($resultado)) {
        echo "<p>$resultado</p>";
    }
    ?>

</body>
</html>
