<?php

	require_once('db.class.php');
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$objDb = new db();
	//$link = $objDb->conecta_mysql();
	//$sql = " insert into usuarios(usuario,email,senha) values ('$usuario','$email','$senha') ";
	$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('" .$this->usuario. "', '" .$this->email."', '" .$this->senha."')";
		
	$con = Conexao::ligarConexao();
	$con->exec($query);
	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}
?>
