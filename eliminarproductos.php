<?php

include("BaseDatos.php");

//recibo el id que voy a eliminar por la URL (GET)
$idEliminar=($_GET["id"]);

// crear el objeto de la clase Base Datos
$transaccion= new BaseDatos();

// crear la consulta SQL para eliminar
$consultaSQL="DELETE FROM productostienda WHERE idProductos='$idEliminar'";

// Utilizar el metodo para eliminarDatos
$transaccion->eliminarproductos($consultaSQL);




?>