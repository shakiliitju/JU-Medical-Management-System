<?php

include 'db_conn.php';
$D_ID =$_GET['D_ID'];
if(isset($_POST['submit']))
{
   $D_ID = $_GET['D_ID'];
   $D_Name = $_POST['D_Name'];
   $EMAIL = $_POST['EMAIL'];
   $ADDRESS = $_POST['ADDRESS'];
   $PHONE = $_POST['PHONE'];
   $CITY = $_POST['CITY'];
   $UPDATED_DATE = $_POST['UPDATED_DATE'];

   $sql = " UPDATE `operations` SET `ID`=$ID,`NAME`='$NAME',`EMAIL`='$EMAIL',`ADDRESS`='$ADDRESS',`PHONE`='$PHONE',`CITY`='$CITY',`UPDATED_DATE`='$UPDATED_DATE' WHERE ID = $ID " ;
   $query = mysqli_query($con,$sql); 

   if($query){
     echo "updated succesfully";
   }
   else{
     die(mysqli_error($conn));
   }
   header("location:doctor.php");
}




?>