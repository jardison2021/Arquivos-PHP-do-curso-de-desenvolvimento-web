<?php
	//modelo
	class Funcionario{
		//atributos
		public $nome = 'José';
		public $telefone = '85 99999-9999';
		public $numFilhos = 2;
		//métodos
		function resumirCadFunc(){
			return "$this->nome possui $this->numFilhos filhos";
			//this: operador de ajuste de contexto, serve para recuperar atributos do objeto
		}
		function modificarNumFilhos($numFilhos){
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}
	$y = new Funcionario();
	echo $y->resumirCadFunc();
	echo '<br>';
	$y->modificarNumFilhos(3);
	echo $y->resumirCadFunc();
	echo '<hr>';
	$x = new Funcionario();
	echo $x->resumirCadFunc();
	echo '<br>';
	$x->modificarNumFilhos(1);
	echo $x->resumirCadFunc();
?>