<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
</body>
</html>
<?php 
	$produtos[1] = 'Sofá';
	$produtos[2] = 'Mesa';
	$produtos[3] = 'cadeira';
	$produtos[4] = 'Fogão';
	$produtos[5] = 'Geladeira';
foreach($produtos as $produto){
	echo $produto.'<br>';
}
?>