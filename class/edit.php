<?php 
include('studentController.class.php');
include('studentView.class.php');
$data = array("","","","","");
//            0   1  2  3 4
$id=$_GET['edit'];
$getInfo = new StudentView();
$results = $getInfo->getInfo($id);
if(isset($_POST['update'])) {
   $result['email']= $email =$_POST['email'];
   $fname =$_POST['fname'];
   $lname=$_POST['lname'];
   $bday=$_POST['bday'];
   $reg= new StudentController(); 
   // if(empty($email)||empty($fname) ||empty($lname)||empty($bday)){
   //    echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
   //       <strong>Warning!</strong> Please Complete the fields below.
   //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   //       <span aria-hidden="true">&times;</span>
   //    </button>
   //    </div>';
   // }else{
       $reg->edit($email,$fname,$lname,$bday,$id);
   }
// }
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">  
      <title>PDO Practice</title>
   </head>
<body>
<div class="container">
      <h1>Update Student/User</h1>
      <form class="needs-validation" method="post" action="" novalidate>
         <div class="col">
            <label for="validationCustom01" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="validationCustom02" value="<?=$results['Email'] ?>" required>
            <span class="valid-feedback">Looks good!</span>
            <span class="invalid-feedback">Complete the data</span>
         </div>
         <div class="col">
            <label for="validationCustom01" class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control" id="validationCustom02" value="<?=$results['firstName'] ?>" required>
            <span class="valid-feedback">Looks good!</span>
            <span class="invalid-feedback">Complete the data</span>
            
         </div>
         <div class="col">
            <label for="validationCustom01" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="validationCustom02" value="<?=$results['lastName'] ?>" required>
            <span class="valid-feedback">Looks good!</span>
            <span class="invalid-feedback">Complete the data</span>
         </div>
      
         <div class="col">
            <label for="validationCustom01" class="form-label">Birthday</label>
            <input type="date" name="bday" class="form-control" id="validationCustom02" value="<?=$results['Birthday'] ?>" required>
            <span class="valid-feedback">Looks good!</span>
            <span class="invalid-feedback">Complete the data</span>
         </div>
         <div class="col-12">
         <button class="btn btn-primary" type="submit" name="update" class="form-control" >Update User</button>
         </div>
      </form>
   </div> 
   <script src="validate.js"></script>
    <!-- Optional JavaScript;  -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>