<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ativide 1</title>
	<?php
		$idade = 16;
		$peso = 50;
	?>
</head>
	<h5>Resultado do teste de aptidão para doação de sange</h5>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Atende aos requisitos?
		<?php
			if($idade >= 16 && $idade <= 69 && $peso >= 50){
			echo 'Sim';
			}else{
			echo 'Não';
			}
		?>
	</p>
</head>
<body>
</body>
</html>