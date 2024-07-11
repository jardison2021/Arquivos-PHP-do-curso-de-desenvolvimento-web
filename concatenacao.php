<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Concatenação</title>
</head>
<body>
	<?php
	$nome = 'Jardison';
	$cor = 'laranja';
	$idade = 29;
	$atividade_preferida = 'andar de bicicelta';
		//Operador .: concatenação
		echo '<h1>Concatenação utilizando ponto</h1>';
		echo 'Olá, ' . $nome . ', vi que sua cor preferida é ' . $cor . ' , estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida . '!';
		//Utilizando aspas duplas na concatenação
		echo '<br/>';
		echo '<h1>Concatenação utilizando aspas duplas</h1>';
		echo "Ola, $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida!";
	?>
</body>
</html>