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
		function trocarMarcha(){
			echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
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
 		function trocarMarcha(){
			echo 'Desengatar embreagem com o mão e engatar marcha com a pé';
		}
 	}
 	class Caminhao extends Veiculo{

 	}
 	//instância de objetos
 	$carro = new Carro('ABC1234', 'Branco');
 	$moto = new Moto('DEF5678', 'Preta');
 	$caminhao = new Caminhao();
 	$carro->trocarMarcha();
 	echo '<br>';
 	$moto->trocarMarcha();
 	echo '<br>';
 	$caminhao->trocarMarcha();
?>