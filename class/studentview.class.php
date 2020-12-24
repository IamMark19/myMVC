<?php
include_once('student.class.php');
class StudentView extends Student{
   public function showStudent($email,$password){
      $total=$this->login($email,$password);
      $student=$this->getStudentInfo($email,$password);
      if($total > 0){
    
         echo "Welcome ". $student['firstName']." ". $student['lastName'];
         $this->set_StudentData( $student);
         header('location:class/mainpage.php');
         
      }else{
         echo '<div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>Email or Password</strong> Entered Wrong! Please Input Correct Data.
         </div>';
      }
   }
   
   protected function set_StudentData($array){
         
      if(!isset($_SESSION)){
         session_start();
      }
      $_SESSION['studentData']=array(
         "fullname"=>$array['firstName']." ".$array['lastName'] 
      );
      return $_SESSION['studentData'];
   }
  public function get_StudentData(){
      if(!isset($_SESSION)){
         session_start();
      }
      if(isset($_SESSION['studentData'])){
         return $_SESSION['studentData'];
      }else{
         header('location:../index.php');
      }
   }

   public function checkIfAuthenticated()
   {
      if(isset($_SESSION['studentData']))
      {
         header('location:class/mainpage.php');
      }      
   }
   
// for view data in from the database
   public function showData(){
      $result=$this->viewData();
      return $result;
     
   } public function getInfo($id){
      $results=$this->getId($id);
         return $results;
   }
}
  
?>