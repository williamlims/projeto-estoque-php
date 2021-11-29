<?php 
session_start();
$conn = new SQLite3("../../data/estoque.db");

if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){

	$email = $senha = "";
	$email = $_SESSION["email"];
	$senha = $_SESSION["senha"];	


	$sql = "SELECT * FROM usuario where email='$email' AND senha='$senha' ";

	$ret = $conn->query($sql);

	$row = $ret->fetchArray(SQLITE3_ASSOC);

	$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard | Controle de Estoque</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="../../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../../assets/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		body {
			background-color: #eee;
		}

		.nav-link:hover {
			background-color: #525252 !important;
		}

		.nav-link .fa {
			transition:  all 1s;
		}

		.nav-link:hover .fa {
			transform:  rotate(360deg);
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark shadow">
		<a class="navbar-brand ml-5 px-3" href="#"> Estoque <i class="fa fa-angellist" aria-hidden="true"></i></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="../../scripts/logout.php" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row flex-nowrap">
			<div class="col-auto px-0">
				<div id="sidebar" class="collapse collapse-horizontal show border-end">
					<div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
						<ul class="nav nav-pills flex-column mb-auto">
							<li class="nav-item"><a href="index.php" class="nav-link text-white" aria-current="page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							<li><a href="dashboard.php" class="nav-link text-white active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a></li>
							<li><a href="deposito.php" class="nav-link text-white"><i class="fa fa-pencil-square" aria-hidden="true"></i> Cadastrar Depósito</a></li>
							<li><a href="item.php" class="nav-link text-white"><i class="fa fa-dropbox" aria-hidden="true"></i> Cadastrar Item</a></li>
							<li><a href="transferencia.php" class="nav-link text-white"><i class="fa fa-exchange" aria-hidden="true"></i> Transferência</a></li>
							<li><a href="itens.php" class="nav-link text-white"><i class="fa fa-list-alt" aria-hidden="true"></i> Itens</a></li>
							<li><a href="movimentacoes.php" class="nav-link text-white"><i class="fa fa-window-restore" aria-hidden="true"></i> Movimentações</a></li>
						</ul>
						<hr>
					</div>
				</div>
			</div>

			<main class="col ps-md-2 pt-2">
				<div class="row">
					<span class="p-1 w-100 mx-2 px-3 py-2 bg-light bg-gradient text-muted">Home / Dashboard</span>
					<div class="col w-100 mx-2 mt-2 text-muted">
						<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
						<?php 
							$connD = new SQLite3("../../data/estoque.db");
							$sql_custo = "SELECT SUM(custo) as soma FROM item ";
							$retD = $connD->query($sql_custo);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$custo = $row['soma'];

							$sql_preco = "SELECT SUM(preco_venda) as preco FROM item ";
							$retD = $connD->query($sql_preco);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$preco = $row['preco'];

							$sql_quant = "SELECT SUM(quantidade) as quanti FROM item ";
							$retD = $connD->query($sql_quant);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$quantid = $row['quanti'];

							$sql_trans = "SELECT COUNT(id) as total FROM movimentacoes ";
							$retD = $connD->query($sql_trans);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$trans = $row['total'];

							$sql_f1 = "SELECT nome_item, MAX(custo) as custo FROM item ";
							$retD = $connD->query($sql_f1);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$nome_f1 = $row['nome_item'];
							$custo_f1 = $row['custo'];

							$sql_f2 = "SELECT nome_item, MAX(custo) as custo FROM item where 
									   custo < (SELECT MAX(custo) FROM item) ";
							$retD = $connD->query($sql_f2);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$nome_f2 = $row['nome_item'];
							$custo_f2 = $row['custo'];

							$sql_f3 = "SELECT nome_item, MAX(custo) as custo FROM item where 
									   custo < (SELECT MAX(custo) FROM item where custo < (SELECT MAX(custo) FROM item)) ";
							$retD = $connD->query($sql_f3);
							$row = $retD->fetchArray(SQLITE3_ASSOC);
							$nome_f3 = $row['nome_item'];
							$custo_f3 = $row['custo'];

							$ttl = $custo_f1 + $custo_f2 + $custo_f3;
							if($custo_f1 > 0){
								$p1 = ($custo_f1 / $ttl) * 100;
							} else {
								$p1 = 0;
							}
							if($custo_f2 > 0){
								$p2 = ($custo_f2 / $ttl) * 100;
							} else {
								$p2 = 0;
							}
							if($custo_f3 > 0){
								$p3 = ($custo_f3 / $ttl) * 100;
							} else {
								$p3 = 0;
							}

							$connD->close();

						?>
						<br>
						<div class="row">
							<div class="col-xl-3 col-md-6 mb-4">
	                            <div class="card border-primary shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
	                                                Custo do Estoque
	                                            </div>
	                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$<?php  echo number_format($custo,2,",",".");?></div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fa fa-dollar fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="col-xl-3 col-md-6 mb-4">
	                            <div class="card border-success shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
	                                                Valor do Estoque
	                                            </div>
	                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$<?php  echo number_format($preco,2,",",".");?></div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fa fa-dollar fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="col-xl-3 col-md-6 mb-4">
	                            <div class="card border-info shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
	                                                Quantidade
	                                            </div>
	                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $quantid; ?></div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fa fa-list-ol fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="col-xl-3 col-md-6 mb-4">
	                            <div class="card border-warning shadow h-100 py-2">
	                                <div class="card-body">
	                                    <div class="row no-gutters align-items-center">
	                                        <div class="col mr-2">
	                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
	                                                Transferências
	                                            </div>
	                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $trans; ?></div>
	                                        </div>
	                                        <div class="col-auto">
	                                            <i class="fa fa-exchange fa-2x text-gray-300"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

						</div>
					</div>
				</div>

				<div class="row">
					<div class="mb-3 mx-2 col">
						<div class="card shadow mb-4">
	                        <div class="card-header py-3">
	                            <h6 class="m-0 font-weight-bold text-primary">Itens mais caros</h6>
	                        </div>
	                        <div class="card-body">
	                            <h4 class="small font-weight-bold"><?php echo $nome_f1;?> <span
	                                    class="float-right">R$<?php  echo number_format($custo_f1,2,",",".");?></span></h4>
	                            <div class="progress mb-4">
	                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $p1;?>%"
	                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
	                            </div>
	                            <h4 class="small font-weight-bold"><?php echo $nome_f2;?> <span
	                                    class="float-right">R$<?php  echo number_format($custo_f2,2,",",".");?></span></h4>
	                            <div class="progress mb-4">
	                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $p2;?>%"
	                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
	                            </div>
	                            <h4 class="small font-weight-bold"><?php echo $nome_f3;?> <span
	                                    class="float-right">R$<?php  echo number_format($custo_f3,2,",",".");?></span></h4>
	                            <div class="progress mb-4">
	                                <div class="progress-bar" role="progressbar" style="width: <?php echo $p3;?>%"
	                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
	                            </div>
	                        </div>
	                    </div>	
					</div>
				</div>

			</main>
		</div>
	</div>
</body>
</html>
<?php
} else {
	$conn->close();	
	echo "<script>alert('É preciso fazer o login!');</script>";
	echo "<head><meta http-equiv=\"refresh\" content=2;url=\"../../index.php\"></head>";
}
	
?>