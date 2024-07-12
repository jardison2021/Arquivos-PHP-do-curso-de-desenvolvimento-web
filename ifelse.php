<!DOCTYPE html>
<html>
<head>
	<title>If Else</title>
</head>
<body>
	<?php
		//Operadores de comparação
		//==
		echo '<h1>Operadores de comparação</h1>';
		echo '<h5>Operador igual ==</h5>';
		echo 'Verifica se os valores são iguais<br>';
		if(2 == 2){
			echo '2 é igual a 2:';echo ' Verdade';
		}else{
			echo 'Falso';
		}
		echo '<hr>';
		//===
		echo '<h5>Operador idêntico ===</h5>';
		echo 'Verifica se os valores são iguais e do mesmo tipo<br>';
		if(2 === 2){
			echo '2 é idêntico a 2:';echo ' Verdade';
		}else{
			echo 'Falso';
		}
		echo '<hr>';
		//!=
		echo '<h5>Operador diferente != ou <></h5>';
		echo 'Verifica se os valores são diferentes<br>';
		if('x' != 'y'){
			echo 'x é diferente de y:';echo ' Verdade';
		}else{
			echo 'Falso';
		}
		echo '<hr>';
		//!==
		echo '<h5>Operador não idêntico !==</h5>';
		echo 'Verifica se os valores são diferentes e de tipos diferentes<br>';
		if(6 !== 'y'){
			echo '6 é não idêntico a y:';echo ' Verdade';
		}else{
			echo 'Falso';
		}
		echo '<hr>';
		//<
		echo '<h5>Operador menor que <</h5>';
		echo 'Verifica se o valor se o valor da esquerda é menor que o valor da direita<br>';
		if(4 < 5){
			echo '4 é menor que 5:';echo ' Verdade';
		}else{
			echo 'Falso';
		}
		echo '<hr>';
		//>
		echo '<h5>Operador maior que ></h5>';
		echo 'Verifica se o valor se o valor da esquerda é maior que o valor da direita<br>';
		if(5 > 4){
			echo '5 é maior que 4:';echo ' Verdade';
		}else{
			echo 'Falso';
		}
		echo '<hr>';
		//<=
		echo '<h5>Operador menor ou igual <=</h5>';
		echo 'Verifica se o valor se o valor da esquerda é menor ou igual ao valor da direita<br>';
		if(5 <= 4){
			echo '5 é menor ou igual a 4:';echo ' Verdade';
		}else{
			echo '5 é menor ou igual a 4:'; echo ' Falso';
		}
		echo '<hr>';
		//>=
		echo '<h5>Operador maior ou igual >=</h5>';
		echo 'Verifica se o valor se o valor da esquerda é maior ou igual ao valor da direita<br>';
		if(5 >= 4){
			echo '5 é maior ou igual a 4:';echo ' Verdade';
		}else{
			echo '5 é maior ou igual a 4:'; echo ' Falso';
		}
		echo '<hr>';
		//Caso a condição utilize apenas o if, não é preciso colocar {} na estrutura do código, pois o php tem inteligência para executar o código mesmo assim. Neste caso, só é permitido o uso de uma instrução.
		//Operadores lógicos
		echo '<h1>Operadores lógicos</h1>';
		//E (AND) &&
		echo '<h5>Operador E (AND) &&</h5>';
		echo 'Com este operador expressão só é verdadeira se todas as codições forem verdade.<br>';
		if(5 == 3 && 10 > 3){
		echo '5 é igual 3 e 10 émaior que 3:';echo ' Verdade';
		}else{
		echo '5 é igual 3 e 10 é maior que 3:'; echo ' Falso';
		}
		echo '<hr>';
		//OU (OR) ||
		echo '<h5>Operador OU (OR) ||</h5>';
		echo 'Com este operador basta que uma das codições seja verdeira para que a expressão seja verdade.<br>';
		if(5 == 3 || 10 > 3){
			echo '5 é igual a 3 ou 10 é maior que 3:';echo ' Verdade';
		}else{
			echo '5 é igual a 3 ou 10 é maior que 3:'; echo ' Falso';
		}
		echo '<hr>';
		//XOR
		echo '<h5>Operador XOR</h5>';
		echo 'Este operador é representado pela palavra reservada XOR e funcioana da seguinte maniera, para que a expressão seja verdadeira uma das codições tem de ser verdadeira e a outra falsa ou vice-versa.<br>';
		if(3 == 3 XOR 10 < 3){
			echo '3 é igual a 3 ou 10 é menor que 3:';echo ' Verdade';
		}else{
			echo '3 é igual a 3 ou 10 é menor que 3:'; echo ' Falso';
		}
		echo '<hr>';
		//!
		echo '<h5>Operador de negação !</h5>';
		echo 'O operador de negação (!) trabalha no sendito de contrariedade, por exemplo, se uma condição for verdade, ele a transforma em falsidade e vice-versa.<br>';
		if(!('a' == 'b')){
			echo 'a é igual a b:';echo ' Verdade';
		}else{
			echo 'a é igual a b:'; echo ' Falso';
		}
		echo '<hr>';
		//Exemplo
		echo '<h5>Exemplo</h5>';
		echo 'Exemplo de uso de vários operadores lógicos e de comparação.<br>';
		if(22 == 22 && 3 == 3 && 5 != 5){
			echo '22 é igual a 22 e(&&) 3 é igual a 3 e(&&) 5 é diferente de 5:';echo ' Verdade';
		}else{
			echo '22 é igual a 22 e(&&) 3 é igual a 3 e(&&) 5 é diferente de 5:'; echo ' Falso';
		}
		echo '<hr>';
		//Exemplo de ordem de precedência
		echo '<h5>Exemplo de ordem de precedência</h5>';
		echo 'Para garantir que uma condição será executada antes da outra faz-se necesário uso de (), pois através deles é possível indicar ordem de precedência e sempre de dentro para fora.<br>';
		if((22 == 22 && 3 == 3) || 5 != 5){
			echo '(22 é igual a 22 e(&&) 3 é igual a 3) ou(||) 5 é diferente de 5:';echo ' Verdade';
		}else{
			echo '(22 é igual a 22 e(&&) 3 é igual a 3) ou(||) 5 é diferente de 5:'; echo ' Falso';
		}
		echo '<hr>';
	?>
</body>
</html>