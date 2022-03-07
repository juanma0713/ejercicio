<?php

class conexion{
    private $user = "root";
    private $pass = "";

    function conectar(){

        try{
        $pdo = new PDO('mysql: host=localhost; dbname=crud_adsi',$this->user,$this->pass); 
       
        }
        catch(PDOException $error){
            echo "no se pude conectar" . $error->getMessage();
        }


       }
}

$nuevaconexion = new  conexion();
$nuevaconexion -> conectar();
?>
    