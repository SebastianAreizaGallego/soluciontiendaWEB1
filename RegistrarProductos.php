<?php

include('BaseDatos.php');

if(isset($_POST["botonEnvio"])){

$NombreProducto=$_POST["Producto"];
$MarcaProducto=$_POST["Marca"];
$PrecioProducto=$_POST["Precio"];
$DescripcionProducto=$_POST["Descripcion"];
$imagenes=$_POST["imagenes"];

$transaccion=new BaseDatos();


$consultaSQL="INSERT INTO productostienda(NombreProducto,MarcaProducto,PrecioProducto,descripcionProducto,imagenes) VALUES ('$NombreProducto','$MarcaProducto','$PrecioProducto','$DescripcionProducto','$imagenes')";

$transaccion->agregarDatos($consultaSQL);

header("location:formularioRegistro.php");



}



?>