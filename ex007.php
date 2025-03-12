<?php
abstract class Forma {
    abstract public function area(): float;
}

class Retangulo extends Forma {
    public function __construct(
        private float $largura,
        private float $altura
    ) {}
    
    public function area(): float {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma {
    public function __construct(private float $raio) {}
    
    public function area(): float {
        return pi() * pow($this->raio, 2);
    }
}

$retangulo = new Retangulo(5, 3);
$circulo = new Circulo(4);

echo "Área do retângulo: " . $retangulo->area() . "\n";
echo "Área do círculo: " . number_format($circulo->area(), 5);
?>