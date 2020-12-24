<?php
include('studentController.class.php');
$id = $_GET['delete'];
$del = new studentController();
$del->delete($id);
?>
