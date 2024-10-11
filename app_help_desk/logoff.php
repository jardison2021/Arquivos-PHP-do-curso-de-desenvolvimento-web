<?php
	//Sempre que for trabalhar com sessão é importante executar a função session_start() para ter acesso a super global.
	session_start();
	/*echo '<pre>';
		print_r($_SESSION);
	echo '<pre>';
	//unset(): remover índices do array de sessão
	unset($_SESSION['x']);//remove o índice apenas se existir, sendo assim, não indica mensagem de erro.
	echo '<pre>';
	 print_r($_SESSION);
	echo '<pre>';
	//session_destroy: destroi a variável de sessão
	session_destroy();//sessão será destruida, mas, somente numa próxima requisição é que não teremos mais acesso ao índice, por esse motivo, após o uso desta função, é comum forçar um redirecionamento para que assim seja forçada uma nova requisição automaticamente.
	echo '<pre>';
	 print_r($_SESSION);
	echo '<pre>';*/
	session_destroy();
	header('location: index.php');
?>