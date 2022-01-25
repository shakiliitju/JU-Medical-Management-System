<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['Bed_Status'])) {

    $Bed_Num = $_GET['Bed_Num'];
    $Bed_Status = $_POST['Bed_Status'];
   

   $sql = "insert into bed(Bed_Status) values('$Bed_Status')";
   mysqli_query($conn,$sql);
   header("location:bed.php");
}

?>