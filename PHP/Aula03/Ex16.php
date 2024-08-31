<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        for ($i=$n1; $i <= $n2 ; $i++) { 
            echo $i . "<br>";
        }


    ?>



</body>
</html>