<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['Bed_Num']) && isset($_POST['Date']) && isset($_POST['Bed_Status'])) {

    $Bed_Num = $_POST['Bed_Num'];
    $Date = $_POST['Date'];
    $Bed_Status = $_POST['Bed_Status'];
   

   $sql = "insert into bed(Bed_Num,Date,Bed_Status) values('$Bed_Num','$Date','$Bed_Status')";
   mysqli_query($conn,$sql);
   header("location:bed.php");
}

?>