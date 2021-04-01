<DOCTYPE html>
    <html>

    <head>
        <title>Listagem de produtos</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style type="text/css">
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
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/projeto/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="listar_produtos.php">Listar
                                produtos</a>
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

        <div class="container" style="padding-top: 20px;">
            <center>
                <h3 style="color: white;">Lista de produtos</h3>
            </center>
            <table class="table table-striped" style="margin-top: 20px;">

                <thead>
                    <tr>
                        <th class="table-dark" scope="col">Id Produto</th>
                        <th class="table-dark" scope="col">Nome do produto</th>
                        <th class="table-dark" scope="col">Categoria</th>
                        <th class="table-dark" scope="col">Quantidade</th>
                        <th class="table-dark" scope="col">Fornecedor</th>
                        <th class="table-dark" scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'conexao.php';
                    $sql= "SELECT * FROM `estoque`";
                    $busca = mysqli_query($conexao, $sql);
                    
                    while($array = mysqli_fetch_array($busca)){
                        $id_estoque = $array['id_estoque'];
                        $nroproduto = $array['nroproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                        
                        
                        
                        ?>

                    <tr>
                        <td class="table-dark"><?php echo $nroproduto?></td>
                        <td class="table-dark"><?php echo $nomeproduto?></td>
                        <td class="table-dark"><?php echo $categoria?></td>
                        <td class="table-dark"><?php echo $quantidade?></td>
                        <td class="table-dark"><?php echo $fornecedor?></td>
                        <td class="table-dark"><a class="btn btn-warning"
                                href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg> Editar</a>
                            <a class="btn btn-danger" href="deletar_produto.php?id=<?php echo $id_estoque ?>"
                                role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg> Excluir</a>
                        </td>

                        <?php } ?>
                    </tr>
                </tbody>
            </table>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

    </body>

    </html>