<?php
require('./config.php');
include './template/header.php';



$id = $_GET["id_salvar"];
$nome_salvar = $_GET["nome_salvar"];
$imagem = $_GET["img_salvar"];

$scriptConsulta = "SELECT * FROM tb_personagem WHERE nome = '$nome_salvar'";
$scriptPrepararSelect = $conn->prepare($scriptConsulta);
$scriptPrepararSelect->execute([]);

if ($scriptPrepararSelect->rowCount() > 0) {
    header("location:./index.php?alert=1");
} else {
    $scriptInserir = "INSERT INTO tb_personagem (
id,
nome, 
imagem
) VALUES ( 
:identificadorPersonagem,
:nome_personagem,
:imagem

)";
    $scriptPreparado = $conn->prepare($scriptInserir);
    $scriptPreparado->execute([
        ":identificadorPersonagem" => $id,
        ":nome_personagem" => $nome_salvar,
        ":imagem" => $imagem
    ]);

    header("location:./index.php");
}
