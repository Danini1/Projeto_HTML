<?php
    require "../../php/conexao.php";
    require_once "../models/Produto.php";

    $sql = "SELECT * FROM products";
    $query = mysqli_query($con, $sql);

    $produtos = [];

    while($produto = $query -> fetch_assoc()) {
        $produtos[] = new Produto(
            $produto["code"],
            $produto["name"],
            $produto["description"],
            $produto["initial_amount"],
            $produto["currenty_amount"],
            $produto["supplier_code"],
            $produto["buy_price"],
            $produto["sell_price"]
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/global.css">
    <link rel="stylesheet" href="/src/styles/menu_produtos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400@500@700&display=swap" rel="stylesheet">

    <title>Lista de Produtos</title>
</head>
<body>
    <header>
        <h1>Welcome, Admnistrator.</h1>
        <div>
            <button><a href="http://localhost:8100/src/pages/ListaFornecedores.php">Fornecedores</a></button>
            <button><a href="http://localhost:8100/src/pages/ListaProdutos.php" class="selected">Produtos</a></button>
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
            if(count($produtos) == 0) {
        ?>
            <div>
                <img src="/assets/imagem.png" alt="">
                <h1>Sem Produtos cadastrados</h1>
            </div>
        <?php } ?>
        
        <?php
            if(count($produtos) > 0) {
        ?>
            <h1>Lista de Produtos</h1>
            <div class="products-list">
                <?php
                    foreach($produtos as $item) {
                ?>
                    <div class="product">
                        <header>
                            <div class="info">
                                <h1><?=$item -> getNome()?></h1>
                                <span><strong>Código:</strong> <?=$item -> getCodigo()?></span>
                            </div>

                            <div class="icons">
                                <a href="http://localhost:8100/src/pages/FormularioProdutos.php?code=<?= $item -> getCodigo() ?>">
                                    <img src="/assets/icons/edit.svg" alt="Edit product">
                                </a>

                                <button>
                                    <a href="http://localhost:8100/src/pages/RemoverFormulario.php">
                                        <img src="/assets/icons/delete.svg" alt="Delete product">
                                    </a>
                                </button>
                            </div>
                        </header>

                        <p class="description"><?=$item -> getDescricao()?></p>

                        <div>
                            <strong>Fornecedor:</strong>
                            <span><?=$item -> getFornecedor()?></span>
                        </div>

                        <div>
                            <div>
                                <strong>Estoque inicial: </strong>
                                <span><?=$item -> getEstoqueAtual()?></span>
                            </div>

                            <div>
                                <strong>Estoque autal: </strong>
                                <span><?=$item -> getEstoqueAtual()?></span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <strong>Preço de venda: </strong>
                                <span><?=$item -> getPrecoVenda()?></span>
                            </div>

                            <div>
                                <strong>Preço de compra:</strong>
                                <span><?=$item -> getPrecoCompra()?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </main>
</body>
</html>