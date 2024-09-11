

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Endereço por CEP</title>
</head>
<body>
    <h1>Buscar Endereço por CEP</h1>
    <form method="post">
        <label for="cep">Digite o CEP:</label>
        <input type="text" id="cep" name="cep" placeholder="12345-678" required>
        <button type="submit">Buscar</button>
    </form>




    <?php
// Função para buscar o endereço por CEP
function buscarEnderecoPorCep($cep) {
    $cep = preg_replace('/\D/', '', $cep); // Remove qualquer caractere não numérico
    if (strlen($cep) !== 8) {
        return ['erro' => true, 'mensagem' => 'CEP inválido. Deve conter 8 dígitos.'];
    }

    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $response = file_get_contents($url);

    if ($response === FALSE) {
        return ['erro' => true, 'mensagem' => 'Erro ao buscar o CEP.'];
    }

    $data = json_decode($response, true);

    if (isset($data['erro']) && $data['erro'] === true) {
        return ['erro' => true, 'mensagem' => 'CEP não encontrado.'];
    }

    return $data;
}

$endereco = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cep'])) {
    $cep = $_POST['cep'];
    $endereco = buscarEnderecoPorCep($cep);
}
?>  
    <div>
        <?php if (!empty($endereco)): ?>
            <?php if (isset($endereco['erro']) && $endereco['erro']): ?>
                <p><?php echo htmlspecialchars($endereco['mensagem']); ?></p>
            <?php else: ?>
                <p><strong>CEP:</strong> <?php echo htmlspecialchars($endereco['cep']); ?></p>
                <p><strong>Logradouro:</strong> <?php echo htmlspecialchars($endereco['logradouro']); ?></p>
                <p><strong>Bairro:</strong> <?php echo htmlspecialchars($endereco['bairro']); ?></p>
                <p><strong>Cidade:</strong> <?php echo htmlspecialchars($endereco['localidade']); ?></p>
                <p><strong>Estado:</strong> <?php echo htmlspecialchars($endereco['uf']); ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>