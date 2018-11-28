<?php

	require_once('db.class.php');
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	//verifica se o usuário já existe
	$sql = "select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link,$sql)){
		
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['usuario'])){
			echo 'Usuário já cadastrado';
		} else {
			echo 'Erro ao tentar localizar o resgistro de usuário';
		}
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}
	//verifica se o e-mail já existe
	$sql = " insert into usuarios(usuario,email,senha) values ('$usuario','$email','$senha') ";
	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}
?>
