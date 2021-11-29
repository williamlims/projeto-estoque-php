<?php
require('conexao.php');

$conn = new Estoque();

$deposito = $nome = $quantidade = $custo = $preco = $unidade = $descricao = "";

$deposito = $_POST["deposito"];
$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$custo = $_POST["custo"];
$preco = $_POST["preco"];
$unidade = $_POST["unidade"];
$descricao = $_POST["descricao"];

if($conn->query("INSERT INTO item (id_deposito, nome_item, quantidade, custo, preco_venda, unidade_medida, descricao) VALUES 
									 ('$deposito', '$nome', '$quantidade', '$custo', '$preco', '$unidade', '$descricao')")){

	$id_item = $conn->lastInsertRowID();
	$conn->exec("INSERT INTO movimentacoes (id_item, nome_item, transacao, deposito, quantidade, descricao) VALUES 
			   							   ('$id_item', '$nome', 'ENTRADA', '$deposito', '$quantidade', '$descricao')");
	$conn->close();	
	echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../pages/estoque/item.php\"></head>";

} else {
	$conn->close();	
	$conn->lastErrorMsg();
}


?>