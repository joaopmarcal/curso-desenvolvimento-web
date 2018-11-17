<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<?php
	
	if( isset($_POST['nome']) && empty($_POST['nome'])){
		echo 'Preencha o nome completo <br>';
	}
	if( isset($_POST['cpf']) && empty($_POST['cpf'])){
		echo 'Preencha o CPF <br>';
	}
	if( isset($_POST['cpf']) && !is_numeric($_POST['cpf'])){
		echo 'Apenas números no CPF <br>';
	}	
	echo $data = date("Y-m-d H:i");
?>	
<body>
<form action="" method="post">
	<label for="">
		Nome completo:
		<input type="text" name="nome">
	</label>
	<label for="">
		CPF:
		<input type="text" name="cpf">
	</label>	
	<input type="submit" value="cadastrar">
</form>
</body>
</html>