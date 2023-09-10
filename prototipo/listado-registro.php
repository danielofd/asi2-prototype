<?php


class Company {

        public $id;
        public $name;
        public $state;
        public $address;
        public $phone;
        public $email;

        function __construct($id,$name,$state, $address, $phone, $email){
            $this->id=$id;
            $this->name = $name;
            $this->state = $state;
            $this->address = $address;
            $this->phone = $phone;
            $this->email = $email;
        }

        function set_id($id) {
            $this->id = $id;
          }
          function get_id() {
            return $this->id;
          }

        function set_name($name) {
            $this->name = $name;
          }
          function get_name() {
            return $this->name;
          }

          function set_state($state) {
            $this->state = $state;
          }
          function get_state() {
            return $this->state;
          }

          function set_address($address) {
            $this->address = $address;
          }
          function get_address() {
            return $this->address;
          }

          function set_phone($phone) {
            $this->phone = $phone;
          }
          function get_phone() {
            return $this->phone;
          }

          function set_email($email) {
            $this->email = $email;
          }
          function get_email() {
            return $this->email;
          }


}

function getListado(){
  
  include('conexion-database.php');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM id20820601_prototype.cliente";
  $result = $conn->query($sql);

  return $result;



}

function buscarRegistro($id){

    include('conexion-database.php');

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM id20820601_prototype.cliente WHERE id='$id' ";
    $result = $conn->query($sql);

    return $result;
    
}

