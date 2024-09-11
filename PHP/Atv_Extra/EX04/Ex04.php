<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Idade</title>
</head>
<body>
    <h2>Verificador de Idade</h2>
    <form method="post">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data_nascimento = $_POST['data_nascimento'];

        $data_atual = new DateTime();
        $data_nascimento = new DateTime($data_nascimento);
        $diferenca = $data_atual->diff($data_nascimento);
        $idade = $diferenca->y;

        if ($idade >= 18) {
            echo "<h3>Você é maior de idade.</h3>";
        } else {
            echo "<h3>Você é menor de idade.</h3>";
        }
    }
    ?>
</body>
</html>
