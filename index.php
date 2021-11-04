<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Controle de Estoque</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark shadow">
        <a class="navbar-brand" href="#">Estoque</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Políticas</a>
            </li>    
          </ul>
        </div>  
    </nav>
    <br><br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <article class="card-body">
                    <a href="pages/cadastro.php" class="float-right btn btn-outline-primary">Registrar</a>
                    <h4 class="card-title mb-4 mt-1">Entrar</h4>
                        <form>
                            <div class="form-group">
                                <label>Seu email</label>
                                <input name="" class="form-control" placeholder="Email" type="email">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <a class="float-right" href="#">Esqueceu?</a>
                                <label>Sua senha</label>
                                <input class="form-control" placeholder="******" type="password">
                            </div> <!-- form-group// --> 
                            <div class="form-group"> 
                            <div class="checkbox">
                            <label> <input type="checkbox"> Salvar senha </label>
                            </div> <!-- checkbox .// -->
                            </div> <!-- form-group// -->  
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                            </div> <!-- form-group// -->                                                           
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>