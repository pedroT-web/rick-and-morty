<?php
$_ENV = parse_ini_file('.env');


$dsn = "mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_LOCAL']}";
$usuario = "{$_ENV['USER']}";
$senha = "{$_ENV['SENHA']}";

$conn = new PDO($dsn, $usuario, $senha);