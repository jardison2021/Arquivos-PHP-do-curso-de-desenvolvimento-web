<?php
	if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
		$dsn = 'mysql:localhost;dbname=php_com_pdo';
		$usuario = 'root';
		$senha= '';
		try {
			$conexao = new PDO($dsn, $usuario, $senha);
			//query
			$query = "select * from tb_usuarios where";
			$query .= " email = '{$_POST['usuario']}'";
			$query .= " AND senha = '{$_POST['senha']}'";
			echo $query;
			$conexao->query($query);
			$stmt = $conexao->query($query);
			$usuario = $stmt->fetch();
			echo '<hr>';
			echo '<pre>';
			print_r($usuario);
			echo '</pre>';
		} catch (Exception $e) {
			echo 'Erro: '.$e->getcode().' Mensagem: '.$e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form method="post" action="index.php">
		<input type="text" name="nome" placeholder="Usuário">
		<br>
		<input type="password" name="senha" placeholder="Senha">
		<br>
		<button type="submit">Entrar</button>
	</form>
</body>
</html>