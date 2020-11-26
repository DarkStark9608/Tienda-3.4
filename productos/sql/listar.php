<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from PRODUCTO;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>PRODUCTO</th>
                <th>PRECIO</th>
                <th>EXISTENCIA</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";
    print($table);

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $id_PRODUCTO = $row['ID_PRODUCTO'];
        $PRODUCTO = $row['PRODUCTO'];
        $PRECIO = $row['PRECIO'];
        $EXISTENCIA = $row['EXISTENCIA'];       
        $table = "
            <tr>
                <td>$id_PRODUCTO</td>
                <td>$PRODUCTO</td>
                <td>$PRECIO</td>
                <td>$EXISTENCIA</td>
                <td><a href='view.php?id_producto=$id_PRODUCTO'>View</a></td>
                <td><a href='update.php?id_producto=$id_PRODUCTO'>Update</a></td>
                <td><a href='delete.php?id_producto=$id_PRODUCTO'>Delete</a></td>
            </tr>
        ";

        print($table);

    }
?>