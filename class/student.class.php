<?php
   include_once('config.class.php');

   class Student extends Config{
      protected function login($email,$password){
         $connection =$this->openCon();
         $sql = " SELECT * FROM student WHERE Email= ? AND password=? ";
         $stmt=$connection->prepare($sql);
         $stmt->execute([$email,$password]);
         $total= $stmt->rowCount();
         return $total;
      }
      // for session
      protected function getStudentInfo($email,$password){
         $connection =$this->openCon();
         $sql = " SELECT * FROM student WHERE Email= ? AND password=? ";
         $stmt=$connection->prepare($sql);
         $stmt->execute([$email,$password]);
         $total= $stmt->fetch();
         return $total;
      }
     
      protected function check_User_Exist($email){
         $connection = $this->openCon();
         $sql = " SELECT Email FROM student WHERE Email= ? ";
         $stmt=$connection->prepare($sql);
         $stmt->execute([$email]); 
         $total=$stmt->rowCount();
         return  $total;
      }
      protected function addStudent($email,$password,$fname,$lname,$bday){
         $connection =$this->openCon();
        
         $stmt=$connection->prepare(" INSERT INTO student(`Email`,`password`,`firstName`,`lastName`,`Birthday`) VALUES(?,?,?,?,?) ");
         $stmt->execute([$email,$password,$fname,$lname,$bday]);
        
      }
      protected function updateStudent($email,$fname,$lname,$bday,$id){
         $connection =$this->openCon();
         $stmt=$connection->prepare("UPDATE student SET Email= ? , firstName = ? ,lastName = ?, Birthday= ?  WHERE id =? ");
         $stmt->execute([$email,$fname,$lname,$bday,$id]);
         header('location:mainpage.php');
        
      }
      protected function deleteStudent($id){
         $connection =$this->openCon();
         $sql = " DELETE FROM student WHERE id=?";
         $stmt=$connection->prepare($sql);
         $stmt->execute([$id]);
         header('location:mainpage.php');
      }
      protected function viewData(){
         $connection =$this->openCon();
         $sql = " SELECT * FROM student";
         $stmt=$connection->prepare($sql);
         $stmt->execute(); 
         $result= $stmt->fetchAll();
         return $result;
      }
      protected function getID($id){
         $connection =$this->openCon();
         $sql = " SELECT * FROM student where id = $id";
         $stmt=$connection->prepare($sql);
         $stmt->execute(); 
         $results = $stmt->fetch();
         return $results;
         
      }
   } 