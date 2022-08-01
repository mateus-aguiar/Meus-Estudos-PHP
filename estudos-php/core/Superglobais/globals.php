<?php

$a = 10;
$b = 20;

function soma() {
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    //$c = $a + $b ira dar erro pois as variavéis a e b estão foda do escopo da função
}

soma();
echo $c;