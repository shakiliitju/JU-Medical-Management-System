<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['T_ID']) && isset($_POST['T_Name']) && isset($_POST['T_Price'])) {

    $T_ID = $_POST['T_ID'];
    $T_Name = $_POST['T_Name'];
    $T_Price = $_POST['T_Price'];

   $sql = "insert into test(T_ID,T_Name,T_Price) values('$T_ID','$T_Name','$T_Price')";
   mysqli_query($conn,$sql);
   header("location:test.php");
}

?>