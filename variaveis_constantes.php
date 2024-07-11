<!DOCTYPE html>
<html>
<head>
	<title>Variáveis Constantes</title>
</head>
<body>
	<?php
		//Variáveis constantes
		define('BD_URL', 'endereco_bd_dev');
		define('BD_USUARIO', 'usuario_dev');
		define('BD_SENHA', 'senha_dev');
		//Não há a necessidade de usar o $ para recuperar as variáveis constantes
		echo BD_URL . '<br>';
		echo BD_USUARIO . '<br>';
		echo BD_SENHA;
	?>
</body>
</html>