<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> 
    #contenedor{
            width: 100%;
            height: 5000px;
            background-color: orange;
            border: 2px solid blue;
        }
        #banner{
           
            height: 150px;
            background-image:  url("imagenes/imagen4.jpg");
            background-size: 100% 100%
        }
        
        #bnav{
            
            height: 45px;
            
            

        }
        .topnav.responsive a {
         float: none;
         display: block;
         text-align: left;
         }
        
         
        .bbnav{
            width: 80%;
            margin-left: 10%;
            border: 1px solid black;
            margin-top: 10px;

        }
        .cuerpo
        {
         width: 266px;
         height: 300px;
         border: 2px solid black;
         background: gray;
         margin-left: 10.5%;
         float: left;
         margin-top: 12px


        
   
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}



  @media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
</style>
</style>
  </head>
  <body>
   <div id="contenedor">
       <div id="banner" class="bbnav">
           
   
       </div>
       <div id="bnav" class="bbnav">
         <div class="topnav" id="myTopnav">
           <a href="formularioRegistro.php" class="active">inicio</a>
           <a href="ProductosBodega.php">Bodega</a>

           



<main>
<?php


include("BaseDatos.php");

//1 crear un objeto de la clase BaseDatos
$transaccion=new BaseDatos();

//2 definir la consulta para buscar datos
$consultaSQL="SELECT * FROM productostienda WHERE 1";

//3 Ejecutar el metodo consultarProductos()
//y almacenar la respuesta en una variable
$Productos=$transaccion->consultarProductos($consultaSQL);






?>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3" style="margin-top:60px">
    
<?php  foreach($Productos as $Productos):?>

    <div class="col mb-4" >
    <div class="card" >
      <img src="<?php echo($Productos["imagenes"])?>"  class="card-img-top" alt="imagenes"  >
      <div class="card-body">
      <h3 class="card-title"><?php echo($Productos["NombreProducto"]) ?></h3>
        <h3 class="card-title"><?php echo($Productos["MarcaProducto"]) ?></h3>
        <h3 class="card-title"><?php echo($Productos["PrecioProducto"]) ?></h3>
        <p class="card-text"><?php echo($Productos["descripcionProducto"]) ?></p>
        <a href="eliminarproductos.php?id=<?php echo($Productos["idProductos"])?>" class="btn btn-danger">Eliminar</a>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($Productos["idProductos"])?>">
           Editar
       </button>
      </div>
    </div>

    <div class="modal fade" id="editar<?php echo($Productos["idProductos"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editarproductos.php?id=<?php  echo($Productos["idProductos"])?>" method="POST">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($Productos["NombreProducto"])?>">
                    </div>
                    <div class="form-group">
                        <label>Descripcion:</label>
                            <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($Productos["descripcionProducto"])?></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                </form>
            </div>
        </div>
    </div>
   </div>
  </div>

  

<?php endforeach ?>



   </div>



</main>
             
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
         </html>