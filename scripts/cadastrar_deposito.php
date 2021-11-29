<?php
require('conexao.php');

$conn = new Estoque();

$nome = $responsavel = $status = $descricao = "";

$nome = $_POST["nome"];
$responsavel = $_POST["responsavel"];
$status = $_POST["status"];
$descricao = $_POST["descricao"];

if($conn->exec("INSERT INTO deposito (nome, responsavel, status, descricao) VALUES 
									 ('$nome', '$responsavel', '$status', '$descricao')")){
	$conn->close();	
	echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../pages/estoque/deposito.php\"></head>";
} else {
	$conn->close();	
	$conn->lastErrorMsg();
}


?>