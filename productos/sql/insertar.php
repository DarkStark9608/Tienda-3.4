<?php
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencia = $_GET['existencia'];

    $db = new SQLite3('../../tienda.db');

    $db->exec ("INSERT INTO PRODUCTO (PRODUCTO,PRECIO,EXISTENCIA) VALUES ('$producto', '$precio', '$existencia');");
    header("Location: ../index.php");
?>
