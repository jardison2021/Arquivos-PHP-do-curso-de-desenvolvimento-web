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
	<?php
		//Arrays mltidimensionais
		echo '<hr>';
		echo '<h1>Arrays multidimensionais</h1>';
		echo '<p>Array mltidimensional é uma série de arrays dentro de outro array</p>';
		echo '<h3>Array associativo</h3>';
		$lista_coisas = [];
		$lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
		$lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];
		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';
		echo '<hr>';
		echo 'Recuperando o valor no índice 3 do array frutas: ' . $lista_coisas['frutas'][3];
		echo '<br>';
		echo 'Recuperando o valor no índice 2 do array pessoas: ' . $lista_coisas['pessoas'][2];
	?>
	<?php
		//Métodos de pesquisa em array
		//in_array() - retorna true ou false para existência do que esta sendo pesquisado
		//array_search() - retorna o índice do valor pesquisado, caso ele exista
		echo '<hr>';
		echo '<h1>Métodos de pesquisa em arrays</h1>';
		$lista_frutas = ['Banana', 'Maçã','Morango', 'Uva',];
		echo '<pre>';
		print_r($lista_frutas);
		echo '</pre>';
		echo '<h3>Método de pesquisa in_array()</h3>';
		echo '<p>Esse método retorna true ou false para existência do que está sendo pesquisado</p>';
		$retorno = in_array('Maçãs', $lista_frutas);
		if($retorno){
			echo 'Objeto ' . $lista_frutas[1] . ' encontrado';
		}else{
			echo 'Objeto não encontrado';
		}
		echo '<h3>Método de pesquisa array_search()</h3>';
		echo '<p>Esse método retorna índice do valor pesquisado, caso ele exista</p>';
		$retorno2 = array_search('Uva', $lista_frutas);
		if($retorno2){
			echo 'Objeto ' . $retorno2 . ' encontrado';
		}else{
			echo 'Objeto não encontrado';
		}
		echo '<h3>Método de pesquisa em array multidimensional</h3>';
		echo '<h3>in_array()</h3>';
		$lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['Francisco', 'Jardison']];
		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';
		$retorno3 = in_array('Uva', $lista_coisas['frutas']);
		if($retorno3){
			echo 'Objeto encontrado';
		}else{
			echo 'Objeto não encontrado';
		}
		echo '<h3>array_search()</h3>';
		$retorno4 = array_search('Uva', $lista_coisas['frutas']);
		if($retorno4){
			echo 'Objeto ' . $retorno4 . ' encontrado';
		}else{
			echo 'Objeto não encontrado';
		}
	?>
</body>
</html>