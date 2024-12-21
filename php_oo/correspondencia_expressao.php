<?php
	$busca = 'x';
	switch ($busca) {//Comparação por igualdade (==)
		case '1':
			$retornoSwitch = 'Encontrou o texto 1';
			break;
		case '2':
			$retornoSwitch = 'Encontrou o número 2';
			break;
		default:
			$retornoSwitch = 'Não Encontrou';
	}
	echo "Resultado switch: ".$retornoSwitch;
	echo "<hr>";
	/*$retornoMatch = match($busca) {//Comparação por identidade (===)
		'1' => 'Encontrou o texto 1',
		1 => 'Encontrou o número 1',
		'2' => 'Encontrou o texto 2',
		2 => 'Encontrou o número 2',
		5, '8', 12, 'x' => 'Encontrou o valor 5 ou 12, ou os textos 8 ou x',
		default => 'Não Encontrou'
	};*/
	//Match com condicionais ou operações lógicas
	$retornoMatch = match (true) {
		$busca < 20 => 'Encontrou',
		$busca >= 20 && $busca <=30 => 'Encontrou um valor maior que 20 e menor que 30',
		default => 'Não Encontrou'
	};
	echo "Resultado do match: ".$retornoMatch;
?>