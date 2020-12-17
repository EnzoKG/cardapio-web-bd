<?php 

include_once __DIR__ . '/../../includes/cabecalho.php'; 

session_start();

$alerta = '';
if(isset($_SESSION['erros']))
{
    $erro = $_SESSION['erros'];
    $alerta = '<div role="alert">'.$erro.'</div>';
}

?>

<main class="container">

    <section>
        <?= $alerta ?>
        <form action="/public/pages/admin/autenticar.php" method="POST">
            <div>
            <input type="text" id="inputUsuario" placeholder="Insira seu usuário" name="usuario">
            <label for="inputUsuario">Usuario</label>
            </div>
            <div>
            <input type="password" id="inputSenha" placeholder="Insira sua senha" name="senha">
            <label for="inputSenha">Senha</label>
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
        </form>
    </section>
    
</main>


<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>