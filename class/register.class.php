<?php 
include('studentController.class.php');
include('studentview.class.php');
$login = new StudentView(); 
$data = array("","","","","");
//            0   1  2  3 4
if(isset($_POST['add'])) {
   $email =$_POST['email'];
   $password=$_POST['password'];
   $fname =$_POST['fname'];
   $lname=$_POST['lname'];
   $bday=$_POST['bday'];
   $data = array($email , $password, $fname , $lname, $bday);
   $reg= new StudentController(); 
   if(empty($email)||empty($fname) ||empty($password) ||empty($lname)||empty($bday)){
      echo' <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Warning!</strong> Please Complete the fields below.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
      </div>';
   }else{
   $data = $reg->reg($email , $password, $fname , $lname, $bday);
   }
}
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

   <div class="container-fluid">
  
         <div class="row content">
            <div class="col-md-6 mb-3">
               <img src="../img/image1.png" class="img-fluid" alt="image">
            </div>
         
         <div class="col-sm-6">
               <h3 class="signin-text mb-3"></h3>
      
         <h1>Add Student/User</h1>
         <form class="needs-validation" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
            <div class="col">
               <label for="validationCustom01" class="form-label">Email</label>
               <input type="email" name="email" class="form-control" id="validationCustom02" value="<?=$data[0]; ?>" required>
               <span class="valid-feedback">Looks good!</span>
               <span class="invalid-feedback">Complete the data</span>
            </div>
            <div class="col">
               <label for="validationCustom01" class="form-label">First Name</label>
               <input type="text" name="fname" class="form-control" id="validationCustom02" value="<?=$data[1]; ?>" required>
               <span class="valid-feedback">Looks good!</span>
               <span class="invalid-feedback">Complete the data</span>
               
            </div>
            <div class="col">
               <label for="validationCustom01" class="form-label">Last Name</label>
               <input type="text" name="lname" class="form-control" id="validationCustom02" value="<?=$data[2]; ?>" required>
               <span class="valid-feedback">Looks good!</span>
               <span class="invalid-feedback">Complete the data</span>
            </div>
            <div class="col">
               <label for="validationCustom01" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" id="validationCustom02" value="<?=$data[3]; ?>" required>
               <span class="valid-feedback">Looks good!</span>
               <span class="invalid-feedback">Complete the data</span>
            </div>
            <div class="col">
               <label for="validationCustom01" class="form-label">Birthday</label>
               <input type="date" name="bday" class="form-control" id="validationCustom02" value="<?=$data[3]; ?>" required>
               <span class="valid-feedback">Looks good!</span>
               <span class="invalid-feedback">Complete the data</span>
            </div>
            <div class="col-12">
            <button class="btn btn-primary" type="submit" name="add" class="form-control" >Add User</button>
            </div>
         </form>
      </div> 
   </div>
</div>
   <script src="validate.js"></script>
    <!-- Optional JavaScript;  -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>