<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial do Site</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
</head>
<body>
    <nav class="navbar bg-drak navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Aula PW 2 </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Página Inicial</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="variavel.php">Variavel</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="while.php">While</a></li>
                <li><a class="dropdown-item" href="for.php">For</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="foreach.php">foreach</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="bootstrap.php">Bootstrap</a>
            </li>
            <li class="nav-item">
            <a class="nav-link">Disabled</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    
    <div class="container">
        <h1>Aula Bootstrap 09-08-24</h1>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-success" role="alert">Cadastrado com Sucesso!</div>
            </div>
        </div>

        <table  class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
        </table>
        <form>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control">
                <div class="form-text">Digite um email para acessar o sistema.</div>
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input">
                <label for="exampleCheck1">Deseja Receber SMS enchendo seu saco com promoções.</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>
        <a href="www.google.com" class="btn btn-primary">Acesso o Google aqui.</a>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>