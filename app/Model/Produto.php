<?php

namespace App\Model;

class Produto 
{
    private string $nome;
    private string $descricao;
    private float $preco;

    public \DateTime $ultimaAlteracao;
    public static $localidade = "pt-BR";
    public const LOCALIDADE = "pt-BR";

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRING);
        $this->ultimaAlteracao = new \DateTime();
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_STRING);
        $this->ultimaAlteracao = new \DateTime();
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getPrecoFormatado()
    {
        return "R$ ".number_format($this->preco, 2, ',', '.');
    }

    public function setPreco(float $preco) 
    {
        $this->preco = filter_var($preco, FILTER_SANITIZE_NUMBER_FLOAT);
    }

    public function getUltimaAlteracao()
    {
        return $this->ultimaAlteracao;
    }

    public function getUltimaAlteracaoPtBr()
    {
        return $this->ultimaAlteracao->format('Y-m-d');
    }

    public function __construct($nome= "Não informado", $descricao= "Não informado", $preco=0)
    {
        $this->ultimaAlteracao = new \DateTime();
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setPreco($preco);
    }
}