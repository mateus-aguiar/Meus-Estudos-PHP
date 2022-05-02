<?php
if (isset($_GET['nome'])) {
    $nome = htmlspecialchars($_GET['nome']); // Impede de ser utilizado caracteres especiais na url, evita problemas de vunerabilidade do GET
} else {
    $nome = "Mateus";
}

if (isset($_GET['idade'])) {
    $idade = htmlspecialchars($_GET['idade']); // Impede de ser utilizado caracteres especiais na url, evita problemas de vunerabilidade do GET
} else {
    $idade = 19;
}

echo $nome . ' ' . $idade . ' anos';
