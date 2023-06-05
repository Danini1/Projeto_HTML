<?php
    class Fornecedor {
        private $codigo;
        private $nome;
        private $cnpj;
        private $telefone;
        private $email;
        private $endereco;

		public function __construct($codigo, $nome, $cnpj, $telefone, $email, $endereco) {
			$this -> codigo = $codigo;
			$this -> nome = $nome;
			$this -> cnpj = $cnpj;
			$this -> telefone = $telefone;
			$this -> email = $email;
			$this -> endereco = $endereco;
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

		public function getCnpj() {
			return $this->cnpj;
		}
		
		public function setCnpj($cnpj): self {
			$this->cnpj = $cnpj;
			return $this;
		}

		public function getTelefone() {
			return $this->telefone;
		}

		public function setTelefone($telefone): self {
			$this->telefone = $telefone;
			return $this;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setEmail($email): self {
			$this->email = $email;
			return $this;
		}

		public function getEndereco() {
			return $this->endereco;
		}

		public function setEndereco($endereco): self {
			$this->endereco = $endereco;
			return $this;
		}
	}
?>