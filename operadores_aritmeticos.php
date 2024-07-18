<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operadores Aritméticos</title>
</head>
<body>
	<?php 
		$num1 = 7;
		$num2 = 4;
		echo '<h5>Operadores aritméticos</h5>';
		//Operações básicas
		echo "A soma entre num1 e num2 é " . $num1 + $num2;
		echo '<br>';
		echo "A subtração de num1 e num2 é " . $num1 - $num2;
		echo '<br>';
		echo "A multiplicação de num1 e num2 é " . $num1 * $num2;
		echo '<br>';
		echo "A divisão de num1 e num2 é " . $num1 / $num2;
		//Módulo
		echo '<br>';
		echo "O módulo de num1 e num2 é " . $num1 % $num2;
		//Operadores de atribuição e operadores aritméticos
		echo '<h5>Operadores de atribuição e operadores aritméticos</h5>';
		$x = 10;
		$x = $x += 5;
		echo 'Valor inicial da variável x é 10, incrementanto mais 5 fica ' . $x;
	?>
</body>
</html>