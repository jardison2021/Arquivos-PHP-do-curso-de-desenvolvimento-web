<?php
	include("menu.php"); //warning (quando não encontra a página)
	require "menu.php"; //fatal error (quando não encontra a página)
	include_once "menu.php"; //só faz a inclusão de script apenas uma vez
	require_once "menu.php"; //só faz a inclusão de script apenas uma vez
?>
conteúdo da página (início)