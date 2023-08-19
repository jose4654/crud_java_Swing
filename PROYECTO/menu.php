<?php
require_once('funciones/funciones_menu.php');
require_once('funciones/funcion_paginado.php');
require_once('conf/confi.php');
try{
    $conexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
}catch(PDOException $e){
    header('Location: 404 Page/error.php');
}
$categoria = $_GET['categoria'] ?? null;
$lista_menu = getMenu($categoria);
$categorias = getCategoriasMenu();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Ejercicio foreach </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text text-center"> Menú </h1>
        <form action="menu.php" method="get" class="mb-5">
            <div class="mb-3">
                <label for="categoria" class="form-label"> seleccione un juego </label>

                <select name="categoria" id="categoria" class="form-control">
                    <option value=""> Seleccione un juego </option>
                    <?php foreach($categorias as $c): ?>
                        <option <?php if($c == $categoria): ?> selected <?php endif ?> value="<?php echo $c ?>"> <?php echo $c ?> </option>
                    <?php endforeach ?>
                </select>

            </div>
            
            <button type="submit" class="btn btn-primary"> Filtrar </button>
            <a class="btn btn-danger" href="menu.php"> Limpiar </a>
            <a class="btn btn-danger" href="index.php"> volver </a>

        </form>
        <table class="table table-primary table-hover">
            <thead class="table-dark">
                <tr>                    
                    <th> juegos </th>
                    <th> Nombre </th>
                    <th> año lanzamiento </th>
                    <th> numero serie </th>
                    <th> Precio </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_menu as $item): ?>
                    <tr>
                        <td>
                            <img src="img/coleccion/<?php echo $item['categoria'] ?>.png" alt="">
                            <?php echo $item['categoria'] ?>
                        </td>
                        <td>
                            <?php echo $item['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $item['año_lanzamiento'] ?>
                           
                        </td>
                        <td>
                            <?php echo $item[ 'num_serie'] ?>
                           
                        </td>
                        <td>
                            <?php if ($item['descuento'] > 0): ?>
                                <span class="text text-success"> $<?php echo number_format( ($item['precio'] - $item['descuento']), 2, ',', '.' ) ?> </span>
                                <span class="text-decoration-line-through"> $<?php echo number_format($item['precio'], 2, ',', '.') ?> </span>
                            <?php else: ?>
                                <span> $<?php echo number_format($item['precio'], 2, ',', '.') ?> </span>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
</body>

</html>