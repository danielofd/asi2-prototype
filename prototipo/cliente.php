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
    <table>
        
        <tr>
        <td>
                <form action="guardar-cliente.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-sm" value="INGRESAR CLIENTE">
                </form>
            </td>
        </tr>
            <tr>
            <td>
                <form action="consultar-cliente.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-sm" value="CONSULTAR CLIENTES">
                </form>
            </td>
            </tr>
            <tr>
            <td>
                <form action="modificar-cliente.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-sm" value="MODIFICAR CLIENTE">
                </form>
            </td>
            </tr>
            <tr>
            <td>
                <form action="eliminar-cliente.php" method="post">
                    <input type="submit" class="btn btn-secondary btn-sm" value="ELIMINAR CLIENTE">
                </form>
            </td>
            </tr>
            <tr>
            <td>
            <form action="menu.php" method="post">
                    <input type="submit"  class="btn btn-secondary btn-sm" value="REGRESAR A MENU">
                </form>
            </td>
        </tr>
       
    </table>
</body>
</html>

