<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casting</title>
</head>
<body>
	<?php 
		//Função gettype(): retorna o tipo da variável
		$valor = 10;
		$valor2 = (float) $valor;
		echo $valor . ' ' . gettype($valor);
		echo '<br>';
		echo $valor2 . ' ' . gettype($valor2);
		//os demais tipos também podem sofrer casting
		//int: float e string
		//string: int, string e boolean
		//float: int e string
		//boolean: int e string
	?>
</body>
</html>