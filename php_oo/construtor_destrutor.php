<?php
	class Pessoa {
		public $nome = null;

		// Construtor da classe
		function __construct($nome) {
			echo 'Objeto iniciado<br>';
			$this->nome = $nome;
		}
		// Destrutor da classe		
		function __destruct(){
			echo 'Objeto removido!';
		}

		// Função mágica __get para acessar propriedades
		function __get($atributo) {
			return $this->$atributo;
		}
		function correr(){
			return $this->__get('nome') . " está correndo!";
		}
	}

	$pessoa = new Pessoa('Jorge');
	echo 'Nome: ' . $pessoa->__get('nome');
	echo '<br>';
	echo $pessoa->correr();
	//Removendo o objeto
	echo '<br>';
	unset($pessoa); //método proposital
?>
