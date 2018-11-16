<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	require_once("funcao_desconto.php");
	$valor_total = 800;
	$desconto = 10;
	$valor_com_desconto = 0;
	
?>	
Valor Total: R$ <?php echo $valor_total ?> <br>
Valor Desconto: <?php echo $desconto ?>% <br>
Valor Total com Desconto: R$ <?php echo calcula_desconto($valor_total,$desconto) ?> <br>

</body>
</html>