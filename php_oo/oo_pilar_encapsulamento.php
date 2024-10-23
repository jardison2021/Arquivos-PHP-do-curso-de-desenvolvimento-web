<?php
	class Pai{
		private $nome = 'Jardison';
		protected $sobrenome = 'Rebouças';
		public $humor = 'Feliz';
		
		public function __get($attr){
			return $this->$attr;
		}
		public function __set($attr, $value){
			$this->$attr = $value;
		}
		private function executarMania(){
			echo 'Assobiar';
		}
		protected function responder(){
			echo 'Oi!';
		}
		public function executarAcao(){
			$x = rand(1, 10);
			if($x >= 1 && $x <= 8){
				$this->responder();
			}else{
				$this->executarMania();
			}
		}
		/*Métodos de interface: são responsáveis por acessar os parâmetros encapsulados em modo protected e private
		public function getNome(){
			return $this->nome;
		}
		public function setNome($value){
			if(strlen($value) >= 3){
				$this->nome = $value;
			}
		}*/
	}
	class Filho extends Pai{
		/*public function getAtributo($attr){
			return $this->$attr;
		}
		public function setAtributo($attr, $valor){
			$this->$attr = $valor;
		}*/
		/*public function __get($attr){
			return $this->$attr;
		}
		public function __set($attr, $value){
			$this->$attr = $value;
		}*/
		public function __construct(){
			//exibir os métodos do objeto
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}
		public function executarMania(){
			echo 'Cantar';
		}
		public function x(){
			$this->executarMania();
		}
		protected function responder(){
			echo 'Olá!';
		}
	}
	/*
	$pai = new Pai();
	echo $pai->executarAcao();*/
	//echo $pai->humor;s
	/*echo $pai->sobrenome;
	echo $pai->sobrenome = 'Santos';
	echo '<br>';
	echo $pai->sobrenome;*/
	/*echo $pai->getNome();
	$pai->setNome('Francisco');
	echo '<br>';
	echo $pai->getNome();*/
	$filho = new Filho();
	echo '<pre>';
	print_r($filho);
	echo '</pre>';
	$filho->executarAcao();
	echo '<br>';
	$filho->x();

	/*
	echo $filho->__get('nome');
	echo '<br>';
	echo $filho->__set('nome', 'Francisco');
	echo $filho->__get('nome');
	echo '<pre>';
	print_r($filho);
	echo '</pre>';

	echo $filho->getAtributo('nome');
	echo $filho->setAtributo('nome', 'Francisco');
	echo '<pre>';
	print_r($filho);
	echo '</pre>';
	echo '<br>';
	echo $filho->getAtributo('nome');
	*/
?>