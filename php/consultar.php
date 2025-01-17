<?php
$pesquisa = $_POST["pesquisa"];
$senha = $_POST["senha"];

$conn = new mysqli("localhost", "root", "", "denuncia");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['pesquisa'])) {
  $pesquisa = $_POST['pesquisa'];
}
error_reporting(0);

$consulta = mysqli_query($conn, "SELECT * FROM `denuncia` WHERE `id_denuncia` = '$pesquisa' AND senha = '$senha'");
$numLinhas = mysqli_num_rows($consulta);
error_reporting(0);

while ($line = mysqli_fetch_array($consulta)) {
  $id_denuncia = $line['id_denuncia'];
  $senha = $line['senha'];
  $status = $line['status'];
  $cep = $line['cep'];
  $logradouro = $line['logradouro'];
  $numero = $line['numero'];
  $complemento = $line['complemento'];
  $bairro = $line['bairro'];
  $referencia = $line['referencia'];
  $descricao = $line['descricao'];
  $edicao1 = $line['edicao1'];
  $edicao2 = $line['edicao2'];
  $edicao3 = $line['edicao3'];
  $edicao4 = $line['edicao4'];
  $edicao5 = $line['edicao5'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="../img/relatorio-icon.png">
  <link rel="stylesheet" href="../css/index.css"/>
  <title>denunCIA - Resultado da consulta</title>
</head>

<body>
  <form method="post" action="atualizacao.php">

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
          <a href="index.html"><button type="button" class="button"><img src="../img/home.png"
                class="imgHome" /></button></a>
          <h2>Protocolo <?php echo "$id_denuncia"; ?> </h2>
          <h4>Status: <?php echo "$status"; ?></h4>

          <label class="label"><?php echo "$edicao5"; ?></label>
          <label class="label"><?php echo "$edicao4"; ?></label>
          <label class="label"><?php echo "$edicao3"; ?></label>
          <label class="label"><?php echo "$edicao2"; ?></label><br>
          <label class="label"><?php echo "$edicao1"; ?></label><br>

          <label class="label"><?php echo "$logradouro"; ?>, <?php echo "$numero"; ?>, <?php echo "$complemento"; ?>,
            <?php echo "$bairro"; ?> <?php echo "$referencia"; ?></label><br>
          <label class="label"> Relatado: <?php echo "$descricao"; ?> </label><br>

          <button type="button" id="atualizarVisual">Inserir informações</button>
          <div id="atualizaçaoForm" style="display: none;">
            <input type="text" name="id_denuncia" value="<?php echo "$id_denuncia"; ?>" style="display: none">
            <input type="text" id="atualizacao" name="atualizacao"
              placeholder="Insira a nova informação do protocolo...">
            <button id="atualizar">Inserir informações</button>
          </div>

  </form>

  <script src="../js/script.js"></script>
  </div>
  </main>
</body>