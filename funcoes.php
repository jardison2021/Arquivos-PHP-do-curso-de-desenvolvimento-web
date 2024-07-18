<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções</title>
</head>
<body>
	<?php
		//void
		echo '<h3>Função void(sem retorno)</h3>';
		function exibirBoasVindas(){
			echo 'Seja bem-vindo(a)!';
		}
		exibirBoasVindas();
		echo '<br>';
		//Funcção com retorno
		echo '<h3>Função com retorno</h3>';
		function calcularAreaTerreno($largura, $comprimmento){
			$area = $largura * $comprimmento;
			return $area;
		}
		$resultado = calcularAreaTerreno(30, 50);
		echo $resultado;
		//A funçõa com retorno pode ser chamada através de uma variável ou diretamente pelo echo
	?>
</body>
</html>