<?php
include("../conexiones/conexion.php");
$con = conectar();

$codigo = $_POST['codigo'];
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$errores = array(); // Array para almacenar los mensajes de error

// Validar los campos
if (empty($dni)) {
    $errores[] = "El campo DNI es requerido";
}
if (empty($nombres)) {
    $errores[] = "El campo Nombres es requerido";
}
if (empty($apellidos)) {
    $errores[] = "El campo Apellidos es requerido";
}

// Verificar si hay errores de validación
if (empty($errores)) {
    // Verificar si ya existe un registro con el mismo DNI
    $sql_verificar_dni = "SELECT * FROM lista WHERE dni = '$dni' AND codigo <> '$codigo'";
    $query_verificar_dni = mysqli_query($con, $sql_verificar_dni);

    if (mysqli_num_rows($query_verificar_dni) > 0) {
        $errores[] = "Ya existe un registro con el mismo DNI";
    } else {
        // Verificar si ya existe un registro con el mismo nombre y apellido
        $sql_verificar_nombre_apellido = "SELECT * FROM lista WHERE nombres = '$nombres' AND apellidos = '$apellidos' AND codigo <> '$codigo'";
        $query_verificar_nombre_apellido = mysqli_query($con, $sql_verificar_nombre_apellido);

        if (mysqli_num_rows($query_verificar_nombre_apellido) > 0) {
            $errores[] = "Ya existe un registro con el mismo nombre y apellido";
        } else {
            // No hay errores ni registros duplicados, realizar la actualización en la base de datos
            $sql = "UPDATE lista SET dni='$dni', nombres='$nombres', apellidos='$apellidos' WHERE codigo='$codigo'";
            $query = mysqli_query($con, $sql);

            if ($query) {
                // Actualización exitosa, redirigir a la página somos.php
                Header("Location: ../somos.php");
            } else {
                // Ocurrió un error al actualizar en la base de datos, mostrar mensaje de error
                echo "Error al actualizar en la base de datos";
            }
        }
    }
}

// Mostrar los mensajes de error
if (!empty($errores)) {
    foreach ($errores as $error) {
        echo $error . "<br>";
    }
}
?>




