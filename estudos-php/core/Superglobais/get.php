<?php
// TODA VEZ QUE FOR USAR GET TEM QUE FAZER UMA VERIFICAÇÂO SE A VARIAVEL GET NÂO ESTÀ VAZIA
// isset() verifica se a variavel nao está vazia
//if (isset($_GET['nome'])) {
//    $nome = htmlspecialchars($_GET['nome']); // Impede de ser utilizado caracteres especiais na url, evita problemas de vunerabilidade do GET
//} else {
//    $nome = "Mateus";
//}
//
//if (isset($_GET['idade'])) {
//    $nome = htmlspecialchars($_GET['idade']); // Impede de ser utilizado caracteres especiais na url, evita problemas de vunerabilidade do GET
//} else {
//    $nome = 19;
//}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get" action="recebeGet.php">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <br>
    <br>
    <input type="text" name="idade" placeholder="Digite sua idade">
    <h1><button type="submit">Enviar</button></h1>
</form>
</body>
</html>
