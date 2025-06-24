<?php
	if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
		$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
		$usuario = 'root';
		$senha= '';
		try {
			$conexao = new PDO($dsn, $usuario, $senha);
			//query
			$query = "select * from tb_usuarios where email = :usuario AND senha = :senha";
			$stmt = $conexao->prepare($query);
			$stmt->bindValue(':usuario', $_POST['usuario']);
			$stmt->bindValue(':senha', $_POST['senha']);
			//recuperado objeto statement
			$stmt->execute();
			$usuario = $stmt->fetch();
			echo '<pre>';
			print_r($usuario);
			echo '</pre>';
		} catch (Exception $e) {
			echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
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
		<input type="text" name="usuario" placeholder="Usuário">
		<br>
		<input type="password" name="senha" placeholder="Senha">
		<br>
		<button type="submit">Entrar</button>
	</form>
</body>
</html>