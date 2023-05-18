<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_miga";
$conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
?>