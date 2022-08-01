<?php

include ('teste.php'); // Executa um codigo de outro arquivo php, porém o código da página atual não sofre se o caminho do include não for correto
require ('teste.php'); // Prescisa ser importado para o resto do código funcionar, se passarmos um caminho inexistente teremos erro fatal

//include_once evita recarregar algo que já foi carregado na página

