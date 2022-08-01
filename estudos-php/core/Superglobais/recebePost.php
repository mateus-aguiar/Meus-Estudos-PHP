<?php
    if (isset($_POST['nome']) && isset($_POST['idade'])) {
        $nome = limpaPost($_POST['nome']);
        $idade = limpaPost($_POST['idade']);

        echo $nome . ' ' . $idade . ' anos';

    }

function limpaPost($valor): string
{
    $valor = trim($valor);
    $valor = stripcslashes($valor); // Remove barra invertida de uma string
    $valor = htmlspecialchars($valor); // Impede injeção de html
    return $valor;
}