<!DOCTYPE html>
<html>
<head>
	<title>Atividade 3</title>
</head>
<body>
	<?php
		echo '<h1>Sorteio</h1>';
		$numeros = array(
			array('numero' => 'Número 1', 'sorteio' => rand(1, 60)), 
			array('numero' => 'Múmero 2', 'sorteio' => rand(1, 60)), 
			array('numero' => 'Número 3', 'sorteio' => rand(1, 60)), 
			array('numero' => 'Número 4', 'sorteio' => rand(1, 60)), 
			array('numero' => 'Número 5', 'sorteio' => rand(1, 60)),
			array('numero' => 'Número 6', 'sorteio' => rand(1, 60))
		);
		for($idx = 0; $idx < count($numeros); $idx++){
			echo '<p>' . $numeros[$idx]['numero']. ': ' . $numeros[$idx]['sorteio']. '</p>' ;
		}
	?>
</body>
</html>