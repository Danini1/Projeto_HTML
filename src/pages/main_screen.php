<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/styles/main_css.css">
    <link rel="stylesheet" href="/src/styles/global.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">

    <title>Main Screen</title>
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
            <img src="/assets/imagem.png" alt="">
            <p>Sem Produtos cadastrados</p>
        </div>
    </main>

</body>
</html>