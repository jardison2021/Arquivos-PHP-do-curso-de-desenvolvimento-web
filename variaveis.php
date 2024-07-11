<!DOCTYPE html>
<html>
<head>
	<title>Variáveis PHP</title>
</head>
<body>
	<?php
		//Variável do tipo string
		$nome = 'Jardison';
		//Variável do tipo inteiro
		$idade = 29;
		//Variável do tipo float
		$peso = 79.00;
		//Variável do tipo boolean
		$fumante = true;
		// lógica: alterando valores da variável
		$idade = '30';
	?>
	<h1>Ficha cadastral</h1>
	<hr>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Fumante: <?= $fumante ?></p>
</body>
</html>