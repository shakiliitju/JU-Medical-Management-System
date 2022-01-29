<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['D_ID']) && isset($_POST['D_Name']) && isset($_POST['Gender']) && isset($_POST['Work_Day']) && isset($_POST['Speciality'])) {

    $D_ID = $_POST['D_ID'];
    $D_Name = $_POST['D_Name'];
    $Gender = $_POST['Gender'];
    $Work_Day = $_POST['Work_Day'];
    $Speciality = $_POST['Speciality'];


   $sql = "insert into doctor(D_ID,D_Name,Gender,Work_Day,Speciality) values('$D_ID','$D_Name','$Gender','$Work_Day','$Speciality')";
   mysqli_query($conn,$sql);
   header("location:doctor.php");
}

?>