<?php

$ENV = parse_ini_file('.env');

$id_salvar = $_GET['$id'];
$nome_salvar = $_GET['$nome'];
$imagem = $_GET['$img'];

$dsn = "dbname={$ENV['DB_NAME']};host={$ENV['DB_LOCAL']}";
$usuario = "{$ENV['USER']}";
$senha = "{$ENV['SENHA']}";

$conn = new PDO ($dsn, $usuario, $senha);

$scriptInserir = "INSERT INTO tb_personagem (
nome, 
imagem
) VALUES 
:nome_personagem,
:imagem
);";

$scriptPreparado = $conn->prepare($scriptInserir);

$scriptPreparado->execute([
":nome_personagem" => $nome_salvar,
":imagem" => $imagem
]);
