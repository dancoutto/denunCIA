<?php
$atualizacao = $_POST["atualizacao"];
$id_denuncia = $_POST["id_denuncia"];

$conn = new mysqli("localhost", "root", "", "denuncia");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$consulta = mysqli_query($conn, "SELECT * FROM `denuncia` WHERE `id_denuncia` = '$id_denuncia'");
$numLinhas = mysqli_num_rows($consulta);
error_reporting(0);

while ($line = mysqli_fetch_array($consulta)) {
    $id_denuncia = $line['id_denuncia'];
    $edicao1 = $line['edicao1'];
    $edicao2 = $line['edicao2'];
    $edicao3 = $line['edicao3'];
    $edicao4 = $line['edicao4'];
    $edicao5 = $line['edicao5'];

    $sql = "UPDATE `denuncia` SET `edicao1` = '$atualizacao' WHERE `id_denuncia`= '$id_denuncia'";

    if (isset($edicao1)) {
        $sql = "UPDATE `denuncia` SET `edicao2` = '$atualizacao' WHERE `id_denuncia`= '$id_denuncia'";
    } if (isset($edicao2)) {
        $sql = "UPDATE `denuncia` SET `edicao3` = '$atualizacao' WHERE `id_denuncia`= '$id_denuncia'";
    } if (isset($edicao3)) {
        $sql = "UPDATE `denuncia` SET `edicao4` = '$atualizacao' WHERE `id_denuncia`= '$id_denuncia'";
    } if (isset($edicao4)) {
        $sql = "UPDATE `denuncia` SET `edicao5` = '$atualizacao' WHERE `id_denuncia`= '$id_denuncia'";
    } if (isset($edicao5)) {
        echo"Número máximo de comentários atingido.";
    }

    if ($conn->query($sql) === TRUE) {
        header('Location: index.html');
    }
}
?>