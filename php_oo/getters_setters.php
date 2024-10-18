<?php
	//modelo
	class Funcionario{
		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
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
 		}
		//métodos
		function resumirCadFunc(){
			return "Nome: $this->nome <br> Telefone: $this->telefone <br> Filhos: $this->numFilhos";
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
	$y->setNome('José');
	$y->setTelefone('(85) 99999-9999');
	$y->setNumFilhos(3);
	echo $y->resumirCadFunc();
	echo '<br>';
	echo 'Get';
	echo '<br>';
	echo 'Nome: ' .  $y->getNome() . '<br>' . 'Telefone: ' . $y->getTelefone() . '<br>' . 'Filhos: ' . $y->getNumFilhos();
	echo '<hr>';
	$x = new Funcionario();
	$x->setNome('Maria');
	$x->setTelefone('(85) 99999-9999');
	$x->setNumFilhos(2);
	echo 'Nome: ' .  $x->getNome() . '<br>' . 'Telefone: ' . $x->getTelefone() . '<br>' . 'Filhos: ' . $x->getNumFilhos();
?>