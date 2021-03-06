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

    #navIcon {
        width: 50px;
        height: 50px;
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
        <h4 style="color: white; margin-top: 20px;">Cadastro de produtos</h4>
        <form action="_inserir_produto.php" method="POST">
            <div class="mb-3">
                <label class="form-label" style="color: white;margin-top: 20px;">N??mero do produto</label>
                <input type="number" class="form-control" placeholder="Insira o id do n??mero do produto"
                    name="nroproduto" required>
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: white; margin-top: 20px;">Nome do produto</label>
                <input type="text" class="form-control" placeholder="Insira o nome do produto" name="nomeproduto"
                    required>
            </div>

            <div class="form-group">
                <label style="color: white; margin-top: 20px;">Categoria</label>
                <select class="form-select" name="categoria" required>

                    <option value="1">Perif??ricos</option>
                    <option value="2">Hardware</option>
                    <option value="3">Software</option>
                    <option value="4">Celulares</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" style="color: white; margin-top: 20px;">Quantidade do produto</label>
                <input type="number" class="form-control" placeholder="Insira a quantidade do produto" name="quantidade"
                    required>
            </div>


            <div class="form-group">
                <label style="color: white; margin-top: 20px;">Fornecedor</label>
                <select class="form-select" name="fornecedor" required>

                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary" id="btnCad">Cadastrar</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>