<?php
    require "../../php/conexao.php";
    require_once "../models/Fornecedor.php";

    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        $sql = "SELECT * FROM suppliers WHERE code = '$code'";
        $query = mysqli_query($con, $sql);

        if ($query -> num_rows > 0) {
            $fornecedorDb = $query -> fetch_assoc();
            $fornecedor = new Fornecedor(
                $fornecedorDb["code"],
                $fornecedorDb["name"],
                $fornecedorDb["cnpj"],
                $fornecedorDb["phone"],
                $fornecedorDb["email"],
                $fornecedorDb["address"]
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
    
    <title><?=isset($fornecedor) ? "Atualizar Fornecedor" : "Cadastrar Fornecedor"?></title>
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
                    <button><a href="./FormularioProdutos.php">Produto</a></button>
                    <button><a href="./CadastroFornecedores.php" class="selected">Fornecedor</a></button>
                </div>
            </div>
            <button><a href="../../index.php">Sair</a></button>
        </div>
    </header>
    <main>
        <div>
            <h1><?=isset($fornecedor) ? "Atualizar Fornecedor" : "Cadastrar Fornecedor"?></h1>
            <form method= "POST" action="../controllers/register-suppliers.php">
                <div>
                    <div>
                        <input 
                            type="number" 
                            placeholder="Código do fornecedor"
                            value="<?=isset($fornecedor) ? $fornecedor -> getCodigo() : ""?>"
                            name="supplier-code"
                            required
                        >
                        <input
                            type="text"
                            placeholder="Nome do fornecedor"
                            value="<?=isset($fornecedor) ? $fornecedor -> getNome() : ""?>"
                            name="supplier-name"
                            required
                        >
                        <input 
                            type="number" 
                            placeholder="CNPJ do fornecedor"
                            value="<?=isset($fornecedor) ? $fornecedor -> getCnpj() : ""?>"
                            name="supplier-cnpj"
                            required
                        >
                    </div>
                    <div>
                        <input 
                            type="number" 
                            placeholder="Telefone do fornecedor"
                            value="<?=isset($fornecedor) ? $fornecedor -> getTelefone() : ""?>"
                            name="supplier-phone"
                            required
                        >
                        <input 
                            type="email" 
                            placeholder="E-mail do fornecedor"
                            value="<?=isset($fornecedor) ? $fornecedor -> getEmail() : ""?>"
                            name="supplier-email"
                            required
                        >
                        <input 
                            type="text" 
                            placeholder="Endereço do fornecedor"
                            value="<?=isset($fornecedor) ? $fornecedor -> getEndereco() : ""?>"
                            name="supplier-address"
                            required
                        >
                    </div>
                </div>
                <button type="submit"><?=isset($fornecedor) ? "Atualizar" : "Cadastrar"?></button>
            </form>
        </div>
    </main>
</body>
</html>