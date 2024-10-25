<?php
namespace B;
	class Cliente implements CadastroCliente{//crossname
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
?>