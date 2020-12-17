<?php

    namespace App\Model;

    class Cardapio {
        private $produtos;

        public function __construct($produtos=[]) {
            $this->produtos = $produtos;
        }

        public function getProdutos() {
            return $this->produtos;
        }

        public function salvarProduto(Produto $produto, $id=null) {

            if(isset($id))
            {
                $this->produtos[$id] = $produto;
            } else{
                $this->produtos[] = $produto;
            }

        }

        public function atualizarProduto($id, Produto $produto) {
            $this->produtos[$id] = $produto;
        }

        public function removerProdutoPorId(int $id) {
            unset($this->produtos[$id]);
        }

        public function getProdutoPorId(int $id) {
            return $this->produtos[$id];
        }
    }