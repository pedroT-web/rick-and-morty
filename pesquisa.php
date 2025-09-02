<section class="pag_2 ">
    <?php
    include './template/header.php';
    ?>
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