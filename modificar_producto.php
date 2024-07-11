<?php
    include "modelo/conexion.php";
    $id = $_GET["id"];
    $sql = $conexion->query("select * from producto where id_producto=$id ;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 mx-auto" method="POST">

        <h3 class="text-center text-secondary">MODIFICAR PRODUCTOS</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        
        <?php
            include "controlador/modificar_producto.php"; // para que aparezca aca el mensaje
            while($datos=$sql->fetch_object()) { ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio" value="<?= $datos->precio ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" value="<?= $datos->cantidad ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
                </div>
            <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar Producto</button>
    </form>
</body>
</html>