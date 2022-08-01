<?php

// Variaveis e Constantes


// Variaveis são definidas usando o cifrão
//Não pode iniciar variaveis com números
$nome = "Mateus";

echo $nome . PHP_EOL;

const constante = 'conteudo da constante';

echo constante . PHP_EOL;

// Podemos definir variaveis globais dentro de uma função
function teste() {
    global $x, $y, $z; // podemos utilizar o valor dessas váriaveis fora da função
    $z = $x + $y;
};
