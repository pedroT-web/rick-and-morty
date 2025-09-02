<?php
include('./template/header.php');

$_ENV = parse_ini_file('.env');

$dsn = "mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_LOCAL']}";
$usuario = "{$_ENV['USER']}";
$senha =  "{$_ENV['SENHA']}";

$conn = new PDO($dsn, $usuario, $senha);

$scriptConsulta = "SELECT * FROM tb_personagem";
$scriptConsultar = $conn->query($scriptConsulta)->fetchALL();
?>

<section class="secao_listas row">
    <?php foreach ($scriptConsultar as $linhas) { ?>
        <?=
        "<div class='col-3 p-4'>
                    <div class='card ms-4 h-100 shadow-sm '>
                        <div class=' card-body text-center'>
                            <img src='{$linhas['imagem']}' alt='card' class='personagem-img mb-2 img-fluid rounded'>
                            <h5 class='card-tile fs-6'><strong>Nome: </strong> {$linhas['nome']}</h5>
                            <p class='card-text'><strong>Data cadastro: {$linhas['data_salvamento']}</strong> </p>
                            <a class='btn btn-danger' href='removerPersonagem.php?id={$linhas['id']}'>Remover personagem</a>
                        </div>
                    <div class='card-footer text-center'>
                        <p class='card-text text-muted'><strong>Id #</strong>{$linhas['id']}</p>
                    </div>
                </div>
                </div>"
        ?>
    <?php } ?>
</section>