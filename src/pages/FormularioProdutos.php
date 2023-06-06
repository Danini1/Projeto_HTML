<?php
    require "../../php/conexao.php";
    require_once '../models/Produto.php';

    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        $sql = "SELECT * FROM products WHERE code = '$code'";
        $query = mysqli_query($con, $sql);

        if ($query -> num_rows > 0) {
            $produtoDb = $query -> fetch_assoc();
            $produto = new Produto(
                $produtoDb["code"],
                $produtoDb["name"],
                $produtoDb["description"],
                $produtoDb["initial_amount"],
                $produtoDb["currenty_amount"],
                $produtoDb["supplier_code"],
                $produtoDb["buy_price"],
                $produtoDb["sell_price"]
            );
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/global.css">
    <link rel="stylesheet" href="/src/styles/cadastro.css">
    <title><?=isset($produto) ? "Atualizar Produto" : "Cadastrar Produto"?></title>
</head>
<body>
    <header>
        <h1>Welcome, Admnistrator.</h1>
        <div>
            <button><a href="./ListaFornecedores.php">Fornecedores</a></button>
            <button><a href="./ListaProdutos.php">Produtos</a></button>
            <div class="menu">
                <button class="selected"><?=isset($fornecedor) ? "Atualizar" : "Cadastrar"?></button>
                <div class="itens">
                    <button><a href="./FormularioProdutos.php" class="selected">Produto</a></button>
                    <button><a href="./FormularioFornecedores.php">Fornecedor</a></button>
                </div>
            </div>
            <button><a href="../../index.php">Sair</a></button>
        </div>
    </header>
    <main>
        <div>
            <h1><?=isset($produto) ? "Atualizar Produto" : "Cadastrar Produto"?></h1>
            <form method = "POST" action="../controllers/register-products.php">
                <div>
                    <div>
                        <input 
                            type="number"
                            placeholder="Código do produto"
                            value="<?=isset($produto) ? $produto -> getCodigo() : ""?>"
                            name="product-code"
                            required
                        >
                        <input 
                            type="text"
                            placeholder="Descrição do produto"
                            value="<?=isset($produto) ? $produto -> getDescricao() : ""?>"
                            name="product-description"
                            required
                        >
                        <input 
                            type="text"
                            placeholder="Estoque inicial"
                            value="<?=isset($produto) ? $produto -> getEstoqueInicial() : ""?>"
                            name="product-initial-amount"
                            required
                        >
                        <input 
                            type="number"
                            placeholder="Preço de venda do produto"
                            value="<?=isset($produto) ? $produto -> getPrecoVenda() : ""?>"
                            name="product-sell-price"
                            required
                        >
                    </div>
                    <div>
                        <input 
                            type="text"
                            placeholder="Nome Produto"
                            value="<?=isset($produto) ? $produto -> getNome() : ""?>"
                            name="product-name"
                            required
                        >
                        <input 
                            type="number"
                            placeholder="Estoque atual"
                            value="<?=isset($produto) ? $produto -> getEstoqueAtual() : ""?>"
                            name="product-currenty-amount"
                            required
                        >
                        <input 
                            type="text"
                            placeholder="Fornecedor"
                            value="<?=isset($produto) ? $produto -> getFornecedor() : ""?>"
                            name="product-supplier-code"
                            required
                        >
                        <input 
                            type="number"
                            placeholder="Preço de compra do produto"
                            value="<?=isset($produto) ? $produto -> getPrecoCompra() : ""?>"
                            name="product-buy-price"
                            required
                        >
                    </div>
                </div>
                <button type="submit"><?=isset($produto) ? "Atualizar" : "Cadastrar"?></button>
            </form>
        </div>
    </main>
</body>
</html>