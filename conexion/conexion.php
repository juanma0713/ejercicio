<?php 

class conexion{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "crud_adsi";
    private $conect;


    public function __construct(){
        $connection =  "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conect = new PDO($connection,$this->user,$this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
            }
            catch(Exception $error){
                $this->conect='Error de conexion';
                echo "Error". $error->getMessage();
            }
         
        }
         
    }
    
    
$conect = new conexion();
$return = new PDO();

?>
    