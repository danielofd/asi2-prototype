<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MENU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  
</body>
</html>


    <?php


    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
 

    

      if ($user=="dofd" && $pwd=="1234") {
        include("menu.php");
       
      }else{

      
          ?>
          
        <table>
        <tr>
            <td>
            <img src="logo-empresa-seguridad.png" alt="logo empresa" width="100" height="115">
            </td>
            <td>
            </td>
        </tr>
    </table>
           <h3>¡ERROR: USUARIO Y/O CONTRASE&Ntilde;A NO VALIDOS!</h3>
              <form action="index.php" method="post">
                <input type="submit" class="btn btn-secondary btn-sm" value="REGRESAR">
              </form>
          <?php
    
        }


  

  ?>

