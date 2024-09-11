<!DOCTYPE html>
<html>
<head>
    <title>Registro de Receitas e Despesas</title>
</head>
<body>
    <h2>Registro de Receitas e Despesas</h2>
    <form method="post" action="">
        <label>Tipo de Transação:</label><br>
        <select name="tipo_transacao" required>
            <option value="receita">Receita</option>
            <option value="despesa">Despesa</option>
        </select><br><br>
        <label>Valor:</label><br>
        <input type="number" name="valor" min="0" step="0.01" required><br><br>
        <label>Categoria:</label><br>
        <input type="text" name="categoria" required><br><br>
        <input type="submit" name="submit" value="Registrar Transação">
    </form>

    <?php
    $saldo = 0;

    $transacoes = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $tipo_transacao = $_POST['tipo_transacao'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];

        $transacoes[] = array(
            'tipo' => $tipo_transacao,
            'valor' => $valor,
            'categoria' => $categoria
        );

        if ($tipo_transacao == 'receita') {
            $saldo += $valor;
        } else {
            $saldo -= $valor;
        }
    }

    echo "<h3>Saldo Atual: R$ " . number_format($saldo, 2, ',', '.') . "</h3>";

    if (!empty($transacoes)) {
        echo "<h3>Relatório de Gastos por Categoria</h3>";
        $gastos_por_categoria = array();
        foreach ($transacoes as $transacao) {
            if ($transacao['tipo'] == 'despesa') {
                $categoria = $transacao['categoria'];
                if (!isset($gastos_por_categoria[$categoria])) {
                    $gastos_por_categoria[$categoria] = 0;
                }
                $gastos_por_categoria[$categoria] += $transacao['valor'];
            }
        }
        if (!empty($gastos_por_categoria)) {
            foreach ($gastos_por_categoria as $categoria => $valor) {
                echo "<p>Categoria: $categoria - Valor Total: R$ " . number_format($valor, 2, ',', '.') . "</p>";
            }
        } else {
            echo "<p>Não há despesas registradas para exibir relatório de gastos por categoria.</p>";
        }
    } else {
        echo "<p>Não há transações registradas ainda.</p>";
    }
    ?>
</body>
</html>
