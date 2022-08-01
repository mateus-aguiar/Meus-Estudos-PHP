<?php

// Quando for trabalhar com pastas sempre usar letra minuscula evitando caracteres espéciais e espaços em branco

$pasta = "nova-pasta";
$dupla = "teste/nova-pasta";

//CRIAR PASTA
if (!is_dir($pasta)) { // Se não existe o diretório pasta
    mkdir($pasta, 0755); //Por questões de segurança crias pastas com a permissão somente de leitura e execução
} else {
    rmdir($pasta); // Deleta a pasta se ela estiver vazia
}

if (!is_dir($dupla)) { // Se não existe o diretório
    mkdir($dupla, 0755, true); // Passamos true para ser possivel criar duas pastas
} else {
    rmdir($dupla); // Deleta a pasta se ela estiver vazia
}

//Renomear Pasta
if (!is_dir($pasta)) { // Se não existe o diretório pasta
    rename($pasta, 'teste'); // Não se tem comando para mover pasta, usamos o rename para tal
}

