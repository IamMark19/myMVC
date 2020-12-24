<?php
include('studentview.class.php');
include('studentController.class.php');
$login = new StudentView(); 
$student=$login->get_StudentData();
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
      crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <title>Main</title>
   </head>
   <body>
      <nav class="navbar navbar-dark bg-dark shadow">
      <span class="navbar-brand mb-0 h1">Student Crud System</span><span class="navbar-brand ml-10 mb-0 h1">
      <a href="logout.php" class="btn btn-dark " role="button">Logout</a></span>
      </nav>
      <div class="container-fluid">
          <?php $login= new StudentView(); 
         echo "Welcome ".$student['fullname'];
          $results = $login->showData(); ?>
         
         <h3 class='mb-4'>Student Information</h3>
         <a href="register.class.php" style="margin-bottom:10px;" class="btn btn-dark ml-5" role="button">Add Student</a>
         <table class="table table-dark table-striped table-sm table-hover">
            <thead class='ml-3'>
               <tr class='ml-3'>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Birthday</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>

               <?php if(count($results) == 0): ?>
                  <tr class='ml-3 nw'>
                     <td colspan='6'>
                     <div class='alert alert-danger'><strong>Danger!</strong> No Record Found In database!</div>
                     </td>
                  </tr>
               <?php else: ?>
               <?php foreach($results as $res): ?>
                  <tr class='ml-3'>
                     <td><?=$res['firstName']?></td>
                     <td><?=$res['lastName']?></td>
                     <td><?=$res['Birthday']?></td>
                     <td><?=$res['Email']?></td>
                     <td><?=$res['password']?>12uysvshhsbchghc</td>
                     <td>
                        <a class='btn btn-info' href='edit.php?edit=<?= $res["id"]?>'>Update Student Data</a>
                        <a class='btn btn-danger'onclick="return confirm('Are you sure you want to delete this item?')" href='delete.php?delete=<?= $res["id"]?>'>Delete</a>
                     </td>
                  </tr>
                  <?php endforeach; ?>

               <?php endif; ?>
            </tbody>
         </table>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   </body>
</html>