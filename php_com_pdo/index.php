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
		//$stmt = $conexao->query($query);
		foreach ($conexao->query($query) as $key => $value){
			print_r($value);
			echo '<hr>';
		}
		//$lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo '<pre>';
		//print_r($lista_usuario);
		//echo '</pre>';
		/*foreach ($lista_usuario as $key => $value) {
			echo $value['nome'];
			echo '<hr>';
		}*/
		//echo $usuario['nome'];
	} catch(PDOException $e) {
		echo 'Erro: '.$e->getcode().' Mensagem: '.$e->getMessage();
		//registrar erro
	}
?>