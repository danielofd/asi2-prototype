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
<form action="proceso-guardar-cliente.php" method="post">
    <table>
        <tr>
            <td>
                NOMBRE:
            </td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>
                DEPARTAMENTO:
            </td>
            <td>
                <input type="text" name="state">
            </td>
        </tr>
        <tr>
            <td>
                DIRECCION:
            </td>
            <td>
                <input type="text" name="address">
            </td>
        </tr>
        <tr>
            <td>
                TELEFONO:
            </td>
            <td>
                <input type="text" name="phone">
            </td>
        </tr>
        <tr>
            <td>
                CORREO ELECTRONICO:
            </td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            
            <td>
            <a href="cliente.php" ><button type="button" class="btn btn-secondary btn-sm">REGRESAR</button></a>
            </td>
            
            
            <td>
                <input type="submit"  class="btn btn-primary btn-sm" value="GUARDAR">
            </td>
        </tr>
    </table>
   

    </form>
</body>
</html>