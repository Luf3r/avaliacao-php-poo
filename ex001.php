<?php
class Carro {
    public function __construct(
        private string $marca,
        private string $modelo,
        private int $ano
    ) {}

    public function exibir(): string {
        return "$this->marca $this->modelo ($this->ano)";
    }
}

$meuCarro = new Carro('Toyota', 'Corolla', 2022);
echo $meuCarro->exibir();
?>