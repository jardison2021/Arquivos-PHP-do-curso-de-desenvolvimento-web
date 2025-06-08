<<<<<<< HEAD
<?php
	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';
	//Tratamento de erros
	try{
		$conexao = new PDO($dsn, $usuario, $senha);
		//executando instruções sql tilizando o Exec
		//Criando tabela
		/*$query = '
			create table tb_usuarios(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(32) not null
			)
		';
		$retorno = $conexao->exec($query);
		echo $retorno;
		//Inserindo dados
		/$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Jardison Santos", "jardison@email.com", "123456"
			)
		';
		$retorno = $conexao->exec($query);
		echo $retorno;
		$query = '
			insert into tb_usuarios(
				nome, email, senha
			)values(
				"Jardison", "jardison@email.com", "123456"
			)
		';
		$conexao->exec($query);
		$query = '
			insert into tb_usuarios(
				nome, email, senha
			)values(
				"Francisco", "francisco@email.com", "789101"
			)
		';
		$conexao->exec($query);
		$query = '
			insert into tb_usuarios(
				nome, email, senha
			)values(
				"Santos", "santos@email.com", "112131"
			)
		';
		$conexao->exec($query);*/

		//Criando Query de consulta
		$query = '
			select * from tb_usuarios
		';
		$stmt = $conexao->query($query);
		$lista = $stmt->fetchAll();
		echo '<pre>';
		print_r($lista);
		echo '</pre>';
		echo $lista[0]['nome'];
	} catch(PDOException $e) {
		echo 'Erro: '.$e->getcode().' Mensagem: '.$e->getMessage();
		//registrar erro
	}
?>
=======
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Primeiro Código PHP</title>
</head>
<body>
	<!-- Tag padrão do PHP -->
	<?php
		echo 'Utilizando a tag padrão';
	?>
	<br>
	<!-- Tag de impressão do PHP -->
	<?= 'Utilizando tag de impressão' ?>
</body>
</html>
>>>>>>> 29a928a (De volta aos comandos)
