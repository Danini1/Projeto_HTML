<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/global.css">
    <link rel="stylesheet" href="/src/styles/cadastro.css">
    <title>Cadastrar Fornecedores</title>
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
            <h1>Cadastrar Fornecedor</h1>
            <form action="http://localhost:8100/src/pages/main_screen.php">
                <div>
                    <div>
                        <input type="number" placeholder="Código do fornecedor">
                        <input type="text" placeholder="Nome do fornecedor">
                        <input type="number" placeholder="CNPJ do fornecedor">
                    </div>
                    <div>
                        <input type="number" placeholder="Telefone do fornecedor">
                        <input type="email" placeholder="E-mail do fornecedor">
                        <input type="text" placeholder="Endereço do fornecedor">
                    </div>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>