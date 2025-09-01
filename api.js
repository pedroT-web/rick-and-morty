const container = document.getElementById("rick-container")

function procurarPersonagem(id) {
    return fetch("https://rickandmortyapi.com/api/character/" + id)
        .then(function (resposta) {
            return resposta.json()
        })
}

async function carregarPersonagem() {
    for (let i = 1; i <= 20; i++) {
        const personagemAtual = await procurarPersonagem(i)
        let nome = personagemAtual.name
        let idPersonagem = personagemAtual.id
        let imagemPersonagem = personagemAtual.image

        console.log(idPersonagem, nome, imagemPersonagem)

        const coluna = document.createElement('div')
        coluna.className = 'col'

        coluna.innerHTML = `
                    <div class="card shadow-sm card_personagens">
                        <h5 class="titulo_card cabecalho_cards text-center">${nome}</h5>
                        <div class="card-body h-100 text-center">
                            <img src="${imagemPersonagem}" alt="${nome}" class="pokemon-img mb-2 img-fluid">
                            
                            <p class="id_cards card-text text-muted">#${idPersonagem}</p>
                            
                            <a id="verPersonagem" class="botao_verPersonagem" href="./area_personagem.php?id=${idPersonagem}&nome=${nome}&url=${imagemPersonagem}">Ver Personagem</a>
                        </div>
                    </div>
                `

        container.appendChild(coluna)
    }
}

carregarPersonagem()


// ========================================================================================================================================================================


const buscar = document.getElementById('buscar')
const botao_pesquisa = document.getElementById('botao_pesquisa')
const container_pesquisa = document.getElementById('container-pesquisa')
function buscar_personagem(id) {
    return fetch("https://rickandmortyapi.com/api/character/" + id)
        .then(function (resposta) {
            return resposta.json()
        })
}

async function listarPersonagem() {
    const valor_input = buscar.value
    const personagemAtual = await buscar_personagem(valor_input)
    let nome = personagemAtual.name
    let idPersonagem = personagemAtual.id
    let imagemPersonagem = personagemAtual.image

    console.log(idPersonagem, nome, imagemPersonagem)

    const coluna = document.createElement('div')
    coluna.className = 'col d-flex -justify-content-center'

    coluna.innerHTML = `
                    <div class="card shadow-sm .card_personagens">
                        <h5 class="cabecalho_cards text-center">${nome}</h5>
                        <div class="card-body h-100 text-center">
                            <img src="${imagemPersonagem}" alt="${nome}" class="pokemon-img mb-2 img-fluid">
                            
                            <p class="id_cards card-text text-muted">#${idPersonagem}</p>


                        </div>
                    </div>
                `
    container_pesquisa.appendChild(coluna)

}
