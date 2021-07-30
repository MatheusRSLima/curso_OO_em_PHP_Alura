<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$umEndereco = new Endereco('Ribeirão Preto','Lagoinha','Av. Bananal', '520');
$outroEndereco = new Endereco('Ribeirão Preto', 'Anhanguera', '13 de maio','432');

echo $umEndereco->cidade;