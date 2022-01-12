<?php

/**
 * Foreach é uma maneira fácil de iterar sobre arrays
 * Somente pode ser usado em Arrays e Objetos
 * */

$arr = [
    1,
    2,
    3,
    4,
    5
];


// Basicamente teremos um loop com tamanho igual o do array ou objto, onde cada vez que se repete o valor contido
// Dentro desse array será atribuido a variavel $valor (Pode ser qualquer nome de variavel)
foreach ($arr as $valor) {
    echo $valor . PHP_EOL;
}


$user = [
    'nome' => 'Mateus',
    'idade' => '19'
];

// Podemos usar o foreach com chave-valor tbm
foreach ($user as $chave => $valor) {
    echo $chave . " " . $valor . PHP_EOL;
}