<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/index.css">
    <title>denunCIA - Consulta</title>
</head>

<body class="container">

    <header class="header-outer">
        <div class="header-inner responsive-wrapper">

            <div class="header-logo">
                <a href="index.html"><img src="../img/logo-dupla.png" /></a>
            </div>

            <nav class="header-navigation">
                <a href="telaDenuncia.php">Faça sua denunCIA</a>
                <a href="telaConsulta.php">Acompanhe sua denunCIA</a>
                <a href="login.php"><img src="../img/login-icon.png" class="imgLogin"></a>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="widget">
            <form method="post" action="consultar.php">
                <a href="index.html"><button type="button" class="button"><img src="../img/home.png"
                            class="imgHome" /></button></a>
                <h1 class="h1">Consulta</h1>
                <label class="label">Preencha os campos abaixo para consultar as informações da sua
                    denúncia.</label><br>
                <div>
                    <input type="text" class="input" id="pesquisa" name="pesquisa" placeholder="Informe o número do protocolo..." required/>
                </div>
                <div>
                    <input type="password" class="input" id="senha" name="senha" placeholder="Informe a senha..." required>
                </div> <br>
                <input type="submit" id="clickBtnConsultar" class="button" value="Consultar"><br><br>
            </form>
        </div>
    </main>
</body>

</html>