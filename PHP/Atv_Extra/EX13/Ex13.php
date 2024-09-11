<!DOCTYPE html>
<html>
<head>
    <title>Jogo de Adivinhação</title>
</head>
<body>
    <h2>Jogo de Adivinhação</h2>
    <p>Tente adivinhar o número entre 1 e 100 que o computador escolheu!</p>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $guess = $_POST['guess'];

        $randomNumber = rand(1, 100);
        
        if ($guess == $randomNumber) {
            echo "<p>Parabéns! Você adivinhou corretamente o número $randomNumber!</p>";
        } elseif ($guess < $randomNumber) {
            echo "<p>Seu palpite ($guess) é muito baixo. Tente novamente!</p>";
        } else {
            echo "<p>Seu palpite ($guess) é muito alto. Tente novamente!</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        Seu palpite: <input type="number" name="guess" min="1" max="100" required><br><br>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
