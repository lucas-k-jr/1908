<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("classeFuncionario.php");
		include("cabecalho.php");
		
		$p = new Funcionario($_POST);
	
		session_start();
		
		$_SESSION["funcionario"][]=$p;
		
		echo "Funcionario cadastrado com sucesso!";
		$p->exibe();

	?>
	</body>
</html>