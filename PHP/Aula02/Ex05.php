<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 05</title>
  </head>
  <body>
  <?php
    $idade = $_POST['txtnum'];

    echo "<h3>Exercicio 05</h3>";
    if ($idade < 10){
        echo "<p>Desculpe, apenas alunos com 10 anos ou mais podem entrar na festa</p>";
    }
      else{
        echo "<p>Bem-vindo à festa!</p>";
      }
    echo "<p>Programa encerrado</p>";
    ?>
  </body>
</html>
