<?php
	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$usuario = 'root';
	$senha = '';
	//Tratamento de erros
	try{
		$conexao = new PDO($dsn, $usuario, $senha);
	}catch(PDOException $e){
		echo 'Erro: '.$e->getcode().' Mensagem: '.$e->getMessage();
		//registrar erro
	}
?>