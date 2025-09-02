<?php
include './template/header.php';

$id = $_GET['id'];
$nome = $_GET['nome'];
$img = $_GET['url'];

var_dump($id)
?>

<section class="pagina_3">
    <div id="rick-container_solo" class="row row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-lg-12 g-5">
        <!-- Local de cards -->
    </div>
    <script>
        const container_solo = document.getElementById("rick-container_solo")

        function procurarPersonagem(userID) { // Essa função faz uma requisição HTTP para a API do Rick and Morty. Ela pega os dados de um personagem com base no ID fornecido.
            return fetch("https://rickandmortyapi.com/api/character/" + userID)
                .then(function(resposta) {
                    return resposta.json(); // Retorna os dados convertidos de JSON.
                });
        }

        const id = <?= ($id) ?>;

        async function carregarPersonagemSozinho() {

            const personagemAtual = await procurarPersonagem(id)
            let nome = <?= json_encode($nome) ?>;
            let idPersonagem = <?= json_encode($id) ?>;
            let imagemPersonagem = <?= json_encode($img) ?>;

            console.log(idPersonagem, nome, imagemPersonagem)

            const coluna = document.createElement('div')
            coluna.className = 'col'

            coluna.innerHTML = `
                    <div class="card shadow-sm card_personagens">
                        <h5 class="titulo_card cabecalho_cards text-center">${nome}</h5>
                        <div class="card-body h-100 w-200 text-center">
                            <img src="${imagemPersonagem}" alt="${nome}" class="pokemon-img mb-2 img-fluid">
                            
                            <p class="id_cards card-text text-muted">#${idPersonagem}</p>

                            <a class="botao_salvar" href="./salvar_personagem.php?id_salvar=${idPersonagem}&nome_salvar=${nome}&img_salvar=${imagemPersonagem}">Salvar</a>
                        </div>
                    </div>
                `
            container_solo.appendChild(coluna)

        }

        carregarPersonagemSozinho()
    </script>
</section>