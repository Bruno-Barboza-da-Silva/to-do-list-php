<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
<div class="body">
<div class="container">
    <h1>Crie sua conta</h1>
    <form action="../../funcionalidades/insertuser.php" method="POST">
        <div>
            <label>E-mail</label>
            <input type="text" name="email" id="email">
            </div>
            <div>
            <label>Senha</label>
            <input type="password" name="senha" id="senha">
            </div>
            <button id="cadastro" type="submit">Cadastrar</button>
    </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</body>
</html>