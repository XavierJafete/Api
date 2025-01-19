<?php
class Mpesa {
    private $api_key;
    private $public_key;
    private $environment;

    public function __construct($api_key, $public_key, $environment) {
        $this->api_key = $api_key;
        $this->public_key = $public_key;
        $this->environment = $environment;
    }

    public static function init($api_key, $public_key, $environment) {
        return new self($api_key, $public_key, $environment);
    }

    // Exemplo de método
    public function b2c($data) {
        // Aqui você pode implementar a lógica de transferência B2C
        return [
            'output_ResponseCode' => 'INS-0',
            'output_ResponseDesc' => 'Request processed successfully',
            'output_TransactionID' => 'wgzupjwc5mm9',
            'output_ConversationID' => 'ccf590fbfa1d4ff4a245b9c430a64220',
            'output_ThirdPartyReference' => $data['third_party_reference']
        ];
    }

    // Outros métodos podem ser adicionados, como c2b(), b2b(), etc.
}
?>