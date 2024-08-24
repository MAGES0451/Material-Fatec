<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    $idade = $_POST['txtnum'];

    echo "<h3>Exercicio 06</h3>";
    if ($idade >= 60){
        echo "<p>Receba a pulseira VIP para Idoso!</p>";
    }
      else if ($idade >= 18){
        echo "<p>Receba a pulseira NORMAL</p>";
      }
      else{
        echo "<p>Receba a pulseira para MENORES</p>";
      }
    echo "<p>Programa encerrado</p>";
    ?>
  </body>
</html>
