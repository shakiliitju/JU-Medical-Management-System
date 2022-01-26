<?php

include 'db_conn.php';

$D_ID = $_GET['D_ID'];
$sql = " DELETE FROM doctor WHERE D_ID='$D_ID'";
mysqli_query($conn,$sql);

// // sql to delete a record
// $sql = "DELETE FROM doctor WHERE D_ID=6";

// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

header("location:doctor.php");





// $conn->close();
?>
