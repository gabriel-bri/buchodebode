<?php
	# Faz a requisição do arquivo functions.php
	# que contém as funções para o site
	require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="resources/images/logo.png">
	<link rel="stylesheet" type="text/css" href="resources/css/reset.css">
	<link rel="stylesheet" type="text/css" href="resources/css/index.css">
	<link rel="stylesheet" type="text/css" href="resources/css/header.css">
	<link rel="stylesheet" type="text/css" href="resources/css/footer.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<title>Restaurante Bucho de Bode - O melhor do Nordeste</title>
</head>
<body>

<?php 
	# Faz a requisição do arquivo footer.php 
	request_Header();
?>
	

	<div class="banner">
		<div class="banner-text">
			<h1>Bem vindo</h1>
			<h5>ao Bucho de Bode</h5>
		</div>	
	</div>


<?php
	# Faz a requisição do arquivo footer.php 
	request_Footer();
?>