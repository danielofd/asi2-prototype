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
        <form action="proceso-modificar-cliente.php" method="post">
        <tr>
            <td>CONSULTE REGISTRO POR ID:</td>
            <td>
                <input type="text" name="cod" >
            </td>
        </tr>
        <tr>
            <td>
            <a href="cliente.php"><button type="button" class="btn btn-secondary btn-sm">REGRESAR</button></a>
            </td>
            <td>
                <input type="submit" value="BUSCAR" class="btn btn-primary btn-sm">
            </td>
        </tr>
        </form>
    </table>
</body>
</html>