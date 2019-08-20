<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input,textarea{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastro_perecivel.php">
            <?php 
                    include("form_nao_perecivel.php");
                    echo "
                        <input type="date" name="data_validade" placeholder="Digite a validade" /> <br />
                    ";
                ?>
			<input type="submit" value="cadastrar" /> <br />
		</form>
	</body>
</html>
