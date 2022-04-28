<?php

    //strlen() [Conta quantas letras tem na string
    echo strlen('Oi');

    //str_word_count() [Conta quantas palavras tem em uma string
    echo str_word_count("Eu não sei quantas tem");

    //strrev() [inverte as palavras da string]
    echo strrev("Invertido");

    //strpos() [Procura se a palavra desejada está dentro de uma string e se tiver informa a posição]
    echo strpos("Oi tudo bom", "bom");

    //str_replace() [Substitui conteudo de uma string]
    $palavra = "ola mundo";
    echo str_replace("mundo", "Mateus", $palavra);