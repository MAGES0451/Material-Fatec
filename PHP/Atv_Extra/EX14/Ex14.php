<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Média</title>
</head>
<body>
    <h2>Calculadora de Média</h2>
    <form method="post" action="">
        Nota da disciplina 1: <input type="number" name="nota1" min="0" max="10" step="0.01" required><br><br>
        Nota da disciplina 2: <input type="number" name="nota2" min="0" max="10" step="0.01" required><br><br>
        Nota da disciplina 3: <input type="number" name="nota3" min="0" max="10" step="0.01" required><br><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        if ($media >= 7) {
            echo "<p>A média do aluno é <strong>$media</strong>. Parabéns! Você foi aprovado!</p>";
        } else {
            echo "<p>A média do aluno é <strong>$media</strong>. Infelizmente, você foi reprovado.</p>";
        }
    }
    ?>
</body>
</html>
