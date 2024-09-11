<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Disponibilidade de Domínio</title>
</head>
<body>
    <h2>Verificador de Disponibilidade de Domínio</h2>
    <form method="post" action="">
        Domínio: <input type="text" name="domain" required><br><br>
        <input type="submit" name="submit" value="Verificar Disponibilidade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $domain = $_POST['domain'];

        $apiKey = 'sua-chave-de-api-aqui';

        $url = "https://www.whoisxmlapi.com/whoisserver/WhoisService?domainName=$domain&apiKey=$apiKey";

        $response = file_get_contents($url);

        $data = json_decode($response, true);

        if ($data['WhoisRecord']['registryData']['domainAvailability'] == 'AVAILABLE') {
            echo "<p>O domínio '$domain' está disponível!</p>";
        } else {
            echo "<p>O domínio '$domain' não está disponível.</p>";
        }
    }
    ?>
</body>
</html>
