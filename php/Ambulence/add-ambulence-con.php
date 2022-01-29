<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['Amb_ID']) && isset($_POST['Amb_Status'])) {

    $Amb_ID = $_POST['Amb_ID'];
    $Amb_Status = $_POST['Amb_Status'];
   

   $sql = "insert into ambulence(Amb_ID,Amb_Status) values('$Amb_ID','$Amb_Status')";
   mysqli_query($conn,$sql);
   header("location:ambulence.php");
}

?>