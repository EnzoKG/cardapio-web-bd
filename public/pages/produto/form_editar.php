<?php 
include_once __DIR__ . '/../../includes/cabecalho.php'; 
include_once __DIR__ . '/../../includes/menu_navegacao.php';


require_once __DIR__.'/../../../app/Model/Conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$produto = $pdo->query('SELECT * FROM `produtos` WHERE `produtos`.`id` = '.$id);
?>

<main>
    <form action="/public/pages/produto/editar.php" method="POST">
        <div class="row">
            <label for="inputNome">Nome</label>
            <input class="form-control" style="width:25%" type="text" id="inputNome" placeholder="Novo nome" name="nome" value=<?= $produto[1] ?>>
            <label for="inputDescricao">Descricao</label>
            <input class="form-control" style="width:25%" type="text" id="inputDescricao" placeholder="Nova descrição" name="descricao" value=<?= $produto[2] ?>> 
            <label for="inputPreco">Preco</label>
            <input class="form-control" style="width:25%" type="number" id="inputPreco" placeholder="Novo preço" name="preco" value=<?= $produto[3] ?>>
            <input type="hidden" name="id" value=<?= $id ?>>
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:15px">Atualizar</button>
    </form>

</main>

<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>