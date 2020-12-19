<?php

    require_once __DIR__ . '/../../../vendor/autoload.php';

    use App\Model\Cardapio;
    use App\Model\Usuario;

    session_start();

    require_once __DIR__.'/../../../app/Model/Conexao.php';

    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $usuario = new Usuario($user, $senha);

    $query = $pdo->prepare('INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)');    
    $query->execute(array(':usuario'=>$usuario->getLogin(), ':senha'=> $usuario->getSenha())); 

    header('Location: /public/pages/');
    die();
?>

