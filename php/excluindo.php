<?php
$pesquisa = $_POST["pesquisa"];

$conn = new mysqli("localhost", "root", "", "denuncia");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `denuncia` WHERE `id_denuncia` = '$pesquisa';";

if ($conn->query($sql) === TRUE) {

    if (mysqli_affected_rows($conn)) {  // se houver linhas afetadas, o dado foi excluído
        $consulta = mysqli_query($conn, "SELECT * FROM `denuncia` WHERE `id_denuncia` = '$pesquisa'");
        $numLinhas = mysqli_num_rows($consulta);

        while ($line = mysqli_fetch_array($consulta)) {
            $id_denuncia = $line['id_denuncia'];
            echo "Excluído";
        }

        header('Location: areaRestrita.php');
    } else {
        mysqli_close($conn);
        die("Erro ao tentar excluir registro");
    }
}
?>