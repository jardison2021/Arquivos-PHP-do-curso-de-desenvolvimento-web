<?php
	//modelo
	class Funcionario{
		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;
		//overloading get e set (sobrecarga)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
		function __get($atributo){
			return $this->$atributo;
		}
		/*
		//getters e setters
		function setNome($nome){
			$this->nome = $nome;
		}
		function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
 		}
 		function getNome(){
 			return $this->nome;
 		}
 		function getTelefone(){
 			return $this->telefone;
 		}
 		function getNumFilhos(){
 			return $this->numFilhos;
 		}*/
		//métodos
		function resumirCadFunc(){
			return "Nome: $this->nome <br> Telefone: $this->telefone <br> Filhos: $this->numFilhos <br> Cargo: $this->cargo <br> Salario: $this->salario";
			//this: operador de ajuste de contexto, serve para recuperar atributos do objeto
		}
		function modificarNumFilhos($numFilhos){
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}
	echo 'Cadastro de funcionários';
	echo '<br>';
	echo 'Set';
	echo '<br>';
	$y = new Funcionario();
	$y->__set('nome', 'José');
	$y->__set('telefone', '(85) 99999-9999');
	$y->__set('numFilhos', 3);
	$y->__set('cargo', 'Desenvolvedor Júnior');
	$y->__set('salario', 2500);
	echo $y->resumirCadFunc();
	echo '<br>';
	echo 'Get';
	echo '<br>';
	echo 'Nome: ' . $y->__get('nome') . '<br>' . 'Telefone: ' . $y->__get('telefone') . '<br>' . 'Filhos: ' . $y->__get('numFilhos') . '<br>' . 'Cargo: ' . $y->__get('cargo') . '<br>' . 'Salário: ' . $y->__get('salario');
	echo '<hr>';
	$x = new Funcionario();
	$x->__set('nome', 'Maria');
	$x->__set('telefone', '(85) 99999-9999');
	$x->__set('numFilhos', 2);
	$x->__set('cargo', 'Analista Senior');
	$x->__set('salario', 7500);
	echo 'Nome: ' .  $x->__get('nome') . '<br>' . 'Telefone: ' . $x->__get('telefone') . '<br>' . 'Filhos: ' . $x->__get('numFilhos') . '<br>' . 'Cargo: ' . $x->__get('cargo') . '<br>' . 'Salário: ' . $x->__get('salario');
?>