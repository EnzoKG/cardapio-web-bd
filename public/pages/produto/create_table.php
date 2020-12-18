<?php 

require_once __DIR__.'/../../../app/Model/Conexao.php';

try {
    $sql = "CREATE TABLE IF NOT EXISTS produtos (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
                nome VARCHAR(50) NOT NULL,                               
                descricao VARCHAR(255) NOT NULL,                              
                preco FLOAT NOT NULL,
                ultima_alteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    $pdo->exec($sql);
    #echo "tabela produtos criada com sucesso!";

} catch(PDOException $e) {
  echo $e->getMessage();
}

try {
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
                usuario VARCHAR(50) NOT NULL,                               
                senha VARCHAR(50) NOT NULL,                              
                ultima_alteracao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    $pdo->exec($sql);
    #echo "tabela usuarios criada com sucesso!";

} catch(PDOException $e) {
  echo $e->getMessage();
}