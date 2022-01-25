<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['Amb_Status'])) {

    $P_ID = $_GET['P_ID'];
    $Amb_Status = $_POST['Amb_Status'];
   

   $sql = "insert into ambulence(Amb_Status) values('$Amb_Status')";
   mysqli_query($conn,$sql);
   header("location:ambulence.php");
}

?>