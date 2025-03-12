<?php
class ContaBancaria {
    public function __construct(
        private string $titular,
        private float $saldo = 0
    ) {}

    public function depositar(float $valor): void {
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void {
        $this->saldo -= $this->saldo >= $valor ? $valor : 0;
    }

    public function consultarSaldo(): float {
        return $this->saldo;
    }
}

// Uso
$conta = new ContaBancaria('Carlos', 1000);
$conta->depositar(500);
$conta->sacar(200);
echo $conta->consultarSaldo();
?>