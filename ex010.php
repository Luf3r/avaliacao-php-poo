<?php
class DivisionByZeroException extends Exception {}

class Calculadora {
    public function dividir(float $a, float $b): float {
        if ($b == 0) {
            throw new DivisionByZeroException();
        }
        return $a / $b;
    }
}

try {
    $calc = new Calculadora();
    echo "Resultado: " . $calc->dividir(10, 2) . "\n";
    echo "Resultado: " . $calc->dividir(5, 0);
} catch (DivisionByZeroException $e) {
    echo "Erro: Não é possível dividir por zero!";
}
?>