<?php

    $id_producto = $_GET['id_producto'];
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencia = $_GET['existencia'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE PRODUCTO SET PRODUCTO='$producto', PRECIO='$precio', EXISTENCIA='$existencia' WHERE ID_PRODUCTO='$id_producto';");
    header("Location: ../index.php");

?>