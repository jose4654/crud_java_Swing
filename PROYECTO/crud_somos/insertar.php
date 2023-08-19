<?php
include("../conexiones/conexion.php");
$con = conectar();

$errores = array(); // Array para almacenar los mensajes de error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $codigo = $_POST['codigo'];
    $dni = $_POST['dni'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    // Validar los campos

    // Validar el código
    if (empty($codigo)) {
        $errores[] = "El código es requerido";
    } elseif ($codigo == 0) {
        $errores[] = "El código no puede ser 0";
    } elseif (strlen($codigo) < 2) {
        $errores[] = "El código debe tener al menos 5 caracteres";
    }

    // Validar el DNI
    if (empty($dni)) {
        $errores[] = "El DNI es requerido";
    }

    // Validar que el DNI no esté duplicado
    $sql_verificar_dni = "SELECT * FROM lista WHERE dni = '$dni'";
    $query_verificar_dni = mysqli_query($con, $sql_verificar_dni);
    if (mysqli_num_rows($query_verificar_dni) > 0) {
        $errores[] = "Ya existe un registro con el mismo DNI";
    }

    // Validar los nombres
    if (empty($nombres)) {
        $errores[] = "Los nombres son requeridos";
    } elseif (is_numeric($nombres)) {
        $errores[] = "Los nombres no pueden ser numéricos";
    }

    // Validar los apellidos
    if (empty($apellidos)) {
        $errores[] = "Los apellidos son requeridos";
    } elseif (is_numeric($apellidos)) {
        $errores[] = "Los apellidos no pueden ser numéricos";
    } else {
        // Validar que los apellidos no estén duplicados
        $sql_verificar_apellidos = "SELECT * FROM lista WHERE apellidos = '$apellidos'";
        $query_verificar_apellidos = mysqli_query($con, $sql_verificar_apellidos);
        if (mysqli_num_rows($query_verificar_apellidos) > 0) {
            $errores[] = "Ya existe un registro con los mismos apellidos";
        }
    }

    // Verificar si hay errores de validación
    if (empty($errores)) {
        // No hay errores ni registros duplicados, realizar la inserción en la base de datos
        $sql = "INSERT INTO lista VALUES('$codigo','$dni','$nombres','$apellidos')";
        $query = mysqli_query($con, $sql);

        if ($query) {
            header("Location: ../somos.php");
        } else {
            $errores[] = "Ocurrió un error al insertar en la base de datos";
        }
    }
}
?>

<!-- Mostrar los mensajes de error o éxito -->
<?php if (!empty($errores)) : ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errores as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (isset($mensaje)) : ?>
    <div class="alert alert-success"><?php echo $mensaje; ?></div>
<?php endif; ?>

<!-- Aquí continúa el resto del código HTML -->
