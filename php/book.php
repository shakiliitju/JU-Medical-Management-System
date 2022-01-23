<?php
session_start(); 
include "db_conn.php";


if (isset($_POST['P_Name']) && isset($_POST['Gender']) && isset($_POST['Age']) && isset($_POST['P_Type'])) {

 
    $P_Name = $_POST['P_Name'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $P_Type = $_POST['P_Type'];


   $sql = "insert into patient(P_Name,Gender,Age,P_Type) values('$P_Name','$Gender','$Age','$P_Type')";
   if(mysqli_query($conn,$sql)){
       echo 'Registration successfully...';
   }else{
    echo 'Error';
   }


    // $stmt = $conn->prepare("insert into patient(P_Name,Gender,Age,P_Type) values(?, ?, ?, ?)");
    // $stmt->bind_param("ssis",$P_Name,$Gender,$Age,$P_Type);
    // $execval = $stmt->execute();
    // echo $execval;
    // echo " Registration successfully...";
    // $stmt->close();
    // $conn->close();
}
