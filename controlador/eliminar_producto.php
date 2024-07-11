<?php
    include "modelo/conexion.php";
    if(!empty($_GET["id"])){
        $id= $_GET["id"];
        $sql= $conexion->query(" delete from producto where id_producto = $id ;");
        
        if($sql==1){
            echo '<div class="alert alert-success">Producto eliminado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar producto</div>';
        }
    }
?>