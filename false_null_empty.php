<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fasle, null e empty</title>
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
		echo '<h1>False, null e empty</h1>';
		//false (ture/false) - variável booleana
		//null e empty - valores especiais
		$funcionario1 = null;
		$funcionario2 = '';
		$funcionario3 = false;
		//valores null
		echo '<h3>Valores null</h3>';
		echo '<p>Caso de uso da função is_null em variável null</p>';
		if(is_null($funcionario1)){
			//retorna true ou false
			echo 'Sim, a variável é null';
		}else{
			echo 'Não, a variável não é null';
		}
		echo '<br>';
		echo '<p>Caso de uso da função is_null em variável empty</p>';
		if(is_null($funcionario2)){
			//retorna true ou false
			echo 'Sim, a variável é null';
		}else{
			echo 'Não, a variável não é null';
		}
		//valores vazios
		echo '<h3>Valores vazios</h3>';
		echo '<p>Caso de uso da função empty em variável null</p>';
		if(empty($funcionario1)){
			//retorna true ou false
			echo 'Sim, a variável está vazia';
		}else{
			echo 'Não, a variável não está vazia';
		}
		echo '<br>';
		echo '<p>Caso de uso da função empty em variável empty</p>';
		if(empty($funcionario2)){
			//retorna true ou false
			echo 'Sim, a variável está vazia';
		}else{
			echo 'Não, a variável não está vazia';
		}
		//valores false
		echo '<h3>Valores false</h3>';
		echo '<p>Caso de uso da função empty em variável false</p>';
		if(empty($funcionario3)){
			//retorna true ou false
			echo 'Sim, a variável está vazia';
		}else{
			echo 'Não, a variável não está vazia';
		}
		echo '<br>';
		echo '<p>Caso de uso da função is_null em variável false</p>';
		if(is_null($funcionario3)){
			//retorna true ou false
			echo 'Sim, a variável é null';
		}else{
			echo 'Não, a variável não é null';
		}
	?>
</body>
</html>