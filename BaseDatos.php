<?php

class BaseDatos{

    public $usuarioBD="root";
    public $passwordBD="";

    public function __construct(){}

    public function conectarBD(){

    try{
      
        $datosBD="mysql:host=localhost;dbname=trabajoweb1";
        $conexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        //echo("exito");
        return($conexionBD);

    }catch(PDOException $error){
      
         echo($error->getMessage());
    }

}
public function agregarDatos($consultaSQL){

$conexionBD=$this->conectarBD();

$insertarDatos=$conexionBD->prepare($consultaSQL);

$resultado=$insertarDatos->execute();

if($resultado){
    echo("Producto agregado");
}else{

    echo("error agregando");
}

}
public function consultarProductos($consultaSQL){

$conexionBD=$this->conectarBD();
$consultarProductos=$conexionBD->prepare($consultaSQL);

$consultarProductos->setFetchMode(PDO::FETCH_ASSOC);

$consultarProductos->execute();

return($consultarProductos->fetchAll());

}

public function eliminarproductos($consultaSQL){

$conexionBD=$this->conectarBD();

$eliminarproductos=$conexionBD->prepare($consultaSQL);

$resultado=$eliminarproductos->execute();

if($resultado){
    echo("Producto Eliminado");
}else{

    echo("error ");
}

}

public function editarProductos($consultaSQL){

    $conexionBD=$this->conectarBD();

    $editarProductos=$conexionBD->prepare($consultaSQL);
    
    $resultado=$editarProductos->execute();
    
    if($resultado){
        echo("Producto Editado");
    }else{
    
        echo("error Editar");
    }

}


}


?>