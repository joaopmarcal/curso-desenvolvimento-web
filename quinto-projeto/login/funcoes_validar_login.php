<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	
	function valida_login($login,$senha){
		//validar direto em um banco de dados
		$login_bd = 'joao.paulo';
		$senha_bd = '123';
		if($login == $login_bd && $senha == $senha_bd){
			return true;
		}
		return false;
	}
	
?>	


</body>
</html>