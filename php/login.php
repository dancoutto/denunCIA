<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/login.css">
    <title>denunCIA - Login</title>
</head>

<body class="container">
    <main class="main">
        <form method="post" action="areaRestrita.php">
            <div class="widget">
                <form method="post" action="consultar.php">
                    <a href="index.html"><button type="button" class="button"><img src="../img/home.png" class="imgHome"/></button></a>
                    <input type="text" class="input" id="usuario" name="usuario" placeholder="Usuário..." required />
                    <input type="password" class="input" id="senha" name="senha" placeholder="Senha..." required><br>
                    <input type="submit" class="button" value="Login">
                </form>
            </div>
    </main>
</body>

</html>