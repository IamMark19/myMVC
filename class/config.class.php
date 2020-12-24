<?php
class Config {

     private $server="mysql:host=localhost;dbname=crud";
     private $user = "root";
     private $password="123456789";
     private $options = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
     protected $con;
     //const hello ="Hello World";
     public function openCon(){
          try{
               $this->con= new PDO($this->server,$this->user,$this->password,$this->options);
               return $this->con;
          }catch(PDOException $e){
               echo "there is a problem in the connection :". $e->getMessage();
          }
     }
      public function closeCon(){
          $this->con = null;
     }
}
//$config = new Config();
//echo $config::hello;
//echo Config::hello;
$config = new Config();
?>