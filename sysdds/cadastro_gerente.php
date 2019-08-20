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
		include("classeGerente.php");
		include("cabecalho.php");
		
		$p = new Gerente($_POST);
	
		session_start();
		
		$_SESSION["gerente"][]=$p;
		
		echo "Gerente cadastrado com sucesso!";
		$p->exibe();

	?>
	</body>
</html>