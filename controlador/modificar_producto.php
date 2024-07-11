<?php
    if(!empty($_POST["btnmodificar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"]) and !empty($_POST["descripcion"])) {
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $cantidad = $_POST["cantidad"];
            $descripcion = $_POST["descripcion"];

            $sql=$conexion->query("update producto set nombre='$nombre', precio=$precio, cantidad=$cantidad, descripcion ='$descripcion' where id_producto = $id ;");
            if($sql==1){
                header("location:index.php"); // redirigir al index
            }else{
                echo '<div class="alert alert-danger">Error al actualizar producto</div>';
            }

        }else{
            echo '<div class="alert alert-warning">Alguno de los campose esta vacio</div>';
        }
    }
?>