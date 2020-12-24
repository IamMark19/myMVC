<?php
class CreateStudent extends Config{
   public function check_User_Exist($email){
      $connection = $this->openCon();
      $sql = " SELECT Email FROM student WHERE Email= ? ";
      $stmt=$connection->prepare($sql);
      $stmt->execute([$email]); 
      $total=$stmt->rowCount();
      return  $total;
   }

 public function addStudent($email,$password,$fname,$lname,$bday){
      
           if ($this->check_User_Exist($email) == 0){
                $connection =$this->openCon();
                $stmt=$connection->prepare(" INSERT INTO student(`Email`,`password`,`firstName`,`lastName`,`Birthday`) VALUES(?,?,?,?,?) ");
                $stmt->execute([$email,$password,$fname,$lname,$bday]);  
                echo ' <a href="http://mark.local/PDO/" class="btn btn-success btn-block" role="button" aria-disabled="true">Created Successfully Click to go to Log-in</a>';
           }else{
           
               echo '<div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>Email Already Used</strong> 
               </div>';
           }
      }
  }
