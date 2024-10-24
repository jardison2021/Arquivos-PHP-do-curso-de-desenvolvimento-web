<?php
	//Interfaces
	interface EquipamentoEletronicoInterface{
		public function ligar();
		public function desligar();
	}
	interface MamiferoInterface{
		public function respirar();
	}
	interface TerrestreInterface{
		public function andar();
	}
	interface AquaticoInterface{
		public function nadar();
	}
	interface AnimalInterface{
		public function comer();
	}
	//Herança entre interfaces
	interface AveInterface extends AnimalInterface{
		public function voar();
	}
	//Classes
	class Geladeira implements EquipamentoEletronicoInterface{
		public function abrirPorta(){
			echo 'Abrir a porta!';
		}
		public function ligar(){
			echo 'Ligar!';
		}
		public function desligar(){
			echo 'desligar!';
		}
	}
	class Tv implements EquipamentoEletronicoInterface{
		public function trocarCanal(){
			echo 'Troca canal!';
		}
		public function ligar(){
			echo 'Ligar!';
		}
		public function desligar(){
			echo 'desligar!';
		}
	}
	$x = new Geladeira();
	$y = new Tv();
	//----------------------------------------------------------
	//Classes
	class Humano implements MamiferoInterface, TerrestreInterface{
		public function respirar(){
			echo 'Respirar';
		}
		public function andar(){
			echo 'Andar';
		}
		public function conversar(){
			echo 'Conversar';
		}
	}
	class Baleia implements MamiferoInterface, AquaticoInterface{
		public function respirar(){
			echo 'Respirar';
		}
		public function nadar(){
			echo 'Nadar';
		}
		protected function esguichar(){
			echo 'Esguichar';
		}
	}
	//----------------------------------------------------------
	class Papagaio implements AveInterface{
		public function voar(){
			echo 'Voar';
		}
		public function comer(){
			echo 'Comer';
		}
	}
?>