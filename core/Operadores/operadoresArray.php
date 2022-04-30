<?php

// Operador de união +

$user = [
   'nome' => 'Mateus',
    'idade' => 19,
    'cidade' => 'Jundiai'
];

$estudo = [
    'faculdade' => 'FATEC',
    'cidade' => 'Jundiai',
    'horario' => 'tarde'
];

$uniao = $user + $estudo;

// Para printar o conteudo de uma Array
print_r($uniao);

// Operador de igualdade ==

$userOne = [
    'nome' => 'Mateus',
    'idade' => 19
];

$userTwo = [
    'nome' => 'Mateus',
    'idade' => '19'
];

var_dump($userOne == $userTwo);

// Operador idêntico ===

$userOne = [
    'name' => 'Mateus',
    'age' => 19
];

$userTwo = [
    'name' => 'Mateus',
    'age' => 19
];

var_dump($userOne === $userTwo);

// Operador diferença !=

$userOne = [
    'name' => 'Fulano',
    'age' => 19
];

$userTwo = [
    'name' => 'Ciclano',
    'age' => 19
];

var_dump($userOne != $userTwo);

// Operador não idêntico

$userOne = [
    'name' => 'Mateus',
    'age' => 19
];

$userTwo = [
    'name' => 'Mateus',
    'age' => '19'
];

var_dump($userOne !== $userTwo);