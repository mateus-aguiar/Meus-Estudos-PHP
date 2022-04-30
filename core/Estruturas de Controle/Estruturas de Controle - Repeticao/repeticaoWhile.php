<?php

$desempregado = true;
$diasEstudados = 0;
while ($desempregado) {
    $diasEstudados++;
    echo "Estudei $diasEstudados dias" . PHP_EOL;
    if ($diasEstudados == 10) {
        $desempregado = false;
    }
}

$i = 0;
do {
    echo 'Teste ' . ($i + 1) . PHP_EOL;
    $i++;
} while ($i < 10);