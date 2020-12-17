<?php

require_once __DIR__.'/../../../vendor/autoload.php';
require_once __DIR__.'/../../../app/Model/Conexao.php';

session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM `produtos` WHERE `produtos`.`id` = ".$id;
$query = $pdo->prepare($sql);
$query->execute();

header('Location: /public/pages/');
die();

?>