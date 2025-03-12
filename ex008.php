<?php
trait Logavel {
    public function logar() {
        echo "Logando...\n";
    }
}

class Usuario { use Logavel; }
class Administrador { use Logavel; }

// Teste
(new Usuario())->logar();
(new Administrador())->logar();
?>