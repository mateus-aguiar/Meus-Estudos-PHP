<?php

$vetor = [
    'Mateus',
    19,
    'jundiai'
];

echo $vetor[2] . PHP_EOL;

// Em array podemos utilizar palavras-chave ao invés de utilizarmos indices
// Em vez de termos a posição 0 1 2 , temos palavras chaves referenciando o valor

$chaveValor = [
    'nome' => 'Mateus',
    'idade' => 19,
    'cidade' => 'jundiai'
];

echo $chaveValor['idade'] . PHP_EOL;