<?php
// Incluir o arquivo Mpesa.php
require_once 'Mpesa.php'; 

// Definir as suas chaves e o ambiente
$api_key = "aaaab09uz9f3asdcjyk7els777ihmwv8";  // Sua API Key
$public_key = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAszE..."; // Sua Public Key
$environment = "development";  // Ou 'production' para produção

// Inicializar a classe Mpesa
$mpesa = Mpesa::init($api_key, $public_key, $environment);

// Definir os dados da transação
$data = [
    "value" => 10,  // Valor a transferir
    "client_number" => "258840000000",  // Número do cliente beneficiário
    "agent_id" => 171717,  // Código do agente
    "transaction_reference" => 1234567,  // Referência da transação
    "third_party_reference" => 33333  // Referência para consulta das transações
];

// Chamar o método b2c para transferir dinheiro
$response = $mpesa->b2c($data);

// Exibir a resposta
echo "<pre>";
print_r($response);
echo "</pre>";
?>
