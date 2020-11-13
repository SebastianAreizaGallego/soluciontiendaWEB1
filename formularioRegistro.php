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
        
         <div class="dropdown-content"></div>
         
        <li class="dropdown"></li>
        
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          
          
          <i class="fa fa-bars"></i>
        </a>
      </div>
        </div>
        <div id="secizq"  class="cuerpo"> 
            <img src="imagenes/imagen1.jpg" width="100%"  height="100%">
            </div>
        <div id="seccentro"  class="cuerpo"  style="overflow: scroll ;padding: 3px;text-align: justify;"> 
        La canasta de Precios Cuidados es de 450 productos y representa el 20 % de la facturación de hipermercados. 
        La demanda de estos productos se incrementó un 75% -según números oficiales- en el primer trimestre de 2015 respecto del año anterior. 
        Para este anunció se incluyeron 28 productos más entre los que figuran escarbadientes, escoba, palas, comidas para mascotas, velas y acondicionador de pelo, entre otros.

         La negociación se da en un contexto de acuerdo no solo de precios sino también de paritarias.
          Por lo cual mientras el Gobierno se tomó de la morigeración inflacionaria en los últimos meses,
           las empresas pusieron como carta de cambio un tope a los acuerdos salariales para que no impacten en los costos.

            </div>
            <div id="secder"  class="cuerpo"  style="margin-left:9%;"> 
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2x9c-DPJqus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <body>
   


          </div>
      
          <main>
        <div class="container">
            <form action="RegistrarProductos.php" method="POST">
                <h1 style="margin-left:250px" >ADMINISTRACION DE PRODUCTOS</h1>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del Producto" name="Producto">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca del Producto" name="Marca">
                    </div>
                </div>
                <div class="col">
                        <input type="text"  style="margin-top:5px"  class="form-control" placeholder="Precio del Producto" name="Precio">
                    </div>
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="Descripcion"></textarea>
                    </div>
                    </div>
                    <div class="col">
                        <label class="font-weight-bold">imagenes:</label>
                        <textarea class="form-control" placeholder="URL imagen" name="imagenes" ></textarea>
                    </div>
               
                
               
                <button type="submit" style="margin-top:10px"   class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
            </form>
        </div>
    
    </main>
  
</body>
</html>

      </div>
 
 
</div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</html>