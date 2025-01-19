<?php
// Incluir o arquivo Mpesa.php
require_once 'Mpesa.php'; 

// Definir as suas chaves e o ambiente
$api_key = "aaaab09uz9f3asdcjyk7els777ihmwv8";  // Sua API Key
$public_key = "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAszE..."; // Sua Public Key
$environment = "development";  // Ou 'production' para produ��o

// Inicializar a classe Mpesa
$mpesa = Mpesa::init($api_key, $public_key, $environment);

// Definir os dados da transa��o
$data = [
    "value" => 10,  // Valor a transferir
    "client_number" => "258840000000",  // N�mero do cliente benefici�rio
    "agent_id" => 171717,  // C�digo do agente
    "transaction_reference" => 1234567,  // Refer�ncia da transa��o
    "third_party_reference" => 33333  // Refer�ncia para consulta das transa��es
];

// Chamar o m�todo b2c para transferir dinheiro
$response = $mpesa->b2c($data);

// Exibir a resposta
echo "<pre>";
print_r($response);
echo "</pre>";
?>
