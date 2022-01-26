<?php
include_once 'db_conn.php';
$sql = "DELETE FROM bed WHERE Bed_Num='" . $_GET["Bed_Num"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'bed.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>