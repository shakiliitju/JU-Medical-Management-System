<?php
include_once 'db_conn.php';
$sql = "DELETE FROM ambulence WHERE Amb_ID='" . $_GET["Amb_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'ambulence.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>