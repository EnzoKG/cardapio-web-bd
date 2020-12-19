<?php 

require_once __DIR__ . '/../../includes/cabecalho.php'; 
require_once __DIR__ . '/../../includes/menu_navegacao.php';
include_once __DIR__ . '/../../../app/Model/Conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$registros = $pdo->query('SELECT * FROM produtos WHERE `produtos`.`id` = ' . $id);

?>

<main style="margin-left:1rem;">
    <form action="/public/pages/produto/editar.php" method="POST">
        <div class="row">
            <?php foreach($registros as $registro) {?>
                <label for="inputNome">Nome</label>
                <input class="form-control" style="width:25%" type="text" id="inputNome" placeholder="Novo nome" name="nome" value="<?= $registro[1] ?>">
                <label for="inputDescricao">Descricao</label>
                <input class="form-control" style="width:25%" type="text" id="inputDescricao" placeholder="Nova descrição" name="descricao" value="<?= $registro[2] ?>"> 
                <label for="inputPreco">Preco</label>
                <input class="form-control" style="width:25%" type="number" id="inputPreco" placeholder="Novo preço" name="preco" value="<?= $registro[3] ?>">
                <input type="hidden" name="id" value=<?= $id ?>>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-success" style="margin-top:15px">Atualizar</button>
    </form>

</main>

<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>