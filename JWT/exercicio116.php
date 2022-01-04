<?php

//require_once "../vendor/autoload.php";

//namespace JWT;

error_reporting(E_ALL);

class Pessoa
{
    public int $id;
    public string $nome;
    public string $email;
    public string $profissao;
    public string $escolaridade;
    public string $token;

    public function __construct(int $id, string $nome, string $email, string $profissao, string $escolaridade)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->profissao = $profissao;
        $this->escolaridade = $escolaridade;
    }

    public function setToken(string $key)
    {
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        $payload = json_encode([
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'profissao' => $this->profissao,
            'escolaridade' => $this->escolaridade
        ]);

        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $key, true);
        
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

        $this->token = $jwt;
    }
}

$pessoas = [];

for ($i=1; $i <= 15; $i++) { 
    $pessoa = new Pessoa(
        $i,
        "Pessoa{$i}",
        "email{$i}@email.com",
        "Profissao{$i}",
        "Escolaridade{$i}"
    );

    $pessoa->setToken('f45ADAsaDS4');

    $pessoas[] = $pessoa;
}

echo "<pre>";
print_r($pessoas);
echo "</pre>";

die();

foreach ($pessoas as $pessoa) {
    var_export($value);
    echo "<br><br>";
}
