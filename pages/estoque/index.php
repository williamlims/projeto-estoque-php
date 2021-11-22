<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estoque | Controle de Estoque</title>
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
					<a href="#" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
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
							<li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
							<li><a href="dashboard.php" class="nav-link text-white"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a></li>
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
					<span class="p-1 w-100 mx-2 px-3 py-2 bg-light bg-gradient text-muted">Home</span>
					<div class="col w-100 mx-2 mt-2">
						<br>
						<div class="row">
							<div class="col-4">
								<div class="card">
									<img src="../../assets/img/itens-estoque.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Itens no Estoque</h5>
										<p class="card-text">Verifique os itens cadastrados no estoque e controle os ativos com as ferramentas de controle de estoque.</p>
										<a href="itens.php" class="btn btn-primary">Listar Itens</a>
									</div>
								</div>
							</div>

							<div class="col-4">
								<div class="card">
									<img src="../../assets/img/movimento.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Movimentações</h5>
										<p class="card-text">Verifique as movimentações de itens no estoque e controle os ativos com as ferramentas de controle de estoque.</p>
										<a href="movimentacoes.php" class="btn btn-primary">Ver Movimento</a>
									</div>
								</div>
							</div>

							<div class="col-4">
								<div class="card">
									<img src="../../assets/img/itens-estoque.jpg" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Cadastrar Item</h5>
										<p class="card-text">Cadastre novos itens no estoque e controle os ativos com as ferramentas de controle de estoque.</p>
										<a href="item.php" class="btn btn-primary">Cadastrar Item</a>
									</div>
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