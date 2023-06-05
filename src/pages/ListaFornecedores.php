<?php
    require "../../php/conexao.php";
    require_once "../models/Fornecedor.php";

    $sql = "SELECT * FROM suppliers";
    $query = mysqli_query($con, $sql);

    $fornecedores = [];

    while($fornecedor = $query -> fetch_assoc()) {
        $fornecedores[] = new Fornecedor(
            $fornecedor["code"],
            $fornecedor["name"],
            $fornecedor["cnpj"],
            $fornecedor["phone"],
            $fornecedor["email"],
            $fornecedor["address"]
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/menu_fornecedores.css">
    <link rel="stylesheet" href="/src/styles/global.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400@500@700&display=swap" rel="stylesheet">

    <title>Lista de Fornecedores</title>
</head>
<body>
    <header>
        <h1>Welcome, Admnistrator.</h1>
        <div>
            <button><a href="http://localhost:8100/src/pages/ListaFornecedores.php" class="selected">Fornecedores</a></button>
            <button><a href="http://localhost:8100/src/pages/ListaProdutos.php">Produtos</a></button>
            <div class="menu">
                <button>Cadastrar</button>
                <div class="itens">
                    <button><a href="http://localhost:8100/src/pages/FormularioProdutos.php">Produto</a></button>
                    <button><a href="http://localhost:8100/src/pages/FormularioFornecedores.php">Fornecedor</a></button>
                </div>
            </div>
            <button><a href="http://localhost:8100/src/pages/index.php">Sair</a></button>
        </div>
    </header>
    <main>
        <?php 
            if(count($fornecedores) == 0) {
        ?>
            <div>
                <img src="/assets/imagem.png" alt="">
                <h1>Sem fornecedores cadastrados</h1>
            </div>
        <?php } ?>

        <?php
            if(count($fornecedores) > 0) {
        ?>
            <h1>Lista de Fornecedores</h1>
            <div class="suppliers-list">
                <?php
                    foreach($fornecedores as $item) {
                ?>
                <div class="supplier">
                    <header>
                        <div class="info">
                            <h1><?=$item -> getNome() ?></h1>
                            <span><strong>Código:</strong> <?=$item -> getCodigo() ?></span>
                        </div>

                        <div class="icons">
                        <a href="http://localhost:8100/src/pages/FormularioFornecedores.php?code=<?=$item -> getCodigo()?>">
                                <img src="/assets/icons/edit.svg" alt="Edit product">
                            </a>

                            <button>
                                <img src="/assets/icons/delete.svg" alt="Delete product">
                            </button>
                        </div>
                    </header>

                    <div>
                        <strong>Telefone:</strong>
                        <span><?=$item -> getTelefone() ?></span>
                    </div>

                    <div>
                        <div>
                            <strong>Email: </strong>
                            <span><?=$item -> getEmail() ?></span>
                        </div>

                        <div>
                            <strong>CNPJ: </strong>
                            <span><?=$item -> getCnpj() ?></span>
                        </div>
                    </div>
                    <div>
                        <div>
                            <strong>Endereço: </strong>
                            <span><?=$item -> getEndereco() ?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </main>
</body>
</html>