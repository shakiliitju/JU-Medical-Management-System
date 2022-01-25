<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['Quantity'])) {

    $M_Code = $_GET['M_Code'];
    $Quantity = $_POST['Quantity'];
   

   $sql = "insert into medicine(Quantity) values('$Quantity')";
   mysqli_query($conn,$sql);
   header("location:medicine.php");
}

?>