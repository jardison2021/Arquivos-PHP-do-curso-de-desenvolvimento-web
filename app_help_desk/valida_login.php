<?php
	//Início do recurso de sessão
	session_start();
	//Variável que verifica se autenticação foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;
	//array de nível de usuários
	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');
	//Usuários do sistema
	$usuarios_app = array(
		array('id' => 1, 'email' => 'jardison@teste.com', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com', 'senha' => 'abcdef', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'jose@teste.com', 'senha' => '1234', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'maria@teste.com', 'senha' => 'abcd', 'perfil_id' => 2),
	);
	/*echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';*/
	foreach ($usuarios_app as $user) {
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}
	}
	if($usuario_autenticado){
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php?login=erro');
	}else{
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=erro');
	}
?>