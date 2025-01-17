<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/telaDenuncia.css">
    <title>denunCIA - Denuncia</title>
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
        <form method="post" action="denunciar.php">
            <div class="widget">
                <a href="index.html"><button type="button" class="button"><img src="../img/home.png"
                            class="imgHome" /></button></a>
                <h1 class="h1">DenunCIA</h1>
                <label class="label">Preencha com o seu relato do flagrante, relaxa... É anônimo, eu te
                    garanto.</label><br>
                <input type="text" class="inputDenuncia" id="cep" name="cep" placeholder="CEP" value="" required><br>
                <input type="text" class="inputDenuncia" id="logradouro" name="logradouro" placeholder="Logradouro"
                    value="" required><br>
                <input type="text" class="inputDenuncia" id="numero" name="numero" placeholder="Número" value=""
                    required><br>
                <input type="text" class="inputDenuncia" id="complemento" name="complemento" placeholder="Complemento"
                    value=""><br>
                <input type="text" class="inputDenuncia" id="bairro" name="bairro" placeholder="Bairro" value=""
                    required><br>
                <input type="text" class="inputDenuncia" id="referencia" name="referencia" placeholder="Referência"
                    value=""><br>
                <input type="text" class="descricao" id="descricao" name="descricao" placeholder="Descrição" required><br>

                <input type="file" class="file" name="anexo" id="anexo" multiple style="display: none">
                <label for='anexo'><img src="../img/botao-anexo.png" class="imgFile"/></label>

                <input type="text" id="senha" name="senha" style="display: none">
                <input type="text" id="status" name="status" class="status" value="Aberto" style="display: none">

                <a href="index.html"><button type="button" class="button"> Cancelar </button></a>
                <input type="submit" onclick="geraSenha()" class="button" value="Enviar">
            </div>
        </form>
    </main>
    <script src="../js/script.js"></script>
</body>

</html>