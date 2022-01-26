<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['T_Name'])) {

    $T_ID = $_GET['T_ID'];
    $T_Name = $_POST['T_Name'];

   $sql = "insert into test(T_Name) values('$T_Name')";
   mysqli_query($conn,$sql);
   header("location:test.php");
}

?>