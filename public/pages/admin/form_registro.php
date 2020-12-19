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

<main>
    <div class="position-relative">
        <div class="position-absolute top-50 start-50">
            <section style="margin:2.5rem;">
                <?= $alerta ?>
                <form action="/public/pages/usuario/salvar.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Insira seu usuário" name="user">
                        <label for="floatingInput">Usuário</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
                        <label for="floatingPassword">Senha</label> 
                    </div>
                    <button style="margin-top:1rem;" type="submit" class="btn btn-success">Salvar</button>
                </form>
            </section>
        </div>
    </div>
</main>


<?php include_once __DIR__ . '/../../includes/rodape.php'; ?>