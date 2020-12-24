
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
      crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark shadow">
      <span class="navbar-brand mb-0 h1">Student Crud System</span><span class="navbar-brand ml-10 mb-0 h1">
      <a href="logout.php" class="btn btn-dark " role="button">Logout</a></span>
      </nav>
      <?php $login= new StudentView(); 
      $student=$login->get_StudentData();
      
         echo "Welcome ".$student['fullname'];
         $results = $login->showData(); 
      ?>


     
         
</div>
</body>
</html>

   