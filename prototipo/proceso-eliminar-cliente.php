<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<table>
        <tr>
            <td>
            <img src="logo-empresa-seguridad.png" alt="logo empresa" width="100" height="115">
            </td>
            <td>
            <h1>MODULO CLIENTES</h1>
            </td>
        </tr>
    </table>

<?php

    include('listado-registro.php');
    
    $empresa = $_POST['id'];



    $listado = buscarRegistro($empresa);

  //  echo $empresa;

  //echo count($listado);




 $flag=0;
 




?>

<table class="table table-striped">
<form action="accion-eliminar-cliente.php" method="post">
    <?php
    
       

        if ($listado->num_rows > 0) {
            // output data of each row
            $flag=1;
            while($row = $listado->fetch_assoc()) {
              //echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["telefono"]. "<br>";

                ?>
                <tr>
        <td>
            CODIGO
        </td>
        <td>
            NOMBRE EMPRESA
        </td>
        <td>
            DEPARTAMENTO
        </td>
        <td>
            DIRECCION
        </td>
        <td>
            TELEFONO
        </td>
        <td>
            CORREO ELECTRONICO
        </td>
    </tr>

            <tr>
            <td>
                <?php
                    echo $row["id"];
                   
                ?>
                 <input type="hidden" name="cod" value='<?php echo $row["id"] ?>'>
            </td>
            <td>
                <?php
                    echo $row["nombre"];
                ?>
            </td>
            <td>
                <?php
                    echo $row["departamento"];
                ?>
            </td>
            <td>
                <?php
                    echo $row["direccion"];
                ?>
            </td>
            <td>
                <?php
                    echo $row["telefono"];
                ?>
            </td>
            <td>
                <?php
                    echo $row["correo"];
                ?>
            </td>
        </tr>


                <?php


            }
          } else {
            echo "<h3>NO EXISTEN DATOS RELACIONADOS CON LA BUSQUEDA</h3>";
          }

            

        ?>

</table>     
        
  <table>
    <tr>
        <td>
            
        <a href="eliminar-cliente.php"><button type="button" class="btn btn-secondary btn-sm">REGRESAR</button></a>
            
        </td>
        <td>
        
        <a href="cliente.php"><button type="button" class="btn btn-secondary btn-sm">CANCELAR</button></a>
            
        </td>
          <?php

            if($flag<>0){
                ?>
                <td>
                    
                    <input type="submit" class="btn btn-primary btn-sm" value="ELIMINAR">
                </td>

                <?php

            }

            ?>


        
    </tr>
</table>
    </form>



 
</body>
</html>