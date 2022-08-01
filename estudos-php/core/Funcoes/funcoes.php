<?php

// Sintaxa funcoes :
// function nome da função (parametros) : tipo da função{
// código
//}


//Boa prática é informar o tipo desejado dos parametros das funções
function escreverMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

function enviarMensagem(string $mensagem): string
{
    return $mensagem . PHP_EOL;
}

escreverMensagem('Olá Mundo');

$mensagem = enviarMensagem('Teste');

echo $mensagem;