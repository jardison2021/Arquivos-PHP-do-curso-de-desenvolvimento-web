<!DOCTYPE html>
<html>
<head>
	<title>If Else</title>
</head>
<body>
	<?php
		//==
		echo '<h5>Operador igual ==</h5>';
		echo 'Verifica se os valores são iguais<br>';
		if(2 == 2){
			echo '2 é igual a 2:';echo ' Verdade';
		}else{
			echo 'falso';
		}
		echo '<hr>';
		//===
		echo '<h5>Operador idêntico ===</h5>';
		echo 'Verifica se os valores são iguais e do mesmo tipo<br>';
		if(2 === 2){
			echo '2 é idêntico a 2:';echo ' Verdade';
		}else{
			echo 'falso';
		}
		echo '<hr>';
		//!=
		echo '<h5>Operador diferente != ou <></h5>';
		echo 'Verifica se os valores são diferentes<br>';
		if('x' != 'y'){
			echo 'x é diferente de y:';echo ' Verdade';
		}else{
			echo 'falso';
		}
		echo '<hr>';
		//!==
		echo '<h5>Operador não idêntico !==</h5>';
		echo 'Verifica se os valores são diferentes e de tipos diferentes<br>';
		if(6 !== 'y'){
			echo '6 é não idêntico a y:';echo ' Verdade';
		}else{
			echo 'falso';
		}
		echo '<hr>';
		//<
		echo '<h5>Operador menor que <</h5>';
		echo 'Verifica se o valor se o valor da esquerda é menor que o valor da direita<br>';
		if(4 < 5){
			echo '4 é menor que 5:';echo ' Verdade';
		}else{
			echo 'falso';
		}
		echo '<hr>';
		//>
		echo '<h5>Operador maior que ></h5>';
		echo 'Verifica se o valor se o valor da esquerda é maior que o valor da direita<br>';
		if(5 > 4){
			echo '5 é maior que 4:';echo ' Verdade';
		}else{
			echo 'falso';
		}
		echo '<hr>';
		//<=
		echo '<h5>Operador menor ou igual <=</h5>';
		echo 'Verifica se o valor se o valor da esquerda é menor ou igual ao valor da direita<br>';
		if(5 <= 4){
			echo '5 é menor ou igual a 4:';echo ' Verdade';
		}else{
			echo '5 é menor ou igual a 4:'; echo ' falso';
		}
		echo '<hr>';
		//>=
		echo '<h5>Operador maior ou igual >=</h5>';
		echo 'Verifica se o valor se o valor da esquerda é maior ou igual ao valor da direita<br>';
		if(5 >= 4){
			echo '5 é maior ou igual a 4:';echo ' Verdade';
		}else{
			echo '5 é maior ou igual a 4:'; echo ' falso';
		}
		echo '<hr>';
		//Caso a condição utilize apenas o if, não é preciso colocar {} na estrutura do código, pois o php tem inteligência para executar o código mesmo assim. Neste caso, só é permitido o uso de uma instrução.
	?>
</body>
</html>