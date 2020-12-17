<?php

    use App\Model\Cardapio;
    use App\Model\Produto;

    session_start();

    include_once 'conexao.php'; 
    require_once __DIR__.'/../../../app/Model/Conexao.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);

    $produto = new Produto($nome, $descricao, $preco);

    $query = $pdo->prepare('INSERT INTO produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco)');    
    $query->execute(array(':nome'=>$produto->getNome(), ':descricao'=> $produto->getDescricao(), ':preco'=> $produto->getPreco())); 

    header('Location: /public/pages/');
    die();
?>



    
    