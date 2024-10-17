<?php
	session_start();
	//str_replace: substitui um caractere
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);
	//função que abre o arquivo
	$arquivo = fopen('arquivo.hd','a');
	//implode: trasnforma o array em string
	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
	//fwrite escreve no arquivo
	fwrite($arquivo, $texto);
	//fclose fecha o arquivo
	fclose($arquivo);
	//echo $texto;
	header('Location: abrir_chamado.php');
?>