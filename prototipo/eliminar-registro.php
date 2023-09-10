<?php




function eliminarCliente($id){

    include('conexion-database.php');

    include('listado-registro.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $result = buscarRegistro($id);

      if ($result->num_rows > 0) {
        // output data of each row
        $sql = "DELETE FROM id20820601_prototype.cliente WHERE id='$id'";
      
        if ($conn->query($sql) === TRUE) {
          return "<h3>REGISTRO ELIMINADO EXITOSAMENTE</h3>";
        } else {
          return "Error deleting record: " . $conn->error;
        }
      } else {
        echo "NO EXISTE REGISTRO A ELIMINAR";
      }
      
     

$conn->close();

}