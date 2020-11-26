<?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * FROM PRODUCTO WHERE ID_PRODUCTO='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        
        $id_PRODUCTO = $row['ID_PRODUCTO'];
        $PRODUCTO = $row['PRODUCTO'];
        $PRECIO = $row['PRECIO'];
        $EXISTENCIA = $row['EXISTENCIA']; 
    }

    $form = "
        <div class='form-group'>
            <label for='id_producto'>ID</label>
            <input type='text' readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='id_producto' value='$id_PRODUCTO'>
        </div>
        <div class='form-group'>
            <label for='producto'>Producto</label>
            <input type='text' class='form-control' id='producto' name='producto' aria-describedby='producto' value='$PRODUCTO'>
        </div>
        <div class='form-group'>
            <label for='precio'>Precio</label>
            <input type='text' class='form-control' id='precio' name='precio' aria-describedby='precio' value='$PRECIO'>
        </div>
         <div class='form-group'>
            <label for='existencia'>Existencia</label>
            <input type='text' class='form-control' id='existencia' name='existencia' aria-describedby='existencia' value='$EXISTENCIA'>
        </div>
        ";

    print($form);
?>