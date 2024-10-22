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
	$pai = new Pai();
	echo $pai->executarAcao();
	//echo $pai->humor;s
	/*echo $pai->sobrenome;
	echo $pai->sobrenome = 'Santos';
	echo '<br>';
	echo $pai->sobrenome;*/
	/*echo $pai->getNome();
	$pai->setNome('Francisco');
	echo '<br>';
	echo $pai->getNome();*/
?>