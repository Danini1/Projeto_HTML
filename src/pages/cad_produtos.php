<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/global.css">
    <link rel="stylesheet" href="/src/styles/cadastro.css">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <header>
        <h1>Welcome, Admnistrator.</h1>
        <div>
            <div class="menu">
                <button>Cadastrar</button>
                <div class="itens">
                    <button><a href="http://localhost:8100/src/pages/cad_produtos.php">Produto</a></button>
                    <button><a href="http://localhost:8100/src/pages/cad_fornecedores.php">Fornecedor</a></button>
                </div>
            </div>
            <button>Produtos</button>
            <button>Fornecedores</button>
            <button><a href="http://localhost:8100/src/pages/main_screen.php">Menu</a></button>
            <button><a href="http://localhost:8100/src/pages/index.php">Sair</a></button>
        </div>
    </header>
    <main>
        <div>
            <h1>Cadastrar Produto</h1>
            <form action="http://localhost:8100/src/pages/main_screen.php">
                <div>
                    <div>
                        <input type="number" placeholder="Código do produto">
                        <input type="text" placeholder="Descrição do produto">
                        <input type="text" placeholder="Estoque inicial">
                        <input type="number" placeholder="Preço de venda do produto">
                    </div>
                    <div>
                        <input type="text" placeholder="Nome Produto">
                        <input type="number" placeholder="Estoque atual">
                        <input type="text" placeholder="Fornecedor">
                        <input type="number" placeholder="Preço de compra do produto">
                    </div>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>