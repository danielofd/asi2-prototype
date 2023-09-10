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
    
    $empresa = $_POST['cod'];



    $listado = buscarRegistro($empresa);

  //  echo $empresa;

  //echo count($listado);


    $flag=0;


 




?>

<table>
    <form action="accion-modificar-cliente.php" method="post">
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
                
                <input type="text" name="id" value='<?php echo $row["id"];?>' readonly>
            </td>
            <td>
                
                <input type="text" name="empresa" value='<?php echo $row["nombre"];?>'>
            </td>
            <td>
                <input type="text" name="depto" value='<?php echo $row["departamento"];?>'>
            </td>
            <td>
               
                <input type="text" name="dir" value='<?php echo $row["direccion"];?>'>
            </td>
            <td>
                
                <input type="text" name="tel" value='<?php echo $row["telefono"];?>'>
            </td>
            <td>
                
                <input type="text" name="email" value='<?php echo $row["correo"];?>'>
            </td>
        </tr>

                <?php


            }
          } else {
            echo "<h3>NO EXISTEN DATOS RELACIONADOS CON LA BUSQUEDA</h3>";
          }



        ?>

        
        
  
    <tr>
        <td>
        <a href="modificar-cliente.php"><button type="button" class="btn btn-secondary btn-sm">REGRESAR</button></a>
        </td>

        <?php
        if($flag<>0){

            ?>
        <td>
            <input type="submit" value="MODIFICAR" class="btn btn-primary btn-sm">
        </td>
            <?php

        }

        ?>

        
    </tr>
    </form>
</table>

 
</body>
</html>