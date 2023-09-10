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

    include('modificar-registro.php');

    $name = $_POST['empresa'];
    $state = $_POST['depto'];
    $address = $_POST['dir'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
    $id = $_POST['id'];


    $result = modificarCliente(strtoupper($name),strtoupper($state),strtoupper($address),strtoupper($phone),strtoupper($email),strtoupper($id));

   

?>
    <h3>
        <?php
            echo $result;
        ?>
    </h3>
    <table>
        <tr>
            <td>
                <form action="modificar-cliente.php" method="post">
                    <input type="submit" class="btn btn-primary btn-sm" value="MODIFICAR OTRO REGISTRO">
                </form>
                
            </td>
            <td>
                <form action="cliente.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-sm" value="REGRESAR AL INICIO">
                </form>
                
            </td>
        </tr>
    </table>
</body>
</html>