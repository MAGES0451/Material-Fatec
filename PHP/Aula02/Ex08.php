<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    $temp = $_POST['temp'];

    echo "<h3>Exercicio 08</h3>";
    if ($temp > 0){
        echo "<p>Temperatura ameno e agradavel!</p>";
    }
      else if ($temp < 0){
        echo "<p>Frio intenso detectado!</p>";
      }
      else{
        echo "<p>Temperatura neutra</p>";
      }
    echo "<p>Programa encerrado</p>";
    ?>
  </body>
</html>
