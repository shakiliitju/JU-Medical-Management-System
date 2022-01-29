<?php
include_once 'db_conn.php';
$sql = "DELETE FROM patient WHERE P_ID='" . $_GET["P_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'patient.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>