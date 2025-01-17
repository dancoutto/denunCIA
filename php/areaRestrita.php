<?php
$usuario = "admin";
$senha = "admin";

if ($usuario != "admin" && $senha != "admin") {
    echo "";
} else {

}
?>

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
        <div class="widget">
            <h1 class="h1">Área Restrita</h1>
            <a href="index.html"><button type="button" class="button"><img src="../img/home.png" class="imgHome"/></button></a><br><br>
            <a href="alteraStatus.html"><button type="button" class="button">Alterar Status</button></a><br><br>
            <a href="adicionaInformacoes.html"><button type="button" class="button">Adicionar informações</button></a><br><br>
            <a href="excluirProtocolo.html"><button type="button" class="button">Excluir protocolo</button></a><br><br>


        </div>
    </main>
</body>

</html>