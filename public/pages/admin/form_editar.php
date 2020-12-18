<?php

use App\Model\Cardapio;
use App\Model\Produto;

include_once __DIR__ . '/../../includes/cabecalho.php';
include_once __DIR__ . '/../../includes/menu_navegacao.php';
include_once __DIR__.'/../../../vendor/autoload.php';
include_once __DIR__.'/../../../app/Model/Conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$produto = $pdo->query('SELECT * FROM produtos WHERE produtos.id = '.$id);

$cardapio = new Cardapio();

?>
<main>

    <form action="/public/pages/produto/editar.php" method="POST">
        <div class="row">
            <label for="inputNome">Novo nome</label>
            <input class="form-control" style="width:25%" type="text" id="inputNome" placeholder="Nome do produto" name="nome" value="<?=$produto[1]?>">
            <label for="inputDescricao">Nova descricao</label>
            <input class="form-control" style="width:25%" type="text" id="inputDescricao" placeholder="Insira uma descricao" name="descricao" value="<?=$produto[2]?>"> 
            <label for="inputPreco">Novo preco</label>
            <input class="form-control" style="width:25%" type="number" id="inputPreco" placeholder="Insira o preco" name="preco" value="<?= isset($produto)? $produto->getPreco():'' ?>">
            <input type="hidden" name="id" id="id" value="<?=$id?>">
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:15px">Salvar</button>
    </form>

</main>



<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>