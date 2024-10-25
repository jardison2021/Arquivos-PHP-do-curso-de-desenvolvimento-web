<?php
namespace A;
	class Cliente implements CadastroCliente{//crossname
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
?>