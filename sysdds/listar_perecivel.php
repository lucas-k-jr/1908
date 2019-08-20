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
		
		include("classePerecivel.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Data de validade</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["perecivel"] as $i=>$p){
					$p->exibicao_tabela();
				}
			?>
		</tbody>
	</table>
	</body>
</html>