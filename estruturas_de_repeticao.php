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
		#titulo{
			background: #1E90FF;
			border-radius: 5px;
			color: white;
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
		$itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');
		echo '<pre>';
		print_r($itens);
		echo '<pre>';
		foreach ($itens as $item) {
			echo "$item <br>";
			if($item == 'mesa'){
				echo '(Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)' . '<br>';
			}
		}
		echo '<hr>';
	?>
	<?php
		echo '<h1>Praticando um pouco mais, percorrendo arrays com Whille, Do Whille e For</h1>';
		echo '<h3>Whille</h3>';
		$registros = array(array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'), array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'), array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'), array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'));
		echo '<pre>';
		print_r($registros);
		echo '</pre>';
		$idx = 0;
		while($idx < count($registros)){
			echo '<h3 id="titulo">' . $registros[$idx]['titulo'] . '</h3>' ;
			echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;
			echo '<hr>';
			$idx++;
		}
	?>
	<?php
		echo '<h3>Do Whille</h3>';
		$registros = array(array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'), array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'), array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'), array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'));
		echo '<pre>';
		print_r($registros);
		echo '</pre>';
		$idx = 0;
		do{
			echo '<h3 id="titulo">' . $registros[$idx]['titulo'] . '</h3>' ;
			echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;
			echo '<hr>';
			$idx++;
		}while($idx < count($registros))
	?>
	<?php
		echo '<h3>For</h3>';
		$registros = array(array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'), array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'), array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'), array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'));
		echo '<pre>';
		print_r($registros);
		echo '</pre>';
		for($idx = 0; $idx < count($registros); $idx++){
			echo '<h3 id="titulo">' . $registros[$idx]['titulo'] . '</h3>' ;
			echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;
			echo '<hr>';
		}
	?>
</body>
</html>