<?php
require('conexao.php');
session_start();

$conn = new Estoque();

$email = $senha = "";

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuario where email='$email' AND senha='$senha' ";

$ret = $conn->query($sql);

$row = $ret->fetchArray(SQLITE3_ASSOC);

if($row){
	$conn->close();	
	$_SESSION["email"] = $email;
	$_SESSION["senha"] = $senha;
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../pages/estoque/index.php\"></head>";
} else {
	$conn->close();	
	echo "<script>alert('E-mail ou Senha incorreto!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../index.php\"></head>";
}


?>