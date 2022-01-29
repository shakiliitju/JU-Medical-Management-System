<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['P_ID']) && isset($_POST['P_Name']) && isset($_POST['Gender']) && isset($_POST['Age']) && isset($_POST['P_Type']) && isset($_POST['A_Date'])) {

    $P_ID = $_POST['P_ID'];
    $P_Name = $_POST['P_Name'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $P_Type = $_POST['P_Type'];
    $A_Date = $_POST['A_Date'];


   $sql = "insert into patient(P_ID,P_Name,Gender,Age,P_Type,A_Date) values('$P_ID','$P_Name','$Gender','$Age','$P_Type','$A_Date')";
   mysqli_query($conn,$sql);
   header("location:patient.php");
}

?>