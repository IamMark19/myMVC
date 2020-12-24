<?php
include_once('student.class.php');

class StudentController extends Student{

   public function Reg($email , $password, $fname , $lname, $bday){
      $data = array($email , $password, $fname , $lname, $bday);
      $total = $this->check_User_Exist($email);
      if($total == 0){
         $this->addStudent($email,$password,$fname,$lname,$bday);
         echo ' <a href="mainpage.php" class="btn btn-success btn-block" role="button" aria-disabled="true">Created Successfully Click to go to Log-in</a>';
         $data = array("","","","","");
         return $data;
      }else{
         echo '<div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>Email Already Used</strong> 
         </div>';
         return $data;
      }
   } 
   public function getStudent($email,$password){
      $this->login($email,$password);
   }
   public function edit($email,$fname,$lname,$bday,$id){
    $this->updateStudent($email,$fname,$lname,$bday,$id);
   }
   public function delete($id){
      $this->deleteStudent($id);
   }
   
}


?>