<?php
include './template/header.php';
?>

<section class="pag_2 ">
    <h5 class="titulo_pesquisar">Pesquisar Personagem</h5>
    <div class="cabecalho_invisivel">
        <a class="botoes_header_2 " href="./index.php">Cards</a>
        <a class="botoes_header_2 " href="./pesquisa.php">Pesquisar</a>
    </div>
    <div id="container-pesquisa" class="container col-sm-10">
        <input type="text" class="input_campo form-control" id="buscar">
        <button class="botao_buscar btn btn-primary me-md-2" id="botao_pesquisa" type="button"
            onclick="javascript:listarPersonagem()">buscar</button>
    </div>
</section>

<script src="./api.js"></script>

<?php
include './template/footer.php';
?>