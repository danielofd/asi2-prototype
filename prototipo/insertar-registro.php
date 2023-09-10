<?php



function insertarCliente($name, $state, $address, $phone, $email){

      include('conexion-database.php'); 

      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $nombre = strtoupper($name);
      $depto = strtoupper($state);
      $dir = strtoupper($address);
      $tel = strtoupper($phone);
      $correo = strtoupper($email);

      $sql = "INSERT INTO id20820601_prototype.cliente (nombre,departamento,direccion,telefono,correo) 
      VALUES ('$nombre', '$depto', '$dir', '$tel', '$correo')";
      
      if ($conn->query($sql) === TRUE) {
        return "<h3>EL REGISTRO HA SIDO CREADO EXITOSAMENTE</h3>";
      } else {
        return "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();

}
