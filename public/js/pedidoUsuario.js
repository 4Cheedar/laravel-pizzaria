
// let btn = document.querySelectorAll(".btn");
let selectFiltroTipo = $('#id-select-filtro-tipo');
//Vetor Vazio para adicionar os Produtos do Carrinho
let vetorProdutosAdicionados = [];

// Função para dividir um array com base em uma propriedade específica
function arrayGroupBy(arr, property){
    const memo = groupBy(arr, property);
    let retorno = [];
    for (let index = 0; index < Object.keys(memo).length; index++) {
        //retorno.push(memo[index]);
        retorno[Object.keys(memo)[index]] = (memo[Object.keys(memo)[index]]);
    }
    return retorno;
}

function groupBy(arr, property) {
    return arr.reduce( function(memo, x) {
      if (!memo[x[property]]) { memo[x[property]] = []; }
      memo[x[property]].push(x);
      return memo;
    }, {});
}

selectFiltroTipo.on('change', function() {
    updateProdutos();
});

function arrayRemoveProduto(arr, value) {     
    arr.forEach( (produto, i) => {
        if(produto.id == value) {
            arr.splice(i, 1);
        }
    });
}

//Botão Atualizar do Modal
$("#id-modal-btn-atualizar-produto").on("click", function(){
    const quantModificada = $("#id-modal-quant-produto").val();
    const idProduto = this.getAttribute("value")
    vetorProdutosAdicionados[idProduto].quant = quantModificada
    updateTabelaItensPedido(vetorProdutosAdicionados)
})
    

function updateTabelaItensPedido(vetorProdutosAdicionados){
    const tabela = $(`#id-tbody-itens-pedido`);
    tabela.html("");
    vetorProdutosAdicionados.forEach(produto => {
        tabela.append(`
        <tr>
            <th scope="row">${produto.descricao} ${produto.nome}</th>
            <td>
                <span>${produto.quant}x</span>
            </td>
            <td>
                <span>R$ ${produto.preco*produto.quant}</span>
            </td>
            <td>
                <a class="btn btn-secondary btn-editar-tabela-produtos-adicionados" data-bs-toggle="modal" data-bs-target="#id-remove-modal" value="${produto.id}">Editar</a>
                <a class="btn btn-danger btn-remover-tabela-produtos-adicionados" value="${produto.id}">Remover</a>
            </td>
        </tr>`
        ); 
    });

    //Adicionar Evento Click nos Botões para remover os produtos adicionados no carrinho
    $(".btn-remover-tabela-produtos-adicionados").on('click', function(){
        const idProduto = this.getAttribute("value")
        console.log("Não me Remove ;-;")
        arrayRemoveProduto(vetorProdutosAdicionados, idProduto)
        updateTabelaItensPedido(vetorProdutosAdicionados)
    })

    $(".btn-editar-tabela-produtos-adicionados").on('click', function(){
        const idProduto = this.getAttribute("value")
        console.log("Não me Edita ;-;")
        $("#id-modal-img-produto").attr("src", vetorProdutosAdicionados[idProduto].urlImage)
        $("#id-modal-nome-produto").html(vetorProdutosAdicionados[idProduto].nome)
        $("#id-modal-ingredientes-produto").html(vetorProdutosAdicionados[idProduto].ingredientes)
        $("#id-modal-preco-produto").attr("value", `R$ ${vetorProdutosAdicionados[idProduto].preco}`)
        $("#id-modal-quant-produto").val( vetorProdutosAdicionados[idProduto].quant)
        $("#id-modal-btn-atualizar-produto").attr("value", vetorProdutosAdicionados[idProduto].id)
    })
}

function updateProdutos(){
    const tipoProdutoId = selectFiltroTipo.val();
    //console.log(tipoProdutoId);
    $.ajax({
        type: "GET", // Método utilizado
        url: `/pedido/usuario/getprodutos/${tipoProdutoId}`, // rota
        data: null, // Dados que serão enviados
        dataType: "json", // Formato de dados para troca de mensagens
        success: function(response){ // Função executada quando dá certo
            // Deu certo, atualizar lista de produtos com base no tipo
            $('#id-div-lista-produtos').html(""); // Apaga todo conteúdo dentro da tag

            //console.log(response.return);
            const produtos_group = arrayGroupBy(response.return, 'Tipo_Produtos_id'); // => {orange:[...], banana:[...]}
            //console.log(produtos_group);

            produtos_group.forEach(produtos_tipo => {
                $('#id-div-lista-produtos').append(`
                        <div class="my-4 border border-dark">
                            <div class="m-4">
                                <h4 class="d-inline">${produtos_tipo[0].descricao}</h4>
                                <div class="d-inline-block" style="float: right;">
                                    <select class="form-select">
                                        <option value="">Ordem do Sistema</option>
                                        <option value="">Menor para Maior</option>
                                        <option value="">Maior para Menor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="my-4 produto">
                            </div>
                        </div>`
                    );
                produtos_tipo.forEach(produto => {
                    $('.my-4.produto:last').append(`
                        <div class="row m-3 border border-dark">
                            <div class="col-md-3 p-3">
                                <img class="w-100 h-100" src="${produto.urlImage}" alt="" srcset="">
                            </div>
                            <div class="col-md-6 my-auto">
                                <h5 class="my-3">${produto.nome}</h5>
                                <h6 class="my-2">"Ingredientes:"</h6>
                                <p>${produto.ingredientes}</p>
                            </div>
                            <div class="col-md-3 my-auto">
                                <div class="my-3">
                                    <input type="text" class="form-control" placeholder="Preço" value="R$ ${produto.preco}" readonly>
                                </div>
                                <div class="my-3">
                                    <input type="number" class="form-control" id="id-quant-produto-${produto.id}" value="1" min="1">
                                </div>
                                <div class="my-3">
                                    <a class="btn btn-primary w-100 btn-add-produto" value="${produto.id}" value-tipo="${produto.Tipo_Produtos_id}">Adicionar Produto</a>
                                </div>
                            </div>
                        </div>`
                    ); 
                });
            });

            // Evento dos botões adicionar produto
            $(".btn-add-produto").on('click', function() {
                const idProduto = this.getAttribute("value");
                const idTipoProduto = this.getAttribute("value-tipo");
                const quant = $(`#id-quant-produto-${idProduto}`).val();
                

                const produto = produtos_group[idTipoProduto].find(x => x.id == idProduto )

                if(quant > 0) {

                    vetorProdutosAdicionados[idProduto] = {id: produto.id,
                                                           urlImage: produto.urlImage,
                                                           ingredientes: produto.ingredientes,
                                                           descricao: produto.descricao, 
                                                           nome: produto.nome, 
                                                           quant: quant,    
                                                           preco: produto.preco};

                    updateTabelaItensPedido(vetorProdutosAdicionados)

                } 

            });
            
        },
        error: function(error) { // Função execudata quando dá erro
            // Deu erro, exibir mensagem de erro
            console.log(error);
        }
    });
}


// Atualição inicial da página
updateProdutos();
