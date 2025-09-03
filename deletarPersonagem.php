<?php

require('./config.php');

$id = $_GET['id'];

$scriptDelete = "DELETE FROM tb_personagem WHERE id = :id";
$scriptPrepararDelete = $conn->prepare($scriptDelete)->execute([
    ":id" => $id
]);

header('location:./index.php'); 