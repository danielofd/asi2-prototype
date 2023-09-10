<?php



function modificarCliente($nombre, $depto, $dir, $tel, $correo, $id){

    include('conexion-database.php');

    


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE id20820601_prototype.cliente SET nombre='$nombre', departamento='$depto', direccion='$dir', telefono='$tel', correo='$correo' 
WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  
  return "REGISTRO MODIFICADO EXITOSAMENTE";
} else {
  return "Error updating record: " . $conn->error;
}
$conn->close();
}



