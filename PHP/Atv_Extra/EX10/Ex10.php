<!DOCTYPE html>
<html>
<head>
    <title>Calendário de Eventos</title>
</head>
<body>
    <h2>Calendário de Eventos</h2>

    <h3>Adicionar Evento</h3>
    <form action="adicionar_evento.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="data_inicio">Data de Início:</label>
        <input type="datetime-local" id="data_inicio" name="data_inicio" required><br><br>

        <label for="data_fim">Data de Fim:</label>
        <input type="datetime-local" id="data_fim" name="data_fim" required><br><br>

        <input type="submit" value="Adicionar">
    </form>

    <h3>Eventos</h3>
    <ul>
        <?php
        include 'conexao.php';
        $sql = "SELECT * FROM eventos";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["titulo"] . " - " . $row["data_inicio"] . " até " . $row["data_fim"] . " <a href='excluir_evento.php?id=" . $row["id"] . "'>Excluir</a></li>";
            }
        } else {
            echo "Nenhum evento encontrado.";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
