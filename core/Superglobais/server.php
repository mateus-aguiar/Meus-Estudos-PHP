<?php

// Para consulta https://www.w3schools.com/php/php_superglobals_server.asp

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR']; // Mostra ip do servidor
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];