<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha | Controle de Estoque</title>
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
        <form>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <label for="email" class="form-label">Insira seu Email!</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Seu Email ..."><br>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary form-control"> Recuperar Senha </button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>