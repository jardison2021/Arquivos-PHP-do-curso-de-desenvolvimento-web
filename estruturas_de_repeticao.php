<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estruturas de repetição</title>
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
		echo '<h1>Estruturas de repetição(loops)</h1>';
		echo '<h3>Whille</h3>';
		echo '<p>Executa o loop enquanto a condição for verdadeira.</p>';
		$num = 1;
		echo "Início do loop <br>";
		while ($num < 10) {
			$num ++;
			if($num == 2 or $num == 6){
				continue;
			}
			echo "$num <br>";
			/*if($num > 100){
				break;
			}*/
		}
		echo 'Fim do loop';
		echo '<hr>';
	?>
	<?php
		echo '<h3>Do Whille</h3>';
		echo '<p>Executa o loop primeiro e depois verifica a condição.</p>';
		$x = 1;
		do{
			echo "X = $x </br>";
			$x++;
			//continue
			//break
		}while($x < 9);
		echo '<hr>';
	?>
	<?php
		echo '<h3>For</h3>';
		echo '<p>Executa o loop enquanto a condição for verdadeira, porém você pode instanciar as variaveis contadoras dentro da estrutura do loop.</p>';
		for($x = 10; $x > 0; $x--){
			echo "X = $x <br>";
			//break
			//continue
		}
		echo '<hr>';
	?>
	<?php
		echo '<h3>Foreach</h3>';
		echo '<p>Executa o loop sobre os elementos de um array.</p>';
	?>
</body>
</html>