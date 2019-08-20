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
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Área</th>
				<th>Salário</th>
                <th>Turno</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["funcionario"] as $i=>$p){
					$p->exibicao_tabela();
				}
			?>
		</tbody>
	</table>
	</body>
</html>