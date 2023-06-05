<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
    
    <title>LOGIN</title>
    <link rel="stylesheet" href="/src/styles/style.css">
</head>
<body>
    <div class="background">
        <div class="container">
            <form method ="POST" action="../controllers/login_valid.php">
                <h2>LOGIN</h2>
                <input type="text" placeholder="Usuario" id="username" name="username" required>
                <input type="password" placeholder="Senha" id="password" name="password" required>
                <button type="submit">Entrar</button>
                <a href="http://localhost:8100/src/pages/Cadastro.php">Cadastrar</a>
            </form>
        </div>
    </div>
</body>
</html>