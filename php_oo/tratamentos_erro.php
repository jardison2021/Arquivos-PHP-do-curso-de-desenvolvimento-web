<?php
	try{
		echo '<h3>Try</h3>';
		//$sql = 'Select * from clientes';
		//mysql_query($sql);//Erro
		/*if(!file_exists('require_aquivo_a.php')){
			throw new Exception('O arquivo em questão deveria estar disponível às, ' . date('H:i:s d/m/y') . ', mas não estava. Vamos seguir com as atividades.');
		}*/
		if(!file_exists('require_aquivo_a.php')){
			throw new Error('O arquivo em questão deveria estar disponível às, ' . date('H:i:s d/m/y') . ', mas não estava. Vamos seguir com as atividades.');
		}
	}catch (Error $e){//Catch do erro
		echo '<h3>Catch Error </h3>';//Quando não há erro no código essa instrução não é executada, passando direto para o finally.
		echo '<p style="color: red">' . $e . '</p>';
	}catch (Exception $e){//Catch da Exception
		echo '<h3>Catch Exception</h3>';
		echo '<p style="color: red">' . $e . '</p>';
	}finally{
		echo '<h3> Finally</h3>';//Quando o catch está implementado não precisa implementar o finally.
	}
?>