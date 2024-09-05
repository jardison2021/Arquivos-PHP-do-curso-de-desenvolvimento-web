<?php
	//Variável que verifica se autenticação foi realizada
	$usuario_autenticado = false;
	//Usuários do sistema
	$usuarios_app = array(
		array('email' => 'jardison@teste.com', 'senha' => '123456'),
		array('email' => 'user@teste.com', 'senha' => 'abcdef'),
	);
	/*echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';*/
	foreach ($usuarios_app as $user) {
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}
	}
	if($usuario_autenticado){
		echo 'Usuário autenticado';
	}else{
		header('Location: index.php?login=erro');
	}
?>