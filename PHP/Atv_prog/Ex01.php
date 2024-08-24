<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01</title>
  </head>
  <body>
    <h1>Exercicio 01</h1>

    <?php
      $conta = $_POST['conta'];
      $gorjeta = $_POST['gorjeta'];

      $porc = ($conta/100)*$gorjeta;

      echo "Se o valor é R$ $conta e a gorjeta desejada é $gorjeta%, então o valor é R$ $porc";


    ?>
  </body>
</html>
