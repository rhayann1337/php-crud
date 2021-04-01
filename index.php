<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projeto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style type="text/css">
    #tamanhoContainer {
        margin-top: 50px;
        width: 500px;
    }

    #btnCad {
        text-align: right;
        margin-top: 20px;
    }

    #textHome {
        margin-top: 10px;
    }

    #navIcon {
        width: 50px;
        height: 50px;
    }

    #imgHome {
        width: 500px;
        height: 500px;
    }
    </style>

</head>

<body style="background: url(bg.jpg); background-repeat: no-repeat;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="https://www.php.net/images/logos/new-php-logo.svg" id="navIcon" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/projeto/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="listar_produtos.php">Listar produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cadastrar_produto.php">Cadastrar
                            produtos</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container" id="tamanhoContainer">
        <center>
            <img id="imgHome" src="https://www.php.net/images/logos/new-php-logo.svg" />
            <div id="textHome">
                <h4 style="color: white; border-style: groove;">Crud em php para cadastro de
                    produtos</h4>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Listar produtos</h5>
                                <p class="card-text">Página de listagem de produtos.</p>
                                <a href="listar_produtos.php" class="btn btn-primary">Listar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastrar produtos</h5>
                                <p class="card-text">Página de cadastrar produtos.</p>
                                <a href="cadastrar_produto.php" class="btn btn-primary">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>