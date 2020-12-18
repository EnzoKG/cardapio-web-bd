<?php 
include_once __DIR__ . '/../../includes/cabecalho.php'; 
include_once __DIR__ . '/../../includes/menu_navegacao.php';

use App\Model\Produto;


require_once __DIR__.'/../../../app/Model/Conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$select = $pdo->query('SELECT * FROM `produtos` WHERE `produtos`.`id` = '.$id);
$produto = new Produto($select[1], $select[2], $select[3]);
?>

<main>
    <form action="/public/pages/produto/editar.php" method="POST">
        <div class="row">
            <label for="inputNome">Nome</label>
            <input class="form-control" style="width:25%" type="text" id="inputNome" placeholder="Novo nome" name="nome" value=<?= $produto->getNome() ?>>
            <label for="inputDescricao">Descricao</label>
            <input class="form-control" style="width:25%" type="text" id="inputDescricao" placeholder="Nova descrição" name="descricao" value=<?= $produto->getDescricao() ?>> 
            <label for="inputPreco">Preco</label>
            <input class="form-control" style="width:25%" type="number" id="inputPreco" placeholder="Novo preço" name="preco" value=<?= $produto->getPrecoFormatado() ?>>
            <input type="hidden" name="id" value=<?= $id ?>>
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:15px">Atualizar</button>
    </form>

</main>

<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>