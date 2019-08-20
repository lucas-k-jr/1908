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
		include("classeCliente.php");
		include("cabecalho.php");
		
		$p = new Cliente($_POST);
	
		session_start();
		
		$_SESSION["cliente"][]=$p;
		
		echo "Cliente cadastrado com sucesso!";
		$p->exibe();

	?>
	</body>
</html>