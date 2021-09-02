<?php

include "dbconnect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string


$del = "delete from studentmst where StudId = '$id'"; // delete query

if (mysqli_query($con, $del)) {
    mysqli_close($con);
    header('Location: student.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
