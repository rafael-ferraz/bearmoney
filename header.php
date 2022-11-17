<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BearMoney</title>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>BearMoney by BearCubic</title>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#"><img src="images/bearcub.png" width="40px"> <font color="gray">Bear</font>Money</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php"></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Lançar
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="lancamento.php?type=1"><i class="fa fa-plus" aria-hidden="true" style="color: green;"></i> Entrada</a>
					  <a class="dropdown-item" href="lancamento.php?type=2"><i class="fa fa-minus" aria-hidden="true" style="color: red;"></i> Saída</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cadastro
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Categorias</a>
					</div>
				</li>
			</ul>
		<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		</form>
	</div>
	</nav>
		
	</head>
	<body>
	<?php
		include "config/conn.php";
	?>
	<div class="w3-container">