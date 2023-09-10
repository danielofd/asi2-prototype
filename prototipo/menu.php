<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
    

   <table>
        <tr>
            <td>
            <img src="logo-empresa-seguridad.png" alt="logo empresa" width="100" height="115">
            </td>
            <td>
            <h1>BIENVENIDO</h1>
            </td>
        </tr>
    </table>
<body>
    <br><h5>¿QUE DESEA HACER?</h5>
    <table>
        <tr>
            <td>
                <form action="cliente.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-lg" value="REGISTRO DE CLIENTES">
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form action="bitacora.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-lg" value="BITACORA DE EMPLEADOS">
                </form>
                
            </td>
        </tr>
        <tr>
            <td>
                <form action="control.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-lg" value="CONTROL DE EMPLEADOS">
                </form>
                
            </td>
        </tr>
        <tr>
            <td>
                <form action="inventario.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-lg" value="INVENTARIO">
                </form>
                
            </td>
        </tr>
        <tr>
            <td>
            <form action="index.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-lg" value="SALIR">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
