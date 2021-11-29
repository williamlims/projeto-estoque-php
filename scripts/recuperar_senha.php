<?php
require('conexao.php');

$conn = new Estoque();

$email = "";

$email = $_POST["email"];


$ret = $conn->query("SELECT * FROM usuario where email='$email' ");
$row = $ret->fetchArray(SQLITE3_ASSOC);

if($row){
	$conn->close();	
	$senha = $row['senha'];

	echo "<script>alert('Sua senha é $senha!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../index.php\"></head>";
} else {
	$conn->close();
	echo "<script>alert('Esse e-mail não existe!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../index.php\"></head>";
}


?>