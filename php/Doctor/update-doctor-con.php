<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
  //D_ID='" . $_POST['D_ID'] . "',
mysqli_query($conn,"UPDATE doctor set D_ID='" . $_POST['D_ID'] . "', D_Name='" . $_POST['D_Name'] . "',Gender='" . $_POST['Gender'] . "' ,Work_Day='" . $_POST['Work_Day'] . "' ,Speciality='" . $_POST['Speciality'] . "' WHERE D_ID='" . $_POST['D_ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM doctor WHERE D_ID='" . $_GET['D_ID'] . "'");
$Patient_data= mysqli_fetch_array($result);
?>