<?php 
include_once __DIR__ . '/../../includes/cabecalho.php'; 
include_once __DIR__ . '/../../includes/menu_navegacao.php';
?>

<main style="margin-left:1rem;">
    <form action="/public/pages/produto/salvar.php" method="POST">
        <div class="row">
            <label for="inputNome">Nome</label>
            <input class="form-control" style="width:25%" type="text" id="inputNome" placeholder="Nome do produto" name="nome">
            <label for="inputDescricao">Descricao</label>
            <input class="form-control" style="width:25%" type="text" id="inputDescricao" placeholder="Insira uma descricao" name="descricao"> 
            <label for="inputPreco">Preco</label>
            <input class="form-control" style="width:25%" type="number" id="inputPreco" placeholder="Insira o preco" name="preco">
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:15px">Salvar</button>
    </form>

</main>

<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>