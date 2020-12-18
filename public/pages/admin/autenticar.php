<?php

    include_once __DIR__ . '/../../../app/Model/Conexao.php';

session_start();

$login = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$usuarios = $pdo->query('SELECT * FROM `usuarios`');

foreach ($usuarios as $usuario) {
        if($login == $usuario[1] and $senha == $usuario[2])
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