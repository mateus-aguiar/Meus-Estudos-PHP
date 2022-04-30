<?php

// Aspas simples: Com aspas simples, você têm uma string realmente como ela foi declarada, independente
// de qualquer caractere especial (com exceção do caractere de escape – \n\t\r, etc).

// Exemplo:

$teste1 = 1;

echo 'Preciso beber um copo d\água. \ $teste1' . PHP_EOL;


// Já as aspas duplas serão processadas, suportando mais caracteres de escape, tais como
// \n, \r, \t e outros. Além disso, variáveis serão expandidas (ou interpoladas),
// por exemplo: "Meu sobrenome é $sobrenome!".

$variavel = 'uma frase';

echo "esta é uma $variavel bem simples";