<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "db_books";

    $cn = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);
?>