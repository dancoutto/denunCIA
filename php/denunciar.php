<?php
$senha = $_POST["senha"];
$status = $_POST['status'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$referencia = $_POST['referencia'];
$descricao = $_POST['descricao'];
$anexo = $_POST['anexo'];

$conn = new mysqli("localhost", "root", "", "denuncia");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `denuncia`(`senha`,  `status`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `referencia`,
`descricao`, `anexo`) VALUES ('$senha', '$status', '$cep', '$logradouro','$numero','$complemento','$bairro','$referencia',
  '$descricao', '$anexo')";

if ($conn->query($sql) === TRUE) {
  $consulta = mysqli_query($conn, "SELECT * FROM `denuncia` WHERE `senha` = '$senha'");
  $numLinhas = mysqli_num_rows($consulta);

  while ($line = mysqli_fetch_array($consulta)) {
    $id_denuncia = $line['id_denuncia'];
    $senha = $line['senha'];
  }
} else {
  echo "Erro: " . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="icon" type="image/x-icon" href="../img/joinha.png">
  <title>denunCIA efetuada!</title>
</head>

<body class="container">
<header id="header"></header>
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
      <img src="../img/joinha.png">
      <h2> Parabéns! Essas são as credenciais da sua denunCIA, guarde isso! ;) </h2>
      <label class="label"> Protocolo: <?php echo "$id_denuncia"; ?> </label><br>
      <label class="label"> Senha: <?php echo "$senha"; ?> </label>
    </div>
  </main>
  
</body>
