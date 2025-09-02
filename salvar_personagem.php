<?php

include './template/header.php';

$_ENV = parse_ini_file('.env');

$id = $_GET["id_salvar"];
$nome_salvar = $_GET["nome_salvar"];
$imagem = $_GET["img_salvar"];


$dsn = "mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_LOCAL']}";
$usuario = "{$_ENV['USER']}";
$senha = "{$_ENV['SENHA']}";

$conn = new PDO($dsn, $usuario, $senha);



$scriptConsulta = "SELECT * FROM tb_personagem WHERE nome = '$nome_salvar'";
$scriptPrepararSelect = $conn->prepare($scriptConsulta);
$scriptPrepararSelect->execute([]);

if ($scriptPrepararSelect->rowCount() > 0) {
    header("location:./index.php?alert=1");
} else {
    $scriptInserir = "INSERT INTO tb_personagem (
nome, 
imagem
) VALUES ( 
:nome_personagem,
:imagem
)";
    $scriptPreparado = $conn->prepare($scriptInserir);
    $scriptPreparado->execute([
        ":nome_personagem" => $nome_salvar,
        ":imagem" => $imagem
    ]);

    header("location:./index.php");
}
