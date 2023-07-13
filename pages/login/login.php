
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

<div class="body">
<div class="container">
    <h1>Acesse sua conta</h1>
    <form action="../../funcionalidades/loginusuario.php" method="POST">
        <div>
            <label>E-mail</label>
            <input type="text" name="email">
            </div>

            <div>
            <label>Senha</label>
            <input type="password" name="senha">

            </div>
            <button type="submit" id="login">Entrar</button>
    </form>
    </div>
    </div>

</body>
</html>