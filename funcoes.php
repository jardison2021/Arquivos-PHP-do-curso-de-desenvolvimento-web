<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funções</title>
	<style type="text/css">
		hr{
			color: #ADD8E6;
		}
		h3{
			color: #4682B4;
		}
	</style>
</head>
<body>
	<?php
		//void
		echo '<h3>Função void(sem retorno)</h3>';
		function exibirBoasVindas(){
			echo 'Seja bem-vindo(a)!';
		}
		exibirBoasVindas();
		echo '<br>';
		//Funcção com retorno
		echo '<h3>Função com retorno</h3>';
		function calcularAreaTerreno($largura, $comprimmento){
			$area = $largura * $comprimmento;
			return $area;
		}
		$resultado = calcularAreaTerreno(30, 50);
		echo $resultado;
		//A funçõa com retorno pode ser chamada através de uma variável ou diretamente pelo echo
	?>
	<?php
		//Funções para manipular Strings
		echo '<hr>';
		echo '<h3>Funções para manipular Strings</h3>';
		$texto = 'Curso completo de PHP';
		//string to lower - converte todos os caracteres da string para caixa-baixa
		echo '<p><b>strtolower</b> - converte todos os caracteres da string para caixa-baixa</p>';
		echo $texto;
		echo '<br>';
		echo strtolower($texto);
		echo '<hr>';
		//string to upper - converte todos os caracteres da string para caixa alta
		echo '<p><b>strtoupper</b> - converte todos os caracteres da string para caixa alta</p>';
		echo $texto;
		echo '<br>';
		echo strtoupper($texto);
		echo '<hr>';
		//string case first - deixa o caractere inicial da string maiúsculo
		echo '<p><b>ucfirst</b> - deixa o caractere inicial da string maiúsculo</p>';
		echo $texto;
		echo '<br>';
		echo ucfirst($texto);
		echo '<hr>';
		//string length - retorna a quantidade caracteres existente na string
		echo '<p><b>strlength</b> - retorna a quantidade caracteres existente na string</p>';
		echo $texto;
		echo '<br>';
		echo strlen($texto);
		echo '<hr>';
		//string replace - substitui uma cadeia de caracters por outra dentro de uma string através de parâmetros
		echo '<p><b>str_replace</b> - substitui uma cadeia de caracteres por outra dentro de uma string através de parâmetros</p>';
		echo $texto;
		echo '<br>';
		echo str_replace('PHP', 'JavaScript', $texto);
		echo '<hr>';
		//sub tring - retorna parte de uma string, e assim como a str_replace, a sbstr também utiliza parâmetros para o seu funcionamento
		echo '<p><b>substr</b> - retorna parte de uma string, e assim como a str_replace, a sbstr também utiliza parâmetros para o seun funcionamento</p>';
		echo $texto;
		echo '<br>';
		//Curso completo de PHP
		//0,1,2,3,4,5 ... 20-1
		echo substr($texto, 0, 14) . '...';
		echo '<hr>';
	?>
	<?php
		//Funções nativas para tarefas matemáticas
		$numero = 7.6;
		echo '<h3>Funções nativas para tarefas matemáticas</h3>';
		//ceil($numero): arredonda o valor para cima
		echo '<p><b>ceil($numero)</b>: arredonda o valor para cima</p>';
		echo $numero . ': '. ceil($numero);
		echo '<hr>';
		//floor($numero): arredonda o valor para baixo
		echo '<p><b>floor($numero)</b>: arredonda o valor para baixo</p>';
		echo $numero . ': '. floor($numero);
		echo '<hr>';
		//round($numero): arredonda o valor com base nas casas decimais
		echo '<p><b>round($numero)</b>: arredonda o valor com base nas casas decimais</p>';
		echo $numero . ': '. round($numero);
		echo '<hr>';
		//rand(): gera um inteiro aletório, essa função gera o maior núnero aletório possível  de acordo com o sistema operacional
		echo '<p><b>rand()</b>: gera um inteiro aletório, essa função gera o maior núnero aletório possível de acordo com o sistema operacional</p>';
		echo rand(0, 100);
		echo '<br>';
		echo getrandmax();
		echo '<hr>';
		//sqrt($numero): retorna a raiz quadrada
		echo '<p><b>sqrt($numero)</b>: retorna a raiz quadrada</p>';
		echo $numero . ': '. sqrt($numero);
		echo '<hr>';
	?>
	<?php
		//Funções nativas para manipular datas
		echo '<h3>Funções nativas para manipular datas</h3>';
		//date(formato): recupera data atual
		echo '<p><b>date(formato)</b>: recupera data atual</p>';
		echo date('d/m/Y H:i');
		echo '<hr>';
		//date_dafault_timezone_get(timezone): recupera o timezone default da aplicação
		echo '<p><b>date_dafault_timezone_get(timezone)</b>: recupera o timezone default da aplicação</p>';
		echo date_default_timezone_get();
		echo '<hr>';
		//date_default_timezone_set(timezone): atualiza o timezone default da aplicação
		echo '<p><b>date_default_timezone_set(timezone)</b>: atualiza o timezone default da aplicação</p>';
		date_default_timezone_set('America/Fortaleza');
		echo date('d/m/Y H:i');
		echo '<br>';
		echo date_default_timezone_get();
		echo '<hr>';
		//strtotime(data): transforma datas textuais em segundos
		echo '<h3>Cálculo de datas</h3>';
		echo '<p><b>strtotime(data)</b>: transforma datas textuais em segundos</p>';
		$data_inicial = '2024/07/20';
		$data_final = '2024/12/31';
		//timestamp
		//01/01/1970 -- 2024/07/20
		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);
		echo 'Data inicial: ' . $data_inicial . ' - ' . $time_inicial;
		echo '<br>';
		echo 'Data final: ' . $data_final . ' - ' . $time_final;
		$diferenca_time = $time_final - $time_inicial;
		echo '<br>';
		echo 'Diferença entre a data final e inicial em segundos: ' . $diferenca_time;
		//Quantos segundos existem em um dia
		$segundos_dia = 24 * 60 * 60;
		echo '<br>';
		echo 'Em um dia existem ' . $segundos_dia . ' segundos';
		$diferenca_dias = $diferenca_time / $segundos_dia;
		echo '<br>';
		echo 'A diferença em dias entre a data inicial e data final é de ' . $diferenca_dias . ' dias';
	?>
</body>
</html>