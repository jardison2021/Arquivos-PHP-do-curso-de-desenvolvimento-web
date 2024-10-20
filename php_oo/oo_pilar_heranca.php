<?php
	//super-classe
	class Veiculo{
		public $placa = null;
		public $cor = null;
		function acelerar(){
			echo 'Acelerar';
		}
		function freiar(){
			echo 'freiar';
		}
	}
	//classe carro
	class Carro extends Veiculo{
		//atributos
		public $tetoSolar = true;
		//métodos
		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}
		function abrirTetoSolar(){
			echo 'Abrir teto solar';
		}
		function alterarPosicaoVolante(){
			echo 'Alterar posição volante';
		}
 	}
 	//classe moto
 	class Moto extends Veiculo{
 		//atributos
 		public $contraPesoGuidao = true;
 		//métodos
 		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}
 		function empinar(){
 			echo 'Empinar';
 		}
 	}
 	//instância de objetos
 	$carro = new Carro('ABC1234', 'Branco');
 	$moto = new Moto('DEF5678', 'Preta');
 	echo '<pre>';
 	print_r($carro);
 	print_r($moto);
 	echo '</pre>';
 	echo '<hr>';
 	//chamando métodos acelerar e teto solar da classe carro
 	echo 'Carro';
 	echo '<br>';
 	$carro->abrirTetoSolar();
 	echo '<br>';
 	$carro->acelerar();
 	echo '<br>';
 	$carro->freiar();
 	echo '<hr>';
 	//chamando métodos acelerar e empinar da classe moto
 	echo 'Moto';
 	echo '<br>';
 	$moto->acelerar();
 	echo '<br>';
 	$moto->empinar();
 	echo '<br>';
 	$moto->freiar();
?>