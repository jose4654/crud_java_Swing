<?php
include("../conexiones/conexion.php");
$con = conectar();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $codigo = $_POST['codigo'];
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    exit;
} else {
    // Obtener el ID del registro a actualizar
    $codigo = $_GET['id'];

    // Obtener los datos del registro a partir del ID
    $sql = "SELECT * FROM lista WHERE codigo='$codigo'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);

    // Asignar los datos a las variables
    $dni = $row['dni'];
    $nombres = $row['nombres'];
    $apellidos = $row['apellidos'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Actualizar</title>
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
            <div class="mb-3">
                <input type="text" class="form-control" name="dni" placeholder="DNI" value="<?php echo $dni; ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nombres" placeholder="Nombres" value="<?php echo $nombres; ?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
