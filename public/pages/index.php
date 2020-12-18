<?php 
  use App\Model\Cardapio;
  use App\Model\Produto;

  require_once __DIR__.'/../../vendor/autoload.php';
  require_once __DIR__.'/../includes/cabecalho.php';
  require_once __DIR__.'/../includes/menu_navegacao.php'; 
  include_once __DIR__.'/produto/create_table.php'; 

  $cardapio = new Cardapio();

  $produtos = $pdo->query('SELECT * FROM `produtos`');

  if(isset($_SESSION['cardapio'])) {
    $cardapio = unserialize($_SESSION['cardapio']);
  }

  $btnCadastrarProduto = '';
  if(isset($_SESSION['logado'])) {
    $logado = $_SESSION['logado'];
    $btnCadastrarProduto = '<a href="/public/pages/produto/form.php" class="btn btn-primary" style="margin:1rem;">Cadastrar Produto</a>';
  }
?>

<main class="container">
<?= $btnCadastrarProduto ?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preco</th>
      <?= isset($logado) ? '<th scope="col">Ações</th>':"" ?>
    </tr>
  </thead>
  <tbody>
  <?php foreach($produtos as $produto){ ?>
    <tr>
      <th scope="row"><?= $produto[0] ?></th>
      <td><?=$produto[1]?> <small>(<?= $produto[2] ?>)</small></td>
      <td><?= $produto[3] ?></td>
      <?= isset($logado) ? '<td>'. 
                          '<a href="/public/pages/admin/form_editar.php?id='.$produto[0].'" style="text-decoration:none; cursor:pointer; color:blue;">Editar</a>'.
                          ', '.
                          '<a href="/public/pages/produto/deletar.php?id='.$produto[0].'" style="text-decoration:none; cursor:pointer; color:blue;">Remover</a> '. 
                          '</td>':"" ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
</main>

<?php require_once __DIR__.'/../includes/rodape.php'; ?>