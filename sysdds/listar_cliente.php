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
		
		include("classeClietne.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<tbody>
			<?php
				foreach($_SESSION["cliente"] as $i=>$p){
					$p->exibicao_tabela();
				}
			?>
		</tbody>
	</table>
	</body>
</html>