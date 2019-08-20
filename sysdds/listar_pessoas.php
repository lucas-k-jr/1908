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
		
		include("classePessoa.php");
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>CPF</th>
				<th>Sexo</th>
				<th>Data Nascimento</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["pessoa"] as $i=>$p){
					$p->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>