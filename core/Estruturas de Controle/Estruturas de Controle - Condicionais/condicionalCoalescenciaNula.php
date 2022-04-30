<?php

// Faz uma checagem de uma variavel e ve se existe um valor dentro dela, se não existir retorna um valor padrão
// Porém não altera a variavel original
// Variavel ?? retorno caso não tenha valor;

$user = [

    'Idade' => 19,
];

echo $user['nome'] ?? 'Mateus'.PHP_EOL;
echo $user['nome'].PHP_EOL;