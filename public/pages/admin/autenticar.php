<?php

session_start();

$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if(!empty($usuario) and !empty($senha))
{
    if($usuario == 'admin' and $senha == '123')
    {
        $_SESSION['logado'] = true;
        if(isset($_SESSION['erros']))
        {
            unset($_SESSION['erros']);
        }

        header('Location: /public/pages/');
        die();
    }
}

$erro = "Usuário e senha devem ser preenchidos corretamente.";

$_SESSION['erros'] = $erro;
header('Location: /public/pages/admin/form_login.php');
die();