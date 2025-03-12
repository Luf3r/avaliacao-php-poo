<?php
interface Movimentavel {
    public function mover(): string;
}

class Carro implements Movimentavel {
    public function mover(): string {
        return "O carro está se movendo!";
    }
}

class Bicicleta implements Movimentavel {
    public function mover(): string {
        return "A bicicleta está se movendo!";
    }
}

$veiculos = [new Carro(), new Bicicleta()];

foreach ($veiculos as $veiculo) {
    echo $veiculo->mover() . "\n";
}
?>