<!DOCTYPE html>
<html>
<head>
    <title>Contador de Palavras</title>
</head>
<body>
    <h2>Contador de Palavras</h2>
    <form method="post">
        <label for="texto">Digite o Texto:</label><br>
        <textarea id="texto" name="texto" rows="5" cols="50" required></textarea><br><br>
        <input type="submit" value="Contar Palavras">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];

        $palavras = explode(" ", $texto);

        $numero_palavras = count($palavras);

        echo "<h3>O texto contém $numero_palavras palavra(s).</h3>";
    }
    ?>
</body>
</html>
