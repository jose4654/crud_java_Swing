<?php
include("../conexiones/conexion.php");
$con = conectar();

$codigo = $_GET['id'];

$sql = "DELETE FROM lista WHERE codigo='$codigo'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: ../somos.php");
} else {
    echo "Error al eliminar el registro";
}
?>

