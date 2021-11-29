<?php
require('conexao.php');

$conn = new Estoque();

$nome = $sobrenome = $email = $senha = $empresa = $cargo = "";

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$empresa = $_POST["empresa"];
$cargo = $_POST["cargo"];

if($conn->exec("INSERT INTO usuario (nome, sobrenome, email, senha, empresa, cargo) VALUES 
									 ('$nome', '$sobrenome', '$email', '$senha', '$empresa', '$cargo')")){
	$conn->close();	
	echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../pages/cadastro.php\"></head>";
} else {
	$conn->close();	
	$conn->lastErrorMsg();
}


?>