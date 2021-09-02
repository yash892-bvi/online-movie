 <?php
session_start();
    
  if(!isset($_SESSION['username']))
  {
    
    header('location:index.php');
    exit;
  }
?> 
<?php

include "db.php"; // Using database connection file here
try {

$id = $_GET['id']; // get id through query string

$del = "delete from booking_list where booking_id = '$id'"; // delete query
 $conn->exec($del);

  header('Location: show_booking.php'); //If book.php is your main page where you list your all records
   
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>