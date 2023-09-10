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
            <form action="proceso-consulta.php" method="post">
                <td>
                    INGRESE ID DEL REGISTRO A BUSCAR:
                </td>
                <td>
                    <input type="text" name="company">
                </td>
                <td>
                    <input type="submit" class="btn btn-primary btn-sm" value="BUSCAR">
                </td>
            </form>
            </tr>
            <tr>
               <td>
                <br>
               </td>
            </tr>
            <tr>
                <form action="cliente.php" method="post">
                    <td>
                        <input type="submit" class="btn btn-secondary btn-sm" value="REGRESAR">
                    </td>
                </form>
                <form action="proceso-consulta-list.php" method="post">
                <td>
                    <input type="submit" class="btn btn-primary btn-sm" value="VER LISTADO">
                </td>
                </form>
            </tr>
        </table>
    
</body>
</html>