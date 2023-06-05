<?php
    class Produto {
        private $codigo;
        private $nome;
        private $descricao;
        private $estoqueAtual;
        private $estoqueInicial;
        private $fornecedor;
        private $precoVenda;
        private $precoCompra;

		public function __construct(
			$codigo,
			$nome,
			$descricao,
			$estoqueInicial,
			$estoqueAtual,
			$fornecedor,
			$precoCompra,
			$precoVenda
		) {
			$this -> codigo = $codigo;
			$this -> nome = $nome;
			$this -> descricao = $descricao;
			$this -> estoqueInicial = $estoqueInicial;
			$this -> estoqueAtual = $estoqueAtual;
			$this -> fornecedor = $fornecedor;
			$this -> precoCompra = $precoCompra;
			$this -> precoVenda = $precoVenda;
		}

		public function getCodigo() {
			return $this->codigo;
		}

		public function setCodigo($codigo): self {
			$this->codigo = $codigo;
			return $this;
		}

		public function getNome() {
			return $this->nome;
		}
		
		public function setNome($nome): self {
			$this->nome = $nome;
			return $this;
		}

		public function getDescricao() {
			return $this->descricao;
		}
		
		public function setDescricao($descricao): self {
			$this->descricao = $descricao;
			return $this;
		}

		public function getEstoqueAtual() {
			return $this->estoqueAtual;
		}
		
		public function setEstoqueAtual($estoqueAtual): self {
			$this->estoqueAtual = $estoqueAtual;
			return $this;
		}

		public function getEstoqueInicial() {
			return $this->estoqueInicial;
		}
		
		public function setEstoqueInicial($estoqueInicial): self {
			$this->estoqueInicial = $estoqueInicial;
			return $this;
		}

		public function getFornecedor() {
			return $this->fornecedor;
		}
		
		public function setFornecedor($fornecedor): self {
			$this->fornecedor = $fornecedor;
			return $this;
		}

		public function getPrecoVenda() {
			return $this->precoVenda;
		}

		public function setPrecoVenda($precoVenda): self {
			$this->precoVenda = $precoVenda;
			return $this;
		}

		public function getPrecoCompra() {
			return $this->precoCompra;
		}
		
		public function setPrecoCompra($precoCompra): self {
			$this->precoCompra = $precoCompra;
			return $this;
		}
}
?>