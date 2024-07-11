<?php
    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"]) and !empty($_POST["descripcion"])) {
            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $cantidad = $_POST["cantidad"];
            $descripcion = $_POST["descripcion"];

            $sql=$conexion->query("insert into producto(nombre,precio,cantidad,descripcion) values('$nombre',$precio,$cantidad,'$descripcion');");
            if($sql==1){
                echo '<div class="alert alert-success">Producto registrado correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">Error al registrar producto</div>';
            }
        }else {
            echo '<div class="alert alert-warning">Alguno de los campose esta vacio</div>';
        }
    }
?>