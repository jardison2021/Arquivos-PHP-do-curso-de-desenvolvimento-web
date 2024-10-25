<?php
	//Comprrendendo como funciona um namespace, para garantir que não ocorra o fato do exemplo abaixo, onde as classes tem o mesmo nome.
	namespace A;
	class Cliente implements \B\CadastroCliente{//crossname
		public $nome = 'Francisco';
		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}
		public function __get($attr){
			return $this->$attr;
		}
		public function salvar(){
			echo 'Salvar';
		}
		public function remover(){
			echo 'Remover';
		}
	}
	interface CadastroCliente{
		public function salvar();
	}
	namespace B;
	class Cliente implements \A\CadastroCliente{//crossname
		public $nome = 'Jardison';
		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}
		public function __get($attr){
			return $this->$attr;
		}
		public function remover(){
			echo 'Remover';
		}
		public function salvar(){
			echo 'Salvar';
		}
	}
	interface CadastroCliente{
		public function remover();
	}
	//No exemplo abaixo é mostrado como chamar o namespaece desejado, usando a barra invertida (\) e indicado o namespace 
	$c = new \B\Cliente();
	print_r($c);
	echo $c->__get('nome');
?>