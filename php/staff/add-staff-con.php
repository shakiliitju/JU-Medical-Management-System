<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['S_ID']) && isset($_POST['S_Name']) && isset($_POST['Gender']) && isset($_POST['Work_Day'])) {

    $S_ID = $_POST['S_ID'];
    $S_Name = $_POST['S_Name'];
    $Gender = $_POST['Gender'];
    $Work_Day = $_POST['Work_Day'];
   


   $sql = "insert into staff(S_ID,S_Name,Gender,Work_Day) values('$S_ID','$S_Name','$Gender','$Work_Day')";
   mysqli_query($conn,$sql);
   header("location:staff.php");
}

?>