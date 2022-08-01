<?php

// Consulta https://www.php.net/manual/pt_BR/datetime.format.php

// Mostra o dia mes e ano do servidor
echo date('d/m/Y') . PHP_EOL;

//Hora do servidor
echo date('H:i:s') . PHP_EOL;

//Padrão brasileiro de data
//dia/mes/ano

//Padrão americano
//ano/mes/dia

//Calcular dias entre datas
$hoje = date('Y-m-d');
$vencimento = '2022-10-15';

//Conversao para o padrão BR
$dataHoje = explode('-', $hoje);
$hojeFormatado = $dataHoje[2] . "/" . $dataHoje[1] . "/" . $dataHoje[0];

$dataVenc = explode('-', $vencimento);
$vencFormatado = $dataVenc[2] . "/" . $dataVenc[1] . "/" . $dataVenc[0];

$diferenca = strtotime($vencimento) - strtotime($hoje);
$dias = floor($diferenca / (60*60*24)); // floor arredonda | e a strtotime transforma uma string em uma data porem ele transforma em horas minutos e segundos

echo "Vencimento: $vencFormatado" . PHP_EOL;
echo "Hoje: $hojeFormatado" . PHP_EOL;
echo "A diferença é de $dias dias entre as datas";