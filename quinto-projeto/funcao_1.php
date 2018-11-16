<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	function soma($num1,$num2){
		return $num1 + $num2;
	}
	function subtracao($num1,$num2){
		return $num1 - $num2;
	}

	echo soma(5,7);
	
	echo '<br>';
	
	echo subtracao(5,7);
	
	echo '<br>';
	
	function bem_vindo(){
		echo "Seja bem vindo<br>";
	}
	bem_vindo();
?>	
</body>
</html>