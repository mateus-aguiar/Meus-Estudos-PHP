<?php

$nome = 'Mateus';
$empregado = false;
$idade = 15;

// Se o primeiro if for verdade, mesmo se os outro também forem verdade, só sera executado o primeiro
if ($idade >= 18) {
    echo 'Vc é maior de idade pode dirigir';
} elseif ($nome == 'Mateus') {
    echo 'Se isso for verdadeiro sera mostrado';
} else {
    echo 'Se tudo isso não for verdadeiro isso será mostrado';
}