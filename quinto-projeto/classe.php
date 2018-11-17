<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<?php
	
	class cadastro {
		
		var $nome;
		var $data_de_nascimento;
		var $sexo;
		var $cpf;
		var $rg;
		var $salario;
		var $telefone;
		var $email;
		
		function setNome($nome_definido){
			$this->nome = $nome_definido;
		}
		function getNome(){
			return $this->nome;
		}
		function setData_de_nascimento($data_de_nascimento_definido){
			$this->data_de_nascimento = $data_de_nascimento_definido;
		}
		function getData_de_nascimento(){
			return $this->data_de_nascimento;
		}
		function setSexo($sexo_definido){
			$this->sexo = $sexo_definido;
		}
		function getSexo(){
			return $this->sexo;
		}
		function setCpf($cpf_definido){
			$this->cpf = $cpf_definido;
		}
		function getCpf(){
			return $this->cpf;
		}
		function setRg($rg_definido){
			$this->rg = $rg_definido;
		}
		function getRg(){
			return $this->rg;
		}
		function setSalario($salario_definido){
			$this->salario = $salario_definido;
		}
		function getSalario(){
			return $this->salario;
		}
		function setTelefone($telefone_definido){
			$this->telefone = $telefone_definido;
		}
		function getTelefone(){
			return $this->telefone;
		}
		function setEmail($email_definido){
			$this->email = $email_definido;
		}
		function getEmail(){
			return $this->email;
			
		}
	}
		$cadastro = new Cadastro();
		$cadastro->setNome('João Paulo');
		$cadastro->setData_de_nascimento('07/03/1991');
		$cadastro->setSexo('Masculino');
		$cadastro->setCpf('111111111');
		$cadastro->setRg('125447556');
		$cadastro->setSalario('1.500,00');
		$cadastro->setTelefone('11993544971');
		$cadastro->setEmail('paulospc21@gmail.com');
	/*
		echo $cadastro->getNome();
		echo '<br>';
		echo $cadastro->getData_de_nascimento();
		echo '<br>';
		echo $cadastro->getSexo();		
		echo '<br>';
		echo $cadastro->getCpf();	
		echo '<br>';
		echo $cadastro->getRg();	
		echo '<br>';
		echo $cadastro->getSalario();	
		echo '<br>';
		echo $cadastro->getTelefone();	
		echo '<br>';
		echo $cadastro->getEmail();	
		echo '<br>';
	*/
?>	
<body>
	<table border="1">
		<tr>
			<th>Dados</th>
			<th>Funcionário</th>
		</tr>
		<tr>
			<td>Nome</td>
			<td><?php echo $cadastro->getNome(); ?></td>
		</tr>
		<tr>
			<td>Data de nsacimento</td>
			<td><?php echo $cadastro->getData_de_nascimento(); ?></td>
		</tr>
		<tr>
			<td>Sexo</td>
			<td><?php echo $cadastro->getSexo(); ?></td>
		</tr>
		<tr>
			<td>Cpf</td>
			<td><?php echo $cadastro->getCpf(); ?></td>
		</tr>
		<tr>
			<td>Rg</td>
			<td><?php echo $cadastro->getRg(); ?></td>
		</tr>
		<tr>
			<td>Salario</td>
			<td><?php echo $cadastro->getSalario() ?></td>
		</tr>		
		<tr>
			<td>Telefone</td>
			<td><?php echo $cadastro->getTelefone(); ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><?php echo $cadastro->getEmail(); ?></td>
		</tr>
	</table>
</body>
</html>