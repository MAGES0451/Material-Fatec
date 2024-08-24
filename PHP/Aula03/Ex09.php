<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 09</title>
  </head>
  <body>
    <?php
      $num = $_POST['num'];

      echo "Sequência de números<br>";
      for($i=0; $i<=$num; $i++){
        echo "$i<br>";
      }
    ?>
  </body>
</html>
