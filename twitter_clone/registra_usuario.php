<?php

	require_once('db.class.php');
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$usuario_existe = false;
	$email_existe = false;

	//verifica se o usuário já existe
	$sql = "select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link,$sql)){
		
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}
	//verifica se o e-mail já existe
	$sql = "select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link,$sql)){
		
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['usuario'])){
			$email_existe = true;
		}
	} else {
		echo 'Erro ao tentar localizar o registro de email';
	}

	if($usuario_existe || $email_existe){
		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}
		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}		
		header('Location: inscrevase.php?'.$retorno_get);
		die();		
	}
	$sql = " insert into usuarios(usuario,email,senha) values ('$usuario','$email','$senha') ";
	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}
?>
