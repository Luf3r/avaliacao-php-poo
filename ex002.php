<?php
class Pessoa {
    public function __construct(
        private string $nome,
        private int $idade,
        private string $sexo
    ) {}

    public function falar(): void {
        echo "Olá, meu nome é $this->nome e tenho $this->idade anos.";
    }
}

$pessoa = new Pessoa('Maria', 30, 'F');
$pessoa->falar();
?>