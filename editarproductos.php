<?php

include ("BaseDatos.php");

$transaccion=new BaseDatos();



if(isset($_POST["botonEditar"])){

    
    $id=$_GET["id"];
    $NombreProducto=$_POST["nombreEditar"];
    $DescripcionProducto=$_POST["descripcionEditar"];


    $consultaSQL="UPDATE productostienda SET NombreProducto='$NombreProducto',descripcionProducto='$DescripcionProducto' WHERE idProductos='$id'";
    
   $transaccion->editarProductos($consultaSQL);



}









?>