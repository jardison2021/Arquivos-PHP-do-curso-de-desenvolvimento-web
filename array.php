<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
	<style type="text/css">
		hr{
			color: #ADD8E6;
		}
		h1{
			color: #4682B4;
		}
		h3{
			color: #90d4d0;
		}
	</style>
</head>
<body>
	<?php
		//Array sequencial(numérico)
		echo '<h1>Array</h1>';
		echo '<h3>Array sequencial (numério)</h3>';
		//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
		$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
		$lista_frutas[] = 'Abacaxi';
		//debug
		echo '<p>Debug</p>';
		echo '<pre>';
		echo '<p>var_dump</p>';
		var_dump($lista_frutas);
		echo '<br>';
		echo '<hr>';
		echo '<p>print_r</p>';
		print_r($lista_frutas);
		echo '</pre>';
		echo '<p>Exbibindo item específico do array</p>';
		echo $lista_frutas[5];
		//Array associativo
		$lista_frutas2 = array('a' => 'Banana', 'b' => 'Maçã', 'c' => 'Morango', 'd' => 'Uva', 'e' => 'Abacate');
		echo '<h3>Array associativo</h3>';
		$lista_frutas2['f'] = 'Abacaxi';
		echo '<pre>';
		var_dump($lista_frutas2);
		echo '</pre>';
		echo $lista_frutas2['f'];
	?>
</body>
</html>