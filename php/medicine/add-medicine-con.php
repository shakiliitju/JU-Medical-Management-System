<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['M_Code']) && isset($_POST['M_Name']) && isset($_POST['Quantity'])) {

    $M_Code = $_POST['M_Code'];
    $M_Name = $_POST['M_Name'];
    $Quantity = $_POST['Quantity'];
   

   $sql = "insert into medicine(M_Code,M_Name,Quantity) values('$M_Code','$M_Name','$Quantity')";
   mysqli_query($conn,$sql);
   header("location:medicine.php");
}

?>