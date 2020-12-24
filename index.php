<?php 
require('class/studentController.class.php');
require('class/studentview.class.php');

$login= new StudentView();
$login->checkIfAuthenticated();

   if(isset($_POST['submit'])){
   $login->checkIfAuthenticated();
     $email=$_POST['email'];
     $password=$_POST['password'];
     $login->showStudent($email,$password);
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
   <div class="container">
 
      <div class="row content">
         <div class="col-md-6 mb-3">
            <img src="img/image1.png" class="img-fluid" alt="image">
         </div>
         <div class="col-sm-6">
            <h3 class="signin-text mb-3">Sign In</h3>
            <form method="post" action=""  >
               <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" autocomplete="off">
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
               </div>
               <div class="form-group form-check">
                  <input type="checkbox" name="checkbox" class="form-check-input">
                  <label class="form-check-label">Remember me</label>
               </div>
               <button class="btn btn-primary" type="submit" name="submit" class="form-control" >Login</button>
               <hr>
               <a href="class/register.class.php" class="btn btn-success btn-block" role="button" aria-disabled="true">CREATE ACCOUNT</a>
            </form>
         </div>
      </div>
      <?php ?>
   </div>
   <!-- Optional JavaScript;  -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
