<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    $result1 = $_POST['result1'];
    $result2 = $_POST['result2'];

    $soma = $result1 * $result2;

    echo "<h3>Exercicio 07</h3>";
    if ($soma >= 50){
        echo "<p>A pontuação total da equipe é: $soma</p>";
    }
      else{
        echo "<p>Precisamos intensificar nossos treinos!</p>";
      }
     
    echo "<p>Programa encerrado</p>";
    ?>
  </body>
</html>
