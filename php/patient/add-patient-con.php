<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['P_Name']) && isset($_POST['Gender']) && isset($_POST['Age']) && isset($_POST['P_Type'])) {

    $P_ID = $_GET['P_ID'];
    $P_Name = $_POST['P_Name'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $P_Type = $_POST['P_Type'];


   $sql = "insert into patient(P_Name,Gender,Age,P_Type) values('$P_Name','$Gender','$Age','$P_Type')";
   mysqli_query($conn,$sql);
   header("location:patient.php");
}

?>