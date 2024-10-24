<?php
	class Exemplo{
		public static $atributo1  = 'Eu sou um atributo estático!';
		public $atributo2 = 'Eu sou um atributo normal';

		public static function metodo1(){
			echo 'Eu sou um método estático!';
		}
		public function metodo2(){
			echo 'Eu sou um método normal!';
		}
	}

	//Quando nós estamos trabalhando com atributos e métodos estáticos não existe a necessidade de fazer a instância do objeto da maneira mais comum para a respectiva utilização desses atributos e métodos estáticos da classe, abaixo será explicado como esse processo é feito.
	/*echo Exemplo::$atributo1;
	echo '<br>';
	Exemplo::metodo1();*/

	//Atribrutos e métodos não estáticos não podem ser acessados da mesma forma do exemplo não anterior.
	//echo Exemplo::atributo2();
	//echo Exemplo::metodo2();

	//Operador de seta (->) também não pode ser utilizado neste contexto para atributos e métodos não estáticos
	//$x->atributo2;
	//O operador $this não pode ser utilizado também
?>