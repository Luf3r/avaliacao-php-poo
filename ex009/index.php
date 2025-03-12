<?php
require_once 'Usuario.php';
require_once 'Produto.php';

use App\Controle\Usuario;
use App\Models\Produto;

$usuario = new Usuario('João Silva');
$produto = new Produto('Notebook');

var_dump($usuario);
var_dump($produto);