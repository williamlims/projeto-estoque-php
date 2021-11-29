<?php
require('conexao.php');

$conn = new Estoque();

$origem = $destino = $iditem = $quantidade = $transacao = $descricao = "";

$origem = $_POST["origem"];
$destino = $_POST["destino"];
$iditem = $_POST["iditem"];
$quantidade = $_POST["quantidade"];
$transacao = $_POST["transacao"];
$descri = $_POST["descricao"];

$ret = $conn->query("SELECT * FROM item where id='$iditem'");
$row = $ret->fetchArray(SQLITE3_ASSOC);

$nome_item = $row['nome_item'];
$custo = $row['custo'];
$preco_venda = $row['preco_venda'];
$unidade_medida = $row['unidade_medida'];
$descricao = $row['descricao'];

if($row['quantidade'] >= $quantidade){
	if($row['quantidade'] == $quantidade){
		$conn->query("UPDATE item SET id_deposito=$destino where id='$iditem' ");

		$conn->query("INSERT INTO movimentacoes (id_item, nome_item, transacao, deposito, quantidade, descricao) VALUES 
			   							   ('$iditem', '$nome_item', 'SAIDA', '$origem', '$quantidade', '$descricao')");

		$conn->query("INSERT INTO movimentacoes (id_item, nome_item, transacao, deposito, quantidade, descricao) VALUES 
			   							   ('$iditem', '$nome_item', 'ENTRADA', '$destino', '$quantidade', '$descricao')");
	} else {
		$saida = $row['quantidade'] -  $quantidade;
		$conn->query("UPDATE item SET quantidade=$saida where id='$iditem'");

		$conn->query("INSERT INTO item (id_deposito, nome_item, quantidade, custo, preco_venda, unidade_medida, descricao) VALUES 
				    				   ('$destino', '$nome_item', '$quantidade', '$custo', '$preco_venda', '$unidade_medida', '$descricao')");
		
		$conn->query("INSERT INTO movimentacoes (id_item, nome_item, transacao, deposito, quantidade, descricao) VALUES 
			   							   ('$iditem', '$nome_item', 'SAIDA', '$origem', '$quantidade', '$descricao')");

		$conn->query("INSERT INTO movimentacoes (id_item, nome_item, transacao, deposito, quantidade, descricao) VALUES 
			   							   ('$iditem', '$nome_item', 'ENTRADA', '$destino', '$quantidade', '$descricao')");
	}
	$conn->close();
	echo "<script>alert('Transferência efetuada com sucesso!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../pages/estoque/transferencia.php\"></head>";
} else {
	$conn->close();	
	echo "<script>alert('Quantidade a ser transferida é superior ao do estoque de origem!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../pages/estoque/transferencia.php\"></head>";
}




?>