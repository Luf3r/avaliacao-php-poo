<?php
abstract class Animal {
    abstract public function fazerSom(): string;
}

class Cachorro extends Animal {
    public function fazerSom(): string {
        return "Au Au!";
    }
}

class Gato extends Animal {
    public function fazerSom(): string {
        return "Miau!";
    }
}

class Zoo {
    public function fazerBarulho(Animal $animal): void {
        echo $animal->fazerSom() . "\n";
    }
}

$zoo = new Zoo();
$zoo->fazerBarulho(new Cachorro());
$zoo->fazerBarulho(new Gato());
?>