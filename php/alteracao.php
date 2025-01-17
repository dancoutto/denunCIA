<?php
$status = $_POST["status"];
$id_denuncia = $_POST["pesquisa"];

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

    $sql = "UPDATE `denuncia` SET `status` = '$status' WHERE `id_denuncia`= '$id_denuncia'";

    if ($conn->query($sql) === TRUE) {
        header('Location: areaRestrita.php');
    }
}
?>