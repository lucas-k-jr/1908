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
		include("classeNao_perecivel.php");
		include("cabecalho.php");
		
		$p = new NaoPerecivel($_POST);
	
		session_start();
		
		$_SESSION["nao_perecivel"][]=$p;
		
		echo "Produto cadastrado com sucesso!";
		$p->exibe();

	?>
	</body>
</html>