<?php
  include_once('config.class.php');
class Login extends Config {

   public function login(){
      if(isset($_POST['submit'])){
           $email=$_POST['email'];
           $password=md5($_POST['password']);
           $connection =$this->openCon();
           $sql = " SELECT * FROM student WHERE Email= ? AND password=? ";
           $stmt=$connection->prepare($sql);
           $stmt->execute([$email,$password]); 
           $total=$stmt->rowCount();

           if($total > 0){
              header("Location: http://mark.local/PDO/main.php");

          }else{
            
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Email or Password</strong> Entered Wrong! Please Input Correct Data.
              </div>';
             
           }
      }
    
 }
   
}


