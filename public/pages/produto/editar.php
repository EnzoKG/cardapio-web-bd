<?php

    use App\Model\Produto;

    require_once __DIR__.'/../../../vendor/autoload.php';
    require_once __DIR__.'/../../../app/Model/Conexao.php';

    session_start();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);

    $produto = new Produto($nome, $descricao, $preco);

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    $sql = "UPDATE `produtos` SET `nome` = '".$produto->getNome()."', `descricao` = '".$produto->getDescricao()."', `preco` = '".$produto->getPreco()."' WHERE `produtos`.`id`= ".$id;
    $query = $pdo->prepare($sql);
    $query->execute();

    header('Location: /public/pages/');
    die();