<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Contatos</title>
</head>
<body>
    <h2>Agenda de Contatos</h2>
    
    <?php
    $contatos = array();
    
    if (isset($_POST['adicionar'])) {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $contatos[] = array('nome' => $nome, 'telefone' => $telefone);
    }
    
    if (isset($_POST['excluir'])) {
        $indice = $_POST['indice'];
        unset($contatos[$indice]);
        $contatos = array_values($contatos);
    }
    ?>

    <h3>Adicionar Contato</h3>
    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Telefone: <input type="text" name="telefone" required><br><br>
        <input type="submit" name="adicionar" value="Adicionar Contato">
    </form>

    <h3>Contatos</h3>
    <ul>
        <?php
        foreach ($contatos as $indice => $contato) {
            echo "<li>{$contato['nome']} - {$contato['telefone']} <form method='post' action=''><input type='hidden' name='indice' value='$indice'><input type='submit' name='excluir' value='Excluir'></form></li>";
        }
        ?>
    </ul>
</body>
</html>
