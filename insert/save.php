<?php

if (empty($_POST)) {//lo direcciono al index principal
    header("location: ./index.php");
}

require "./../conexion/conexion.php";
$con = $return;



$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ""; //si trae nombre por post adopta ese nombre o si  no lo toma vacio
$telefono = $_POST['telefono'] ?? "";
$email = $_POST['email'] ?? "";

$query = $con->prepare("INSERT INTO contactos (nombre,telefono,email)  VALUES (:nom, :tel, :ema)");
$query->execute(array('cod' => $nombre, 'tel' => $telefono, 'ema' => $email));




?>































<?php
/*

function save($nombre, $telefono, $email){
  require "./../conexion/conexion.php";
   $query = "INSERT INTO contactos (nombre,telefono, email) VALUES ('$nombre', '$telefono','$email' )";
   $saved = mysqli_query($connection, $query);

   if ($saved) {
       header("location: ./index.php?status=success");
   }else {
       echo "Error insertando: ". mysqli_error($connection);
   }

}

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ""; //si trae nombre por post adopta ese nombre o si  no lo toma vacio
$telefono = $_POST['telefono'] ?? "";
$email = $_POST['email'] ?? "";

save($nombre,$telefono,$email); // llamo la funcion y envio los parametros

*/



