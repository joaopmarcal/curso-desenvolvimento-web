<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<?php
	//Classe mãe ou superclasse
	class Felino{
		var $mamifero = 'sim';
		
		function correr(){
			echo 'Correr como felino';
		}
	}
	
	//Classe filha ou subclasse
	class Chita extends Felino{
		
		//Polimorfismo
		function correr(){
			echo 'corre até 100km';
		}
		
	}
	class Gato extends Felino{
		
	}
	$chita = new Chita();
	echo $chita->mamifero . '<br>';
	$chita->correr();
?>	
<body>
</body>
</html>