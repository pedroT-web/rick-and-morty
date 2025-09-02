
<?php
include './template/header.php';

if (isset($_GET["alert"]) && $_GET["alert"] == 1){
 echo "<div class='alert alert-success' role='alert'> Personagem Já Cadastrado </div>";
}
?>

<section class="corpo_pag1">
    <div class="container_cards container my-5">        
        <div id="rick-container" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 rol-cols-lg-4 g-5">
            <!-- Local de cards -->
        </div>
    </div>
</section>



<script src="api.js"></script>

<?php
include './template/footer.php'
?>

    <script src="./script.js"></script>

