<?php
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	//str_replace: substitui um caractere
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);
	//função que abre o arquivo
	$arquivo = fopen('arquivo.txt','a');
	//implode: trasnforma o array em string
	$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
	//fwrite escreve no arquivo
	fwrite($arquivo, $texto);
	//fclose fecha o arquivo
	fclose($arquivo);
	//echo $texto;
	header('Location: abrir_chamado.php');
?>