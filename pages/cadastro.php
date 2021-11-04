<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário | Controle de Estoque</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
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
              <a class="nav-link" href="../index.php">Fazer Login</a>
            </li>  
          </ul>
        </div>  
    </nav>
    <br><br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome" class="form-control"><br>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="********"><br>
                </div>
                <div class="col-12">
                    <label for="empresa" class="form-label">Empresa</label>
                    <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Insira o nome da empresa"><br>
                </div>
                <div class="col-12">
                    <label for="cargo" class="form-label">Cargo</label>
                    <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Insira o seu cargo na empresa"><br><br>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"> Cadastrar </button>                    
                </div>
            </form>            
        </div>
    </div>

</body>
</html>