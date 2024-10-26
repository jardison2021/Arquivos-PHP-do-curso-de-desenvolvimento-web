<?php
	class MinhaExceptionCustomizada extends Exception{
		private $erro = '';
		public function __construct($erro){
			$this->erro = $erro;
		}
		public function exibirMensagemErroCustomizada(){
			echo '<div style="Border: solid 1px red; padding 15px; background-color: blue; color: white; font-weight: bold;">';
				echo $this->erro;
			echo '</div>';
		}
	}
	try{
		throw new MinhaExceptionCustomizada('Este é um erro de teste');
		//Error (erros internos do php)
		//Exception (É mais comum no dia-a-dia)
		//Customizada (Erros customizados)
	}catch (MinhaExceptionCustomizada $e){
		$e->exibirMensagemErroCustomizada();
	}
?>