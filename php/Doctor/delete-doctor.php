<?php

include 'db_conn.php';

$D_ID = $_GET['D_ID'];
$sql = " DELETE FROM 'doctor' WHERE D_ID = $D_ID " ;
mysqli_query($conn,$sql);

header("location:doctor.php");

